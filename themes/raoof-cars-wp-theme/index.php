<?php
/**
 * Main blog index / fallback archive.
 *
 * @package RaoofCars
 */

get_header();
?>
<main id="primary" class="raoof-page-wrap" style="max-width:900px;">
	<header style="margin-bottom:40px;text-align:center;">
		<h1 class="entry-title" style="margin-bottom:8px;">
			<?php
			if (is_home() && ! is_front_page()) {
				$posts_page_id = (int) get_option('page_for_posts');
				if ($posts_page_id) {
					echo esc_html(get_the_title($posts_page_id));
				} else {
					esc_html_e('المدونة', 'raoof-cars');
				}
			} elseif (is_archive()) {
				the_archive_title();
			} else {
				esc_html_e('المدونة', 'raoof-cars');
			}
			?>
		</h1>
		<?php if (is_archive() && get_the_archive_description()) : ?>
			<div class="archive-description" style="font-family:'Tajawal',sans-serif;color:#4A463E;"><?php the_archive_description(); ?></div>
		<?php endif; ?>
	</header>

	<?php if (have_posts()) : ?>
		<div style="display:grid;gap:32px;">
			<?php
			while (have_posts()) :
				the_post();
				?>
				<article <?php post_class(); ?> style="border:1px solid #D9D2C4;padding:28px;background:white;text-align:right;">
					<h2 style="font-family:'Cairo','Tajawal',sans-serif;font-size:22px;margin:0 0 12px;">
						<a href="<?php the_permalink(); ?>" style="color:#1F1B16;text-decoration:none;"><?php the_title(); ?></a>
					</h2>
					<p style="font-family:'Tajawal',sans-serif;font-size:14px;color:#8A857B;margin:0 0 12px;">
						<time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
					</p>
					<div style="font-family:'Tajawal',sans-serif;font-size:16px;line-height:1.75;color:#4A463E;">
						<?php the_excerpt(); ?>
					</div>
					<p style="margin:16px 0 0;">
						<a href="<?php the_permalink(); ?>" style="color:#D4A017;font-weight:700;text-decoration:none;font-family:'Tajawal',sans-serif;"><?php esc_html_e('اقرأ المزيد', 'raoof-cars'); ?></a>
					</p>
				</article>
				<?php
			endwhile;
			the_posts_pagination(
				array(
					'mid_size'  => 2,
					'prev_text' => __('السابق', 'raoof-cars'),
					'next_text' => __('التالي', 'raoof-cars'),
				)
			);
			?>
		</div>
	<?php else : ?>
		<p style="font-family:'Tajawal',sans-serif;text-align:center;color:#4A463E;"><?php esc_html_e('لا توجد مقالات بعد.', 'raoof-cars'); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();
