<?php
/**
 * Fleet page — four service panels.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$panels = array(
	array(
		'icon'  => 'briefcase',
		'title' => __('خدمة تأجير سيارة', 'raoof-cars'),
		'desc'  => __('سيارات حديثة تلبي احتياجات رجال الأعمال — راحة، فخامة، وخصوصية.', 'raoof-cars'),
		'img'   => 'https://images.unsplash.com/photo-1515940279136-2f419eea8051?w=1200&q=80',
	),
	array(
		'icon'  => 'plane',
		'title' => __('خدمة الاستقبال من المطار', 'raoof-cars'),
		'desc'  => __('استقبال راقي مباشرة من بوابة الوصول، مع متابعة موعد الرحلة.', 'raoof-cars'),
		'img'   => 'https://images.unsplash.com/photo-1556122071-e404eaedb77f?w=1200&q=80',
	),
	array(
		'icon'  => 'users',
		'title' => __('خدمة المجموعات', 'raoof-cars'),
		'desc'  => __('حافلات صغيرة وفاناتٍ فاخرة للمجموعات والعائلات الكبيرة.', 'raoof-cars'),
		'img'   => 'https://images.unsplash.com/photo-1464219789935-c2d9d9aba644?w=1200&q=80',
	),
	array(
		'icon'  => 'crown',
		'title' => __('خدمة VIP', 'raoof-cars'),
		'desc'  => __('تجربة استثنائية لكبار الشخصيات — سيارات فاخرة وسائقون نخبة.', 'raoof-cars'),
		'img'   => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=1200&q=80',
	),
);
?>
<section style="background:#F5F0E8;padding-block:100px;">
	<div style="max-width:1300px;margin:0 auto;padding:0 40px;">
		<div style="text-align:center;margin-bottom:56px;">
			<div style="font-family:'Tajawal',sans-serif;font-size:13px;font-weight:500;letter-spacing:0.32em;color:#D4A017;text-transform:uppercase;margin-bottom:14px;"><?php esc_html_e('خدماتنا المتنوعة', 'raoof-cars'); ?></div>
			<h2 style="font-family:'Cairo','Tajawal',sans-serif;font-size:clamp(28px,3.4vw,40px);font-weight:700;color:#1F1B16;margin:0;line-height:1.3;"><?php esc_html_e('اختر الخدمة التي تناسبك', 'raoof-cars'); ?></h2>
		</div>
		<div class="raoof-panels-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:24px;">
			<?php foreach ($panels as $i => $p) : ?>
				<?php
				$reverse = ( $i % 2 === 1 );
				$img_esc = esc_url($p['img']);
				?>
				<article style="background:white;border:1px solid #D9D2C4;display:grid;grid-template-columns:1fr 1fr;min-height:280px;overflow:hidden;">
					<?php if (! $reverse) : ?>
						<div style="background-image:linear-gradient(180deg,rgba(17,17,17,0.1),rgba(17,17,17,0.4)),url('<?php echo esc_url($img_esc); ?>');background-size:cover;background-position:center;"></div>
					<?php endif; ?>
					<div style="padding:36px 32px;display:flex;flex-direction:column;justify-content:center;">
						<div style="width:48px;height:48px;border:1px solid #D4A017;color:#D4A017;display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
							<i data-lucide="<?php echo esc_attr($p['icon']); ?>" width="22" height="22"></i>
						</div>
						<h3 style="font-family:'Cairo','Tajawal',sans-serif;font-size:22px;font-weight:700;color:#1F1B16;margin:0 0 12px;"><?php echo esc_html($p['title']); ?></h3>
						<p style="font-family:'Tajawal',sans-serif;font-size:15px;line-height:1.75;color:#4A463E;margin:0;"><?php echo esc_html($p['desc']); ?></p>
					</div>
					<?php if ($reverse) : ?>
						<div style="background-image:linear-gradient(180deg,rgba(17,17,17,0.1),rgba(17,17,17,0.4)),url('<?php echo esc_url($img_esc); ?>');background-size:cover;background-position:center;"></div>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
