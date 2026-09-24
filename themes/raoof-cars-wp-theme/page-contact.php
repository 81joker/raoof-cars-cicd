<?php
/**
 * Template Name: Contact Page
 *
 * Hero + booking form + optional editor content below.
 *
 * @package RaoofCars
 */

get_header();

$page_id = get_queried_object_id();
$title   = $page_id ? get_the_title($page_id) : __( 'تواصل معنا', 'raoof-cars' );

get_template_part(
	'template-parts/page-hero',
	null,
	array(
		'eyebrow'   => 'CONTACT',
		'title'     => $title,
		'image_url' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=1800&q=80',
		'height'    => 480,
	)
);

get_template_part('template-parts/section-booking-form');

while (have_posts()) :
	the_post();
	$raw = get_post_field('post_content', get_the_ID());
	if (trim((string) $raw) !== '') :
		?>
		<main id="secondary-content" class="raoof-page-wrap" style="padding-top:0;">
			<article <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		</main>
		<?php
	endif;
endwhile;

get_footer();
