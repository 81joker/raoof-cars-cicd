<?php
/**
 * Stats row.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

$stats = array(
	array('num' => '25+', 'label' => __('سيارة فاخرة', 'raoof-cars')),
	array('num' => '12', 'label' => __('مدينة أوروبية', 'raoof-cars')),
	array('num' => '8', 'label' => __('سنوات خبرة', 'raoof-cars')),
	array('num' => '24/7', 'label' => __('دعم متواصل', 'raoof-cars')),
);
?>
<section style="background:#111111;padding-block:80px;">
	<div class="raoof-stats-grid" style="max-width:1200px;margin:0 auto;padding:0 40px;display:grid;grid-template-columns:repeat(4,1fr);gap:24px;text-align:center;">
		<?php foreach ($stats as $i => $s) : ?>
			<div style="padding-inline-start:<?php echo $i ? '24px' : '0'; ?>;border-inline-start:<?php echo $i ? '1px solid rgba(212,160,23,0.18)' : 'none'; ?>;">
				<div style="font-family:'Cormorant Garamond',serif;font-style:italic;font-weight:700;font-size:clamp(56px,6vw,76px);color:#D4A017;line-height:1;"><?php echo esc_html($s['num']); ?></div>
				<div style="font-family:'Tajawal',sans-serif;font-size:15px;color:rgba(255,255,255,0.72);margin-top:12px;letter-spacing:0.04em;"><?php echo esc_html($s['label']); ?></div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
