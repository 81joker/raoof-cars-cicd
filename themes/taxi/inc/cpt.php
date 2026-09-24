<?php
/**
 * cpt.php
 *
 * Registers custom post types and taxonomies for the Raoof Cars theme.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register all custom post types.
 */
function raoof_register_post_types(): void {

    /* ------------------------------------------------------------------
     * Fleet — individual vehicles / service cards
     * ------------------------------------------------------------------ */
    register_post_type(
        'raoof_fleet',
        [
            'labels'  => [
                'name'               => _x( 'Fleet', 'post type general name', 'raoof-cars' ),
                'singular_name'      => _x( 'Vehicle', 'post type singular name', 'raoof-cars' ),
                'add_new_item'       => __( 'Add New Vehicle', 'raoof-cars' ),
                'edit_item'          => __( 'Edit Vehicle', 'raoof-cars' ),
                'new_item'           => __( 'New Vehicle', 'raoof-cars' ),
                'view_item'          => __( 'View Vehicle', 'raoof-cars' ),
                'search_items'       => __( 'Search Fleet', 'raoof-cars' ),
                'not_found'          => __( 'No vehicles found.', 'raoof-cars' ),
                'not_found_in_trash' => __( 'No vehicles found in Trash.', 'raoof-cars' ),
                'menu_name'          => __( 'Fleet', 'raoof-cars' ),
            ],
            'public'             => true,
            'has_archive'        => true,
            'publicly_queryable' => true,
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-car',
            'menu_position'      => 5,
            'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ],
            'rewrite'            => [ 'slug' => 'fleet', 'with_front' => false ],
        ]
    );

    /* ------------------------------------------------------------------
     * Bookings — stores form submissions, admin-only
     * ------------------------------------------------------------------ */
    register_post_type(
        'raoof_booking',
        [
            'labels'  => [
                'name'          => _x( 'Bookings', 'post type general name', 'raoof-cars' ),
                'singular_name' => _x( 'Booking', 'post type singular name', 'raoof-cars' ),
                'menu_name'     => __( 'Bookings', 'raoof-cars' ),
            ],
            'public'      => false,
            'show_ui'     => true,
            'show_in_menu'=> true,
            'menu_icon'   => 'dashicons-calendar-alt',
            'menu_position' => 6,
            'supports'    => [ 'title' ],
            'capabilities'=> [
                'create_posts' => 'do_not_allow',
            ],
            'map_meta_cap'=> true,
        ]
    );
}
add_action( 'init', 'raoof_register_post_types' );

/**
 * Register taxonomies.
 */
function raoof_register_taxonomies(): void {

    /* ------------------------------------------------------------------
     * Service Type — for Fleet CPT
     * ------------------------------------------------------------------ */
    register_taxonomy(
        'raoof_service_type',
        'raoof_fleet',
        [
            'labels' => [
                'name'          => _x( 'Service Types', 'taxonomy general name', 'raoof-cars' ),
                'singular_name' => _x( 'Service Type', 'taxonomy singular name', 'raoof-cars' ),
                'all_items'     => __( 'All Service Types', 'raoof-cars' ),
                'edit_item'     => __( 'Edit Service Type', 'raoof-cars' ),
                'add_new_item'  => __( 'Add New Service Type', 'raoof-cars' ),
                'menu_name'     => __( 'Service Types', 'raoof-cars' ),
            ],
            'public'       => true,
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite'      => [ 'slug' => 'service-type', 'with_front' => false ],
        ]
    );
}
add_action( 'init', 'raoof_register_taxonomies' );
