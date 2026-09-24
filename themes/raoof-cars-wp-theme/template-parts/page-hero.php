<?php
/**
 * Inner page hero banner.
 *
 * @package RaoofCars
 *
 * Optional `$args` from {@see get_template_part()} third parameter:
 * eyebrow, title, image_url, height (px).
 */

if (!defined('ABSPATH')) {
	exit;
}

$defaults = array(
	'eyebrow'   => '',
	'title'     => '',
	'image_url' => '',
	'height'    => 480,
);

$hero = wp_parse_args(isset($args) && is_array($args) ? $args : array(), $defaults);

$bg = $hero['image_url'] ? esc_url($hero['image_url']) : '';
$h  = (int) $hero['height'];
?>
<section style="background-image:linear-gradient(180deg,rgba(17,17,17,0.55) 0%,rgba(17,17,17,0.85) 100%),url('<?php echo esc_url($bg); ?>');background-size:cover;background-position:center;min-height:<?php echo esc_attr((string) $h); ?>px;display:flex;align-items:center;justify-content:center;color:white;text-align:center;padding-block:60px;">
	<div style="max-width:900px;padding:0 40px;">
		<?php if ($hero['eyebrow']) : ?>
			<div style="font-family:'Tajawal',sans-serif;font-size:13px;font-weight:500;letter-spacing:0.32em;color:#D4A017;margin-bottom:18px;text-transform:uppercase;"><?php echo esc_html($hero['eyebrow']); ?></div>
		<?php endif; ?>
		<?php if ($hero['title']) : ?>
			<h1 style="font-family:'Cairo','Tajawal',sans-serif;font-size:clamp(36px,4.8vw,56px);font-weight:700;margin:0;line-height:1.25;"><?php echo esc_html($hero['title']); ?></h1>
		<?php endif; ?>
	</div>
</section>
