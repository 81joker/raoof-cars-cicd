<?php
/**
 * Fleet page — two large cards.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$u_book = esc_url(raoof_cars_page_url('contact'));
?>
<section style="background:#F5F0E8;padding-block:100px;">
	<div style="max-width:1300px;margin:0 auto;padding:0 40px;">
		<div class="raoof-fleet-two" style="display:grid;grid-template-columns:1fr 1fr;gap:28px;">
			<?php
			$cards = array(
				array(
					'title'   => __('مع سائق', 'raoof-cars'),
					'eyebrow' => 'CHAUFFEUR',
					'desc'    => __('استمتع بالرحلة بالكامل — سائق محترف يتحدث العربية، يعرف الطرق، ويلتزم بأعلى معايير الخصوصية والاحترام. مثالي للعائلات وكبار الشخصيات.', 'raoof-cars'),
					'img'     => 'https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=1400&q=80',
				),
				array(
					'title'   => __('بدون سائق', 'raoof-cars'),
					'eyebrow' => 'SELF-DRIVE',
					'desc'    => __('أحدث طرازات BMW ومرسيدس الفاخرة، جاهزة للاستلام من المطار أو الفندق. حرية التنقل بأناقة وراحة، مع خدمة دعم متواصلة.', 'raoof-cars'),
					'img'     => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1400&q=80',
				),
			);
			foreach ($cards as $c) :
				?>
				<article class="raoof-fleet-card" style="background:#111111;color:#F5F0E8;border:1px solid rgba(212,160,23,0.25);overflow:hidden;">
					<div style="height:380px;background-image:linear-gradient(180deg,rgba(17,17,17,0.15),rgba(17,17,17,0.6)),url('<?php echo esc_url($c['img']); ?>');background-size:cover;background-position:center;"></div>
					<div style="padding:36px 40px 40px;">
						<div style="font-family:'Tajawal',sans-serif;font-size:12px;font-weight:500;letter-spacing:0.32em;color:#D4A017;margin-bottom:10px;"><?php echo esc_html($c['eyebrow']); ?></div>
						<h3 style="font-family:'Cairo','Tajawal',sans-serif;font-size:32px;font-weight:700;color:#F5F0E8;margin:0 0 16px;"><?php echo esc_html($c['title']); ?></h3>
						<p style="font-family:'Tajawal',sans-serif;font-size:16px;line-height:1.75;color:rgba(255,255,255,0.72);margin:0 0 28px;"><?php echo esc_html($c['desc']); ?></p>
						<a class="raoof-btn raoof-btn--primary" href="<?php echo esc_url($u_book); ?>">
							<i data-lucide="calendar-days" width="18" height="18"></i>
							<?php esc_html_e('احجز الآن', 'raoof-cars'); ?>
						</a>
					</div>
				</article>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
