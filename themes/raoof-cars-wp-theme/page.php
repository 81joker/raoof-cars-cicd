<?php
/**
 * Default page template — editor content (Gutenberg).
 *
 * @package RaoofCars
 */

get_header();

while (have_posts()) :
	the_post();
	?>
	<main id="primary" class="raoof-page-wrap">
		<article <?php post_class(); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	</main>
	<?php
endwhile;

get_footer();
