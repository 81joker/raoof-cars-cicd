<?php
/**
 * Single post template.
 *
 * @package RaoofCars
 */

get_header();

while (have_posts()) :
	the_post();
	?>
	<main id="primary" class="raoof-page-wrap">
		<article <?php post_class(); ?>>
			<header class="entry-header" style="margin-bottom:24px;">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<p style="font-family:'Tajawal',sans-serif;font-size:14px;color:#8A857B;margin:0;">
					<time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
				</p>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	</main>
	<?php
endwhile;

get_footer();
