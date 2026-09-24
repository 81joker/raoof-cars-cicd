<?php
/**
 * Front page template (classic PHP sections).
 *
 * @package RaoofCars
 */

get_header();
?>
<?php
get_template_part('template-parts/section-hero-home');
get_template_part('template-parts/section-service-strip');
?>
<div style="background:#F5F0E8;height:80px;"></div>
<?php
get_template_part('template-parts/section-feature-cards');
get_template_part('template-parts/section-usp');
get_template_part('template-parts/section-stats');
get_template_part('template-parts/section-booking-form');
get_footer();
