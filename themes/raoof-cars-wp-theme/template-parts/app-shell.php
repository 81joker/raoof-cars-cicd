<?php
/**
 * Shared React/Babel shell for Raoof Cars pages.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$theme_uri = get_template_directory_uri();
?>
<main id="primary">
	<div id="root"></div>
</main>

<script src="https://unpkg.com/react@18.3.1/umd/react.development.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/react-dom@18.3.1/umd/react-dom.development.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@babel/standalone@7.29.0/babel.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

<script>
	window.RAOOF_THEME = {
		initialPage: <?php echo wp_json_encode(raoof_cars_detect_initial_page()); ?>,
		logoGold: <?php echo wp_json_encode($theme_uri . '/assets/images/logo-gold.svg'); ?>
	};
</script>

<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/Primitives.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/Navbar.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/Hero.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/ServiceStrip.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/FeatureCards.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/USPSection.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/BookingForm.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/StatsCounter.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/FleetCards.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/ServicePanel.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/WhatsAppFab.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/Footer.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/pages.jsx'); ?>"></script>
<script type="text/babel" src="<?php echo esc_url($theme_uri . '/assets/js/app.jsx'); ?>"></script>
