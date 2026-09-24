<?php
/**
 * Booking form (front-end only; extend with Contact Form 7 or custom handler later).
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$sent = isset($_GET['booking_sent']) && '1' === $_GET['booking_sent'];
?>
<section style="background:#F5F0E8;padding-block:100px;">
	<div style="max-width:980px;margin:0 auto;padding:0 40px;text-align:center;">
		<?php if ($sent) : ?>
			<p role="status" style="font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;background:rgba(212,160,23,0.15);border:1px solid rgba(212,160,23,0.35);padding:14px 18px;border-radius:4px;margin:0 0 24px;text-align:center;">
				<?php esc_html_e('تم استلام طلبكم. سنتواصل معكم قريبًا.', 'raoof-cars'); ?>
			</p>
		<?php endif; ?>
		<div style="font-family:'Tajawal',sans-serif;font-size:13px;font-weight:500;letter-spacing:0.32em;color:#D4A017;text-transform:uppercase;margin-bottom:14px;"><?php esc_html_e('احجز رحلتك', 'raoof-cars'); ?></div>
		<h2 style="font-family:'Cairo','Tajawal',sans-serif;font-size:clamp(28px,3.4vw,40px);font-weight:700;color:#1F1B16;margin:0;line-height:1.3;text-align:center;"><?php esc_html_e('نموذج الحجز السريع', 'raoof-cars'); ?></h2>
		<p style="font-family:'Tajawal',sans-serif;font-size:17px;line-height:1.75;color:#4A463E;margin:20px auto 48px;max-width:600px;">
			<?php esc_html_e('اترك لنا تفاصيل رحلتك وسيتواصل معكم فريقنا خلال ساعات قليلة لتأكيد الحجز.', 'raoof-cars'); ?>
		</p>
		<form class="raoof-booking-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" style="background:white;border:1px solid #D9D2C4;padding:40px;text-align:right;box-shadow:0 8px 24px rgba(17,17,17,0.06);">
			<?php wp_nonce_field('raoof_booking', 'raoof_booking_nonce'); ?>
			<input type="hidden" name="action" value="raoof_booking_submit" />

			<div class="raoof-booking-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px;">
				<div>
					<label style="display:block;font-family:'Tajawal',sans-serif;font-size:13px;font-weight:600;color:#1F1B16;margin-bottom:6px;"><?php esc_html_e('مكان الاستلام', 'raoof-cars'); ?></label>
					<input name="pickup" type="text" style="width:100%;border:1px solid #D9D2C4;background:white;padding:14px 16px;font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;border-radius:4px;outline:none;" placeholder="<?php esc_attr_e('فيينا - فندق إنتركونتيننتال', 'raoof-cars'); ?>" />
				</div>
				<div>
					<label style="display:block;font-family:'Tajawal',sans-serif;font-size:13px;font-weight:600;color:#1F1B16;margin-bottom:6px;"><?php esc_html_e('الوجهة', 'raoof-cars'); ?></label>
					<input name="destination" type="text" style="width:100%;border:1px solid #D9D2C4;background:white;padding:14px 16px;font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;border-radius:4px;outline:none;" placeholder="<?php esc_attr_e('ميونخ', 'raoof-cars'); ?>" />
				</div>
				<div>
					<label style="display:block;font-family:'Tajawal',sans-serif;font-size:13px;font-weight:600;color:#1F1B16;margin-bottom:6px;"><?php esc_html_e('تاريخ الانطلاق', 'raoof-cars'); ?></label>
					<input name="date" type="date" style="width:100%;border:1px solid #D9D2C4;background:white;padding:14px 16px;font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;border-radius:4px;outline:none;" />
				</div>
				<div>
					<label style="display:block;font-family:'Tajawal',sans-serif;font-size:13px;font-weight:600;color:#1F1B16;margin-bottom:6px;"><?php esc_html_e('نوع الخدمة', 'raoof-cars'); ?></label>
					<select name="service" style="width:100%;border:1px solid #D9D2C4;background:white;padding:14px 16px;font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;border-radius:4px;outline:none;">
						<option><?php esc_html_e('مع سائق', 'raoof-cars'); ?></option>
						<option><?php esc_html_e('بدون سائق', 'raoof-cars'); ?></option>
						<option><?php esc_html_e('استقبال مطار', 'raoof-cars'); ?></option>
						<option><?php esc_html_e('باقة سياحية', 'raoof-cars'); ?></option>
					</select>
				</div>
				<div>
					<label style="display:block;font-family:'Tajawal',sans-serif;font-size:13px;font-weight:600;color:#1F1B16;margin-bottom:6px;"><?php esc_html_e('الاسم الكامل', 'raoof-cars'); ?></label>
					<input name="fullname" type="text" style="width:100%;border:1px solid #D9D2C4;background:white;padding:14px 16px;font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;border-radius:4px;outline:none;" placeholder="<?php esc_attr_e('الاسم الكامل', 'raoof-cars'); ?>" />
				</div>
				<div>
					<label style="display:block;font-family:'Tajawal',sans-serif;font-size:13px;font-weight:600;color:#1F1B16;margin-bottom:6px;"><?php esc_html_e('رقم الهاتف', 'raoof-cars'); ?></label>
					<input name="phone" type="tel" dir="ltr" style="width:100%;border:1px solid #D9D2C4;background:white;padding:14px 16px;font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;border-radius:4px;outline:none;" placeholder="+966 5x xxx xxxx" />
				</div>
			</div>
			<div style="margin-bottom:24px;">
				<label style="display:block;font-family:'Tajawal',sans-serif;font-size:13px;font-weight:600;color:#1F1B16;margin-bottom:6px;"><?php esc_html_e('ملاحظات إضافية (اختياري)', 'raoof-cars'); ?></label>
				<textarea name="notes" style="width:100%;border:1px solid #D9D2C4;background:white;padding:14px 16px;font-family:'Tajawal',sans-serif;font-size:15px;color:#1F1B16;border-radius:4px;outline:none;min-height:80px;resize:vertical;" placeholder="<?php esc_attr_e('عدد الركاب، الحقائب، توقيت محدد...', 'raoof-cars'); ?>"></textarea>
			</div>
			<div style="display:flex;justify-content:flex-start;align-items:center;gap:16px;flex-wrap:wrap;">
				<button type="submit" class="raoof-btn raoof-btn--primary">
					<i data-lucide="calendar-check" width="18" height="18"></i>
					<?php esc_html_e('تأكيد الحجز', 'raoof-cars'); ?>
				</button>
				<span style="font-family:'Tajawal',sans-serif;font-size:13px;color:#8A857B;">
					<?php esc_html_e('أو تواصل عبر واتساب:', 'raoof-cars'); ?>
					<strong style="color:#1F1B16;" dir="ltr">+43 660 843 3874</strong>
				</span>
			</div>
		</form>
	</div>
</section>
