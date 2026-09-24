<?php
/**
 * Three-column strip overlapping hero bottom.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<section style="max-width:1200px;margin:-80px auto 0;position:relative;z-index:5;padding:0 40px;">
	<div class="raoof-service-strip-inner" style="background:rgba(17,17,17,0.92);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);border:1px solid rgba(212,160,23,0.25);padding:36px;display:grid;grid-template-columns:repeat(3,1fr);gap:32px;box-shadow:0 24px 60px rgba(0,0,0,0.45);">
		<div class="raoof-service-strip-item" style="display:flex;align-items:center;gap:18px;padding-inline-start:0;border-inline-start:none;">
			<div style="width:56px;height:56px;flex-shrink:0;border:1px solid #D4A017;color:#D4A017;display:flex;align-items:center;justify-content:center;">
				<i data-lucide="user-round" width="26" height="26"></i>
			</div>
			<div>
				<h4 style="font-family:'Cairo','Tajawal',sans-serif;font-size:17px;font-weight:700;color:#D4A017;margin:0 0 4px;"><?php esc_html_e('خدمة تأجير السيارات مع سائق', 'raoof-cars'); ?></h4>
				<p style="font-family:'Tajawal',sans-serif;font-size:14px;line-height:1.5;color:rgba(255,255,255,0.72);margin:0;"><?php esc_html_e('سائقون محترفون يتحدثون العربية', 'raoof-cars'); ?></p>
			</div>
		</div>
		<div class="raoof-service-strip-item" style="display:flex;align-items:center;gap:18px;padding-inline-start:32px;border-inline-start:1px solid rgba(212,160,23,0.2);">
			<div style="width:56px;height:56px;flex-shrink:0;border:1px solid #D4A017;color:#D4A017;display:flex;align-items:center;justify-content:center;">
				<i data-lucide="plane" width="26" height="26"></i>
			</div>
			<div>
				<h4 style="font-family:'Cairo','Tajawal',sans-serif;font-size:17px;font-weight:700;color:#D4A017;margin:0 0 4px;"><?php esc_html_e('خدمة الاستقبال من المطار', 'raoof-cars'); ?></h4>
				<p style="font-family:'Tajawal',sans-serif;font-size:14px;line-height:1.5;color:rgba(255,255,255,0.72);margin:0;"><?php esc_html_e('استقبال فاخر مباشرة من بوابة الوصول', 'raoof-cars'); ?></p>
			</div>
		</div>
		<div class="raoof-service-strip-item" style="display:flex;align-items:center;gap:18px;padding-inline-start:32px;border-inline-start:1px solid rgba(212,160,23,0.2);">
			<div style="width:56px;height:56px;flex-shrink:0;border:1px solid #D4A017;color:#D4A017;display:flex;align-items:center;justify-content:center;">
				<i data-lucide="car" width="26" height="26"></i>
			</div>
			<div>
				<h4 style="font-family:'Tajawal',sans-serif;font-size:17px;font-weight:700;color:#D4A017;margin:0 0 4px;"><?php esc_html_e('خدمة تأجير السيارات', 'raoof-cars'); ?></h4>
				<p style="font-family:'Tajawal',sans-serif;font-size:14px;line-height:1.5;color:rgba(255,255,255,0.72);margin:0;"><?php esc_html_e('أحدث الموديلات بدون سائق', 'raoof-cars'); ?></p>
			</div>
		</div>
	</div>
</section>
