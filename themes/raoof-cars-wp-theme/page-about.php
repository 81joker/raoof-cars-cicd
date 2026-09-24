<?php
/**
 * Template Name: About Page
 *
 * Hero + page content from the editor.
 *
 * @package RaoofCars
 */

get_header();

$page_id = get_queried_object_id();
$title   = $page_id ? get_the_title($page_id) : __( 'من نحن', 'raoof-cars' );

get_template_part(
	'template-parts/page-hero',
	null,
	array(
		'eyebrow'   => 'ABOUT US',
		'title'     => $title,
		'image_url' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=1800&q=80',
		'height'    => 480,
	)
);

while (have_posts()) :
	the_post();
	?>
	<main id="primary" class="raoof-page-wrap">
		<article <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	</main>
	<?php
endwhile;

get_footer();
