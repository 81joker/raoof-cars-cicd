<?php
/**
 * ajax.php
 *
 * AJAX handlers for the booking form submission.
 * Handles both logged-in and guest users.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_ajax_raoof_submit_booking',        'raoof_ajax_submit_booking' );
add_action( 'wp_ajax_nopriv_raoof_submit_booking', 'raoof_ajax_submit_booking' );

/**
 * Process a booking form submission.
 */
function raoof_ajax_submit_booking(): void {

    // 1. Verify nonce.
    check_ajax_referer( 'raoof_booking_nonce', 'nonce' );

    // 2. Sanitize inputs.
    $data = [
        'name'        => sanitize_text_field( $_POST['name']        ?? '' ),
        'phone'       => sanitize_text_field( $_POST['phone']       ?? '' ),
        'pickup'      => sanitize_text_field( $_POST['pickup']      ?? '' ),
        'destination' => sanitize_text_field( $_POST['destination'] ?? '' ),
        'date'        => sanitize_text_field( $_POST['date']        ?? '' ),
        'service'     => sanitize_text_field( $_POST['service']     ?? '' ),
        'notes'       => sanitize_textarea_field( $_POST['notes']   ?? '' ),
    ];

    // 3. Validate required fields.
    if ( empty( $data['name'] ) || empty( $data['phone'] ) ) {
        wp_send_json_error(
            [ 'message' => __( 'Please fill in your name and phone number.', 'raoof-cars' ) ],
            422
        );
    }

    // 4. Save booking as a custom post.
    $post_id = wp_insert_post( [
        'post_type'   => 'raoof_booking',
        'post_title'  => sprintf( '%s — %s', $data['name'], $data['date'] ?: current_time( 'Y-m-d' ) ),
        'post_status' => 'publish',
    ] );

    if ( is_wp_error( $post_id ) ) {
        wp_send_json_error(
            [ 'message' => __( 'Could not save your booking. Please try again.', 'raoof-cars' ) ],
            500
        );
    }

    // 5. Save all fields as post meta.
    foreach ( $data as $key => $value ) {
        update_post_meta( $post_id, "_raoof_{$key}", $value );
    }

    // 6. Send notification email to admin.
    raoof_send_booking_email( $post_id, $data );

    // 7. Respond.
    wp_send_json_success( [
        'message' => __( 'Your booking request has been received. We will contact you shortly.', 'raoof-cars' ),
    ] );
}

/**
 * Send a booking notification email to the site admin.
 *
 * @param int   $post_id  Booking post ID.
 * @param array $data     Sanitized booking data.
 */
function raoof_send_booking_email( int $post_id, array $data ): void {

    $admin_email = get_option( 'admin_email' );
    $site_name   = get_bloginfo( 'name' );

    $subject = sprintf(
        /* translators: 1: customer name, 2: booking date */
        __( '[%1$s] New Booking Request from %2$s', 'raoof-cars' ),
        $site_name,
        $data['name']
    );

    $message_lines = [
        __( 'A new booking request has been submitted:', 'raoof-cars' ),
        '',
        sprintf( __( 'Name:        %s', 'raoof-cars' ), $data['name'] ),
        sprintf( __( 'Phone:       %s', 'raoof-cars' ), $data['phone'] ),
        sprintf( __( 'Pickup:      %s', 'raoof-cars' ), $data['pickup'] ),
        sprintf( __( 'Destination: %s', 'raoof-cars' ), $data['destination'] ),
        sprintf( __( 'Date:        %s', 'raoof-cars' ), $data['date'] ),
        sprintf( __( 'Service:     %s', 'raoof-cars' ), $data['service'] ),
        sprintf( __( 'Notes:       %s', 'raoof-cars' ), $data['notes'] ),
        '',
        sprintf(
            /* translators: %s: URL of booking record in admin */
            __( 'View booking in dashboard: %s', 'raoof-cars' ),
            get_edit_post_link( $post_id )
        ),
    ];

    wp_mail(
        $admin_email,
        $subject,
        implode( "\n", $message_lines ),
        [ 'Content-Type: text/plain; charset=UTF-8' ]
    );
}
