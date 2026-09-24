<?php
/**
 * Template Name: Fleet Page
 *
 * @package RaoofCars
 */

get_header();

get_template_part(
	'template-parts/page-hero',
	null,
	array(
		'eyebrow'   => 'OUR FLEET',
		'title'     => __( 'اسطول السيارات', 'raoof-cars' ),
		'image_url' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1800&q=80',
		'height'    => 480,
	)
);

get_template_part('template-parts/section-fleet-cards' );
get_template_part('template-parts/section-fleet-panels');
get_template_part('template-parts/section-stats');

get_footer();
