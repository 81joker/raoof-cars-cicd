<?php
/**
 * Feature cards section (home).
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<section style="background:#F5F0E8;padding-block:120px;">
	<div style="max-width:1200px;margin:0 auto;padding:0 40px;text-align:center;">
		<div style="font-family:'Tajawal',sans-serif;font-size:13px;font-weight:500;letter-spacing:0.32em;color:#D4A017;text-transform:uppercase;margin-bottom:14px;"><?php esc_html_e('خدماتنا', 'raoof-cars'); ?></div>
		<h2 style="font-family:'Cairo','Tajawal',sans-serif;font-size:clamp(28px,3.4vw,40px);font-weight:700;color:#1F1B16;margin:0;line-height:1.3;text-align:center;"><?php esc_html_e('ماذا نقدم لكم؟', 'raoof-cars'); ?></h2>
		<p style="font-family:'Tajawal',sans-serif;font-size:18px;line-height:1.75;color:#4A463E;max-width:680px;margin:20px auto 0;">
			<?php esc_html_e('منذ تأسيسنا، التزمنا بتقديم تجربة تنقل ترقى لتطلعاتكم — راحة وخصوصية وسلامة في كل رحلة.', 'raoof-cars'); ?>
		</p>
		<div class="raoof-feature-grid" style="margin-top:64px;display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
			<?php
			$items = array(
				array(
					'icon'  => 'calendar-days',
					'title' => __('تأجير يومي أو أسبوعي', 'raoof-cars'),
					'desc'  => __('احجز سيارتك بمرونة كاملة — من يوم واحد إلى أسبوع، مع باقات أسعار تنافسية ومخصصة لاحتياجاتك.', 'raoof-cars'),
				),
				array(
					'icon'  => 'map',
					'title' => __('رحلات بين المدن', 'raoof-cars'),
					'desc'  => __('تنقل بين العواصم الأوروبية الكبرى براحة ورفاهية، مع سائق محترف يتحدث العربية ويعرف الطرق.', 'raoof-cars'),
				),
				array(
					'icon'  => 'map-pinned',
					'title' => __('باقات سياحية متكاملة', 'raoof-cars'),
					'desc'  => __('باقات مصممة بعناية تشمل التنقل والإرشاد السياحي بين أهم المعالم في أوروبا.', 'raoof-cars'),
				),
			);
			foreach ($items as $it) :
				?>
				<div class="raoof-card-hover" style="background:white;border:1px solid #D9D2C4;padding:36px;text-align:right;">
					<div style="width:56px;height:56px;border:1px solid #D4A017;color:#D4A017;display:flex;align-items:center;justify-content:center;margin-bottom:24px;">
						<i data-lucide="<?php echo esc_attr($it['icon']); ?>" width="26" height="26"></i>
					</div>
					<h3 style="font-family:'Cairo','Tajawal',sans-serif;font-size:22px;font-weight:700;color:#1F1B16;margin:0 0 12px;"><?php echo esc_html($it['title']); ?></h3>
					<p style="font-family:'Tajawal',sans-serif;font-size:16px;line-height:1.75;color:#4A463E;margin:0;"><?php echo esc_html($it['desc']); ?></p>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
