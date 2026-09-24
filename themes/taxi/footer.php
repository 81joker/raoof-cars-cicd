<?php
/**
 * footer.php
 *
 * Site footer. Contact details pulled from ACF site settings.
 */

$phone   = raoof_option( 'site_phone',   '+43 660 843 3874' );
$email   = raoof_option( 'site_email',   'info@raoofcars.com' );
$address = raoof_option( 'site_address', "Pernerstorferstraße 22\n3100 St. Pölten, Austria" );
?>

<footer class="footer" role="contentinfo">
    <div class="container">

        <div class="footer__grid">

            <!-- Brand column -->
            <div>
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-gold.svg' ); ?>"
                         alt="<?php bloginfo( 'name' ); ?>"
                         class="footer__logo"
                         width="180" height="60">
                <?php endif; ?>

                <p class="footer__about">
                    <?php
                    printf(
                        /* translators: %s: brand wordmark */
                        esc_html__( '%s — Luxury car rental and tourist guidance services across Europe.', 'raoof-cars' ),
                        '<span class="wordmark">Raoof Cars</span>'
                    );
                    ?>
                </p>

                <div class="footer__social" aria-label="<?php esc_attr_e( 'Social media', 'raoof-cars' ); ?>">
                    <?php
                    raoof_social_link( 'site_whatsapp',   'whatsapp',  __( 'WhatsApp',  'raoof-cars' ) );
                    raoof_social_link( 'social_instagram', 'instagram', __( 'Instagram', 'raoof-cars' ) );
                    raoof_social_link( 'social_snapchat',  'snapchat',  __( 'Snapchat',  'raoof-cars' ) );
                    raoof_social_link( 'social_tiktok',    'tiktok',    __( 'TikTok',    'raoof-cars' ) );
                    ?>
                </div>
            </div>

            <!-- Quick links -->
            <nav aria-label="<?php esc_attr_e( 'Quick links', 'raoof-cars' ); ?>">
                <p class="footer__col-title"><?php esc_html_e( 'Quick Links', 'raoof-cars' ); ?></p>
                <ul class="footer__links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home',     'raoof-cars' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/fleet' ) ); ?>"><?php esc_html_e( 'Fleet',    'raoof-cars' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'raoof-cars' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About',    'raoof-cars' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact',  'raoof-cars' ); ?></a></li>
                </ul>
            </nav>

            <!-- Services -->
            <nav aria-label="<?php esc_attr_e( 'Services', 'raoof-cars' ); ?>">
                <p class="footer__col-title"><?php esc_html_e( 'Services', 'raoof-cars' ); ?></p>
                <ul class="footer__links">
                    <li><a href="#"><?php esc_html_e( 'With Driver',     'raoof-cars' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Self Drive',       'raoof-cars' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Airport Transfer', 'raoof-cars' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'City to City',     'raoof-cars' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Tourist Packages', 'raoof-cars' ); ?></a></li>
                </ul>
            </nav>

            <!-- Contact -->
            <address style="font-style: normal;">
                <p class="footer__col-title"><?php esc_html_e( 'Contact', 'raoof-cars' ); ?></p>

                <div class="footer__contact-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <span><?php echo nl2br( esc_html( $address ) ); ?></span>
                </div>

                <div class="footer__contact-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $phone ) ); ?>" dir="ltr">
                        <?php echo esc_html( $phone ); ?>
                    </a>
                </div>

                <div class="footer__contact-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    <a href="mailto:<?php echo esc_attr( $email ); ?>">
                        <?php echo esc_html( $email ); ?>
                    </a>
                </div>
            </address>

        </div><!-- /.footer__grid -->

        <div class="footer__bottom">
            <span>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                <span class="wordmark" style="font-size: 14px;">Raoof Cars</span>
                &mdash; <?php esc_html_e( 'All rights reserved.', 'raoof-cars' ); ?>
            </span>
            <span dir="ltr">Pernerstorferstraße 22 &middot; 3100 St. Pölten &middot; Austria</span>
        </div>

    </div><!-- /.container -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
