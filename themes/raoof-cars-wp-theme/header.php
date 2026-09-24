<?php
/**
 * Theme header template.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<h1>Test Ci/Cd</h1>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/navbar'); ?>
