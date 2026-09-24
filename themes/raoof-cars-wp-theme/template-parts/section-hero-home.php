<?php
/**
 * Home hero: video if present, else static image.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$video_path = get_template_directory() . '/assets/video-car.mp4';
$video_url  = raoof_cars_asset_uri('assets/video-car.mp4');
$has_video  = is_readable($video_path);

$u_book  = esc_url(raoof_cars_page_url('contact'));
$u_fleet = esc_url(raoof_cars_page_url('fleet'));
?>
<section style="position:relative;min-height:620px;display:flex;align-items:center;justify-content:center;padding-block:80px;overflow:hidden;">
	<?php if ($has_video) : ?>
		<video autoplay muted loop playsinline style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;">
			<source src="<?php echo esc_url($video_url); ?>" type="video/mp4" />
		</video>
	<?php else : ?>
		<div style="position:absolute;inset:0;z-index:0;background-image:url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=2000&q=80');background-size:cover;background-position:center;"></div>
	<?php endif; ?>

	<div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(17,17,17,0.85) 0%,rgba(17,17,17,0.7) 45%,rgba(17,17,17,0.95) 100%);z-index:1;"></div>

	<div style="position:relative;z-index:2;max-width:1100px;padding:0 40px;text-align:center;color:white;">
		<div style="font-family:'Tajawal',sans-serif;font-size:14px;font-weight:500;letter-spacing:0.32em;color:#D4A017;margin-bottom:24px;text-transform:uppercase;">
			LUXURY · CHAUFFEUR · EUROPE
		</div>
		<h1 style="font-family:'Cairo','Tajawal',sans-serif;font-size:clamp(36px,5.5vw,60px);font-weight:700;line-height:1.25;margin:0;text-wrap:balance;">
			<?php esc_html_e('شركة', 'raoof-cars'); ?>
			<span style="font-family:'Cormorant Garamond',serif;font-style:italic;color:#D4A017;font-weight:700;">Raoof&nbsp;Cars</span>
			<?php esc_html_e('للأرشاد السياحي', 'raoof-cars'); ?>
			<br />
			<?php esc_html_e('وتأجير السيارات مع سائق وبدون', 'raoof-cars'); ?>
			<br />
			<?php esc_html_e('في جميع أنحاء أوروبا', 'raoof-cars'); ?>
		</h1>
		<p style="font-family:'Tajawal',sans-serif;font-size:19px;line-height:1.75;color:rgba(255,255,255,0.78);max-width:720px;margin:32px auto 0;">
			<?php esc_html_e('خدمة استثنائية بمعايير الضيافة الخمس نجوم، بسيارات حديثة وسائقين محترفين يتحدثون العربية.', 'raoof-cars'); ?>
		</p>
		<div style="display:flex;gap:16px;justify-content:center;margin-top:44px;flex-wrap:wrap;">
			<a class="raoof-btn raoof-btn--primary" href="<?php echo esc_url($u_book); ?>">
				<i data-lucide="calendar-days" width="18" height="18"></i>
				<?php esc_html_e('احجز الآن', 'raoof-cars'); ?>
			</a>
			<a class="raoof-btn raoof-btn--outline" href="<?php echo esc_url($u_fleet); ?>">
				<i data-lucide="car" width="18" height="18"></i>
				<?php esc_html_e('شاهد الأسطول', 'raoof-cars'); ?>
			</a>
		</div>
	</div>
</section>
