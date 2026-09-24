<?php
/**
 * Raoof Cars theme bootstrap.
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}

function raoof_cars_theme_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script')
	);
	add_theme_support('custom-logo');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'raoof-cars'),
		)
	);
}
add_action('after_setup_theme', 'raoof_cars_theme_setup');

/**
 * Theme asset URL (stylesheet directory).
 *
 * @param string $path Relative path under theme root.
 * @return string
 */
function raoof_cars_asset_uri($path) {
	return get_template_directory_uri() . '/' . ltrim($path, '/');
}

/**
 * Permalink for a page by slug; falls back to pretty URL if page not created yet.
 *
 * @param string $slug Post slug.
 * @return string
 */
function raoof_cars_page_url($slug) {
	$page = get_page_by_path($slug);
	if ($page) {
		return get_permalink($page);
	}
	return home_url('/' . $slug . '/');
}

/**
 * Whether current view matches nav slug (home = front page).
 *
 * @param string $slug home|fleet|services|about|contact.
 * @return bool
 */
function raoof_cars_nav_is_active($slug) {
	if ('home' === $slug) {
		return is_front_page();
	}
	return is_page($slug);
}

/**
 * Output one primary nav anchor with active styling.
 *
 * @param string $slug home|fleet|services|about|contact.
 * @param string $label Link text.
 * @param string $href URL.
 */
function raoof_cars_nav_link($slug, $label, $href) {
	$active = raoof_cars_nav_is_active($slug);
	$color = $active ? '#D4A017' : '#F5F0E8';
	$border = $active ? '1px solid #D4A017' : '1px solid transparent';
	printf(
		'<a href="%1$s" style="font-family:\'Tajawal\',sans-serif;font-size:14px;font-weight:500;white-space:nowrap;color:%2$s;text-decoration:none;padding-bottom:4px;border-bottom:%3$s;transition:color 220ms,border-color 220ms;">%4$s</a>',
		esc_url($href),
		esc_attr($color),
		esc_attr($border),
		esc_html($label)
	);
}

function raoof_cars_enqueue_assets() {
	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_style(
		'raoof-cars-fonts',
		'https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&family=Cairo:wght@400;600;700;900&family=Cormorant+Garamond:ital,wght@1,700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'raoof-cars-tokens',
		get_template_directory_uri() . '/assets/colors_and_type.css',
		array(),
		$theme_version
	);

	wp_enqueue_style(
		'raoof-cars-theme',
		get_template_directory_uri() . '/assets/css/theme.css',
		array('raoof-cars-tokens'),
		$theme_version
	);

	wp_enqueue_style(
		'raoof-cars-style',
		get_stylesheet_uri(),
		array('raoof-cars-theme'),
		$theme_version
	);

	wp_enqueue_script(
		'lucide',
		'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'raoof-cars-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array('lucide'),
		$theme_version,
		true
	);
}
add_action('wp_enqueue_scripts', 'raoof_cars_enqueue_assets');

/**
 * Handle booking form POST (admin-post.php).
 */
function raoof_cars_handle_booking() {
	if (!isset($_POST['raoof_booking_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['raoof_booking_nonce'])), 'raoof_booking')) {
		wp_safe_redirect(home_url('/'));
		exit;
	}

	$pickup      = isset($_POST['pickup']) ? sanitize_text_field(wp_unslash($_POST['pickup'])) : '';
	$destination = isset($_POST['destination']) ? sanitize_text_field(wp_unslash($_POST['destination'])) : '';
	$date        = isset($_POST['date']) ? sanitize_text_field(wp_unslash($_POST['date'])) : '';
	$service     = isset($_POST['service']) ? sanitize_text_field(wp_unslash($_POST['service'])) : '';
	$fullname    = isset($_POST['fullname']) ? sanitize_text_field(wp_unslash($_POST['fullname'])) : '';
	$phone       = isset($_POST['phone']) ? sanitize_text_field(wp_unslash($_POST['phone'])) : '';
	$notes       = isset($_POST['notes']) ? sanitize_textarea_field(wp_unslash($_POST['notes'])) : '';

	$to      = get_option('admin_email');
	$subject = sprintf('[%s] %s', wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES), __('طلب حجز جديد', 'raoof-cars'));
	$body    = sprintf(
		"%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n",
		__('مكان الاستلام:', 'raoof-cars') . ' ' . $pickup,
		__('الوجهة:', 'raoof-cars') . ' ' . $destination,
		__('التاريخ:', 'raoof-cars') . ' ' . $date,
		__('نوع الخدمة:', 'raoof-cars') . ' ' . $service,
		__('الاسم:', 'raoof-cars') . ' ' . $fullname,
		__('الهاتف:', 'raoof-cars') . ' ' . $phone,
		__('ملاحظات:', 'raoof-cars') . ' ' . $notes,
		'---',
		home_url('/')
	);

	$headers = array('Content-Type: text/plain; charset=UTF-8');
	wp_mail($to, $subject, $body, $headers);

	$redirect = wp_get_referer();
	if (!$redirect) {
		$redirect = home_url('/');
	}
	wp_safe_redirect(add_query_arg('booking_sent', '1', $redirect));
	exit;
}
add_action('admin_post_nopriv_raoof_booking_submit', 'raoof_cars_handle_booking');
add_action('admin_post_raoof_booking_submit', 'raoof_cars_handle_booking');
