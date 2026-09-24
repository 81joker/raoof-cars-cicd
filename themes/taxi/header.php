<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
/**
 * WhatsApp floating action button.
 * URL pulled from ACF site options with a hardcoded fallback.
 */
$whatsapp_url = raoof_option( 'site_whatsapp', 'https://wa.me/436608433874' );
?>
<a href="<?php echo esc_url( $whatsapp_url ); ?>"
   class="whatsapp-fab"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="<?php esc_attr_e( 'Contact us on WhatsApp', 'raoof-cars' ); ?>">
    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.374 0 0 5.373 0 12c0 2.12.554 4.133 1.528 5.89L.066 23.734a.5.5 0 00.6.6l5.849-1.463A11.945 11.945 0 0012 24c6.626 0 12-5.373 12-12S18.626 0 12 0z"/>
    </svg>
    <?php esc_html_e( 'WhatsApp', 'raoof-cars' ); ?>
</a>

<!-- ================================================================
     NAVBAR
     ================================================================ -->
<header class="navbar" id="js-navbar" role="banner">
    <div class="navbar__inner">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           class="navbar__logo"
           aria-label="<?php bloginfo( 'name' ); ?> — <?php esc_attr_e( 'Homepage', 'raoof-cars' ); ?>">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                printf(
                    '<img src="%s" alt="%s" width="180" height="52">',
                    esc_url( get_template_directory_uri() . '/assets/images/logo-gold.svg' ),
                    esc_attr( get_bloginfo( 'name' ) )
                );
            }
            ?>
        </a>

        <!-- Primary navigation -->
        <nav class="navbar__nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'raoof-cars' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
               class="<?php echo raoof_nav_active( 'home' ); ?>">
                <?php esc_html_e( 'Home', 'raoof-cars' ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/fleet' ) ); ?>"
               class="<?php echo raoof_nav_active( 'fleet' ); ?>">
                <?php esc_html_e( 'Fleet', 'raoof-cars' ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
               class="<?php echo raoof_nav_active( 'services' ); ?>">
                <?php esc_html_e( 'Services', 'raoof-cars' ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/about' ) ); ?>"
               class="<?php echo raoof_nav_active( 'about' ); ?>">
                <?php esc_html_e( 'About', 'raoof-cars' ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
               class="<?php echo raoof_nav_active( 'contact' ); ?>">
                <?php esc_html_e( 'Contact', 'raoof-cars' ); ?>
            </a>
        </nav>

        <!-- Contact area: social + phone -->
        <div class="navbar__contact">

            <div class="navbar__social" aria-label="<?php esc_attr_e( 'Social media links', 'raoof-cars' ); ?>">
                <?php
                raoof_social_link( 'site_whatsapp',  'whatsapp',  __( 'WhatsApp',  'raoof-cars' ) );
                raoof_social_link( 'social_instagram','instagram', __( 'Instagram', 'raoof-cars' ) );
                raoof_social_link( 'social_snapchat', 'snapchat',  __( 'Snapchat',  'raoof-cars' ) );
                raoof_social_link( 'social_tiktok',   'tiktok',    __( 'TikTok',    'raoof-cars' ) );
                ?>
            </div>

            <span class="navbar__divider" aria-hidden="true"></span>

            <?php
            $phone     = raoof_option( 'site_phone', '+43 660 843 3874' );
            $phone_url = 'tel:' . preg_replace( '/\s+/', '', $phone );
            ?>
            <a href="<?php echo esc_url( $phone_url ); ?>" class="navbar__phone" dir="ltr">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
                <?php echo esc_html( $phone ); ?>
            </a>

        </div>

        <!-- Mobile burger -->
        <button class="navbar__burger"
                id="js-burger"
                aria-controls="js-mobile-menu"
                aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation', 'raoof-cars' ); ?>">
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <line x1="3" y1="6"  x2="21" y2="6"/>
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
        </button>

    </div><!-- /.navbar__inner -->

    <!-- Mobile menu -->
    <nav class="mobile-menu"
         id="js-mobile-menu"
         aria-label="<?php esc_attr_e( 'Mobile navigation', 'raoof-cars' ); ?>"
         aria-hidden="true">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           class="<?php echo raoof_nav_active( 'home' ); ?>">
            <?php esc_html_e( 'Home', 'raoof-cars' ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/fleet' ) ); ?>"
           class="<?php echo raoof_nav_active( 'fleet' ); ?>">
            <?php esc_html_e( 'Fleet', 'raoof-cars' ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
           class="<?php echo raoof_nav_active( 'services' ); ?>">
            <?php esc_html_e( 'Services', 'raoof-cars' ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>"
           class="<?php echo raoof_nav_active( 'about' ); ?>">
            <?php esc_html_e( 'About', 'raoof-cars' ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
           class="<?php echo raoof_nav_active( 'contact' ); ?>">
            <?php esc_html_e( 'Contact', 'raoof-cars' ); ?>
        </a>
    </nav>

</header><!-- /.navbar -->
