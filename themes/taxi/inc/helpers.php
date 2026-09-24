<?php
/**
 * helpers.php
 *
 * Reusable helper functions for the Raoof Cars theme.
 * All functions are prefixed with `raoof_` to avoid naming conflicts.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Get a site-settings ACF option value with a fallback.
 *
 * @param  string $field_name  ACF field name under the 'site_settings' options page.
 * @param  string $fallback    Value to return when the field is empty.
 * @return string
 */
function raoof_option( string $field_name, string $fallback = '' ): string {
    if ( ! function_exists( 'get_field' ) ) {
        return $fallback;
    }

    $value = get_field( $field_name, 'option' );

    return ( $value !== null && $value !== '' ) ? (string) $value : $fallback;
}

/**
 * Render an inline SVG icon by name.
 * Icons are stored in assets/images/icons/{name}.svg.
 *
 * @param  string $name    Icon filename without extension.
 * @param  array  $attrs   Additional HTML attributes (class, aria-hidden, etc.).
 * @return void
 */
function raoof_icon( string $name, array $attrs = [] ): void {
    $path = get_template_directory() . "/assets/images/icons/{$name}.svg";

    if ( ! file_exists( $path ) ) {
        return;
    }

    $attr_str = '';
    foreach ( $attrs as $key => $val ) {
        $attr_str .= ' ' . esc_attr( $key ) . '="' . esc_attr( $val ) . '"';
    }

    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo str_replace( '<svg', "<svg{$attr_str}", file_get_contents( $path ) );
}

/**
 * Output a social media link from site settings.
 *
 * @param  string $field_name  ACF option field name (e.g. 'social_whatsapp').
 * @param  string $icon_name   Icon name (e.g. 'whatsapp').
 * @param  string $label       Accessible label for the link.
 * @return void
 */
function raoof_social_link( string $field_name, string $icon_name, string $label ): void {
    $url = raoof_option( $field_name );

    if ( empty( $url ) ) {
        return;
    }

    printf(
        '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">',
        esc_url( $url ),
        esc_attr( $label )
    );

    raoof_icon( $icon_name, [ 'aria-hidden' => 'true' ] );

    echo '</a>';
}

/**
 * Return the active navbar link class for a given page slug or post ID.
 *
 * @param  string|int $identifier  Page slug or post ID.
 * @return string  'is-active' or empty string.
 */
function raoof_nav_active( $identifier ): string {
    if ( is_int( $identifier ) ) {
        return is_page( $identifier ) ? 'is-active' : '';
    }

    if ( 'home' === $identifier ) {
        return ( is_front_page() || is_home() ) ? 'is-active' : '';
    }

    return is_page( $identifier ) ? 'is-active' : '';
}

/**
 * Truncate a string to a given word count.
 *
 * @param  string $text       Source text.
 * @param  int    $max_words  Maximum number of words.
 * @param  string $suffix     Appended when text is truncated.
 * @return string
 */
function raoof_truncate( string $text, int $max_words = 20, string $suffix = '...' ): string {
    $words = explode( ' ', wp_strip_all_tags( $text ) );

    if ( count( $words ) <= $max_words ) {
        return $text;
    }

    return implode( ' ', array_slice( $words, 0, $max_words ) ) . $suffix;
}
