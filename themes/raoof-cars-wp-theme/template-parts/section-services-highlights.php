<?php
/**
 * Services page — three highlight cards.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$highlights = array(
	array('icon' => 'calendar-days', 'title' => __('تأجير يومي', 'raoof-cars'), 'desc' => __('احجز ليوم واحد بأسعار شفافة.', 'raoof-cars')),
	array('icon' => 'map', 'title' => __('رحلات بين المدن', 'raoof-cars'), 'desc' => __('تنقل بين العواصم بكل راحة.', 'raoof-cars')),
	array('icon' => 'map-pinned', 'title' => __('باقات سياحية', 'raoof-cars'), 'desc' => __('برامج كاملة مع إرشاد سياحي.', 'raoof-cars')),
);
?>
<section style="background:#F5F0E8;padding-block:100px;">
	<div style="max-width:1200px;margin:0 auto;padding:0 40px;">
		<div class="raoof-services-highlights" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
			<?php foreach ($highlights as $h) : ?>
				<div style="background:#111111;color:#F5F0E8;padding:36px;text-align:right;border:1px solid rgba(212,160,23,0.25);">
					<div style="width:56px;height:56px;border:1px solid #D4A017;color:#D4A017;display:flex;align-items:center;justify-content:center;margin-bottom:24px;">
						<i data-lucide="<?php echo esc_attr($h['icon']); ?>" width="26" height="26"></i>
					</div>
					<h3 style="font-family:'Cairo','Tajawal',sans-serif;font-size:22px;font-weight:700;color:#D4A017;margin:0 0 12px;"><?php echo esc_html($h['title']); ?></h3>
					<p style="font-family:'Tajawal',sans-serif;font-size:15px;line-height:1.75;color:rgba(255,255,255,0.72);margin:0;"><?php echo esc_html($h['desc']); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
