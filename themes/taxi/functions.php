<?php
/**
 * functions.php
 *
 * Core theme setup for Raoof Cars.
 * Responsibilities: theme support, enqueue, includes, options page.
 */

defined( 'ABSPATH' ) || exit;

/* ==========================================================================
   1. INCLUDES
   ========================================================================== */

// require_once get_template_directory() . '/inc/helpers.php';
// require_once get_template_directory() . '/inc/cpt.php';
// require_once get_template_directory() . '/inc/acf-fields.php';
// require_once get_template_directory() . '/inc/ajax.php';

/* ==========================================================================
   2. THEME SETUP
   ========================================================================== */

add_action( 'after_setup_theme', 'taxi_theme_setup' );

function taxi_theme_setup(): void {

    load_theme_textdomain( 'taxi-omr', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style',
    ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );

    // Image sizes
    add_image_size( 'raoof-hero',  1920, 900,  true );
    add_image_size( 'raoof-card',  800,  600,  true );
    add_image_size( 'raoof-thumb', 400,  300,  true );

    // Nav menus
    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'taxi-omr' ),
        'footer'  => __( 'Footer Navigation',  'taxi-omr' ),
    ] );
}

/* ==========================================================================
   3. ENQUEUE SCRIPTS & STYLES
   ========================================================================== */

add_action( 'wp_enqueue_scripts', 'taxi_enqueue_assets' );

function taxi_enqueue_assets(): void {

    $version = wp_get_theme()->get( 'Version' );

    // Google Fonts — Arabic + Latin
    wp_enqueue_style(
        'taxi-fonts',
        'https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&family=Tajawal:wght@300;400;500;700&family=Cormorant+Garamond:ital,wght@1,700&display=swap',
        [],
        null
    );

    // Design tokens
    wp_enqueue_style(
        'taxi-tokens',
        get_template_directory_uri() . '/assets/css/tokens.css',
        [ 'taxi-fonts' ],
        $version
    );

    // Component styles
    wp_enqueue_style(
        'taxi-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [ 'taxi-tokens' ],
        $version
    );

    // Navbar script
    wp_enqueue_script(
        'taxi-navbar',
        get_template_directory_uri() . '/assets/js/navbar.js',
        [],
        $version,
        true
    );

    // Booking form script — only when the form is present
    if ( is_front_page() || is_page( 'services' ) || is_page( 'contact' ) ) {
        wp_enqueue_script(
            'taxi-booking',
            get_template_directory_uri() . '/assets/js/booking.js',
            [],
            $version,
            true
        );

        wp_localize_script( 'taxi-booking', 'taxiAjax', [
            'url'   => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'taxi_booking_nonce' ),
            'i18n'  => [
                'sending' => __( 'Sending...', 'taxi-omr' ),
                'submit'  => __( 'Confirm Booking', 'taxi-omr' ),
            ],
        ] );
    }
}

/* ==========================================================================
   4. ACF OPTIONS PAGE
   ========================================================================== */

add_action( 'acf/init', 'taxi_register_options_page' );

function taxi_register_options_page(): void {

    if ( ! function_exists( 'acf_add_options_page' ) ) {
        return;
    }

    acf_add_options_page( [
        'page_title' => __( 'Raoof Cars Settings', 'raoof-cars' ),
        'menu_title' => __( 'Site Settings', 'raoof-cars' ),
        'menu_slug'  => 'raoof-settings',
        'capability' => 'manage_options',
        'icon_url'   => 'dashicons-admin-generic',
        'position'   => 2,
        'redirect'   => false,
    ] );
}

/* ==========================================================================
   5. EXCERPT
   ========================================================================== */

add_filter( 'excerpt_length', fn() => 25 );
add_filter( 'excerpt_more',   fn() => '&hellip;' );

/* ==========================================================================
   6. REMOVE EMOJI SCRIPTS (not needed — theme uses SVG icons)
   ========================================================================== */

remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );

/* ==========================================================================
   7. CLEAN UP <HEAD>
   ========================================================================== */

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
