<?php
/**
 * USP split section.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$benefits = array(
	__('سائقون محترفون يتحدثون العربية والإنجليزية', 'raoof-cars'),
	__('سيارات حديثة وفاخرة من أحدث الموديلات', 'raoof-cars'),
	__('تغطية لجميع المدن الأوروبية الكبرى', 'raoof-cars'),
	__('خدمة استقبال فاخرة من المطار على مدار الساعة', 'raoof-cars'),
	__('أسعار واضحة وثابتة بدون رسوم خفية', 'raoof-cars'),
	__('حجز مرن — يومي، أسبوعي، أو باقات سياحية', 'raoof-cars'),
	__('دعم 24/7 عبر واتساب باللغة العربية', 'raoof-cars'),
	__('سرية وخصوصية تامة لجميع رحلاتكم', 'raoof-cars'),
);
$img = 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1400&q=80';
?>
<section style="background:#111111;">
	<div class="raoof-usp-split" style="max-width:1440px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;min-height:560px;">
		<div style="background:linear-gradient(180deg,rgba(17,17,17,0.2),rgba(17,17,17,0.65)),url('<?php echo esc_url($img); ?>') center/cover no-repeat;min-height:280px;"></div>
		<div style="padding:80px 64px;color:#F5F0E8;display:flex;flex-direction:column;justify-content:center;">
			<div style="font-family:'Tajawal',sans-serif;font-size:13px;font-weight:500;letter-spacing:0.32em;color:#D4A017;text-transform:uppercase;margin-bottom:14px;"><?php esc_html_e('لماذا تختارنا؟', 'raoof-cars'); ?></div>
			<h2 style="font-family:'Cairo','Tajawal',sans-serif;font-size:clamp(28px,3.4vw,40px);font-weight:700;color:#F5F0E8;margin:0 0 32px;line-height:1.3;"><?php esc_html_e('راحتكم وسلامتكم تأتي أولاً', 'raoof-cars'); ?></h2>
			<ul style="list-style:none;padding:0;margin:0;display:grid;grid-template-columns:1fr;gap:14px;">
				<?php foreach ($benefits as $b) : ?>
					<li style="display:flex;align-items:flex-start;gap:14px;">
						<span style="width:24px;height:24px;flex-shrink:0;border:1px solid #D4A017;color:#D4A017;display:inline-flex;align-items:center;justify-content:center;margin-top:3px;">
							<i data-lucide="check" width="14" height="14"></i>
						</span>
						<span style="font-family:'Tajawal',sans-serif;font-size:16px;line-height:1.75;color:rgba(255,255,255,0.82);"><?php echo esc_html($b); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
