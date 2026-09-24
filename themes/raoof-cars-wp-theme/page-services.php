<?php
/**
 * Template Name: Services Page
 *
 * @package RaoofCars
 */

get_header();

get_template_part(
	'template-parts/page-hero',
	null,
	array(
		'eyebrow'   => 'WHAT WE OFFER',
		'title'     => __( 'خدماتنا الفاخرة في جميع أنحاء أوروبا', 'raoof-cars' ),
		'image_url' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1800&q=80',
		'height'    => 480,
	)
);

get_template_part('template-parts/section-services-highlights');
get_template_part('template-parts/section-usp');
get_template_part('template-parts/section-booking-form');

get_footer();
