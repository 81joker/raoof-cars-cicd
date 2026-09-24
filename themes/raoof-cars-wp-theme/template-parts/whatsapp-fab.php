<?php
/**
 * Floating WhatsApp button (RTL: bottom-left).
 *
 * @package RaoofCars
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<a
	href="https://wa.me/436608433874"
	target="_blank"
	rel="noopener noreferrer"
	style="position:fixed;bottom:28px;left:28px;z-index:200;display:flex;align-items:center;gap:10px;background:#25D366;color:white;font-family:'Tajawal',sans-serif;font-weight:700;font-size:15px;padding:14px 22px;border-radius:999px;box-shadow:0 16px 40px rgba(37,211,102,0.35),0 4px 10px rgba(0,0,0,0.15);text-decoration:none;transition:transform 220ms cubic-bezier(.22,.61,.36,1),box-shadow 220ms;"
	onmouseenter="this.style.transform='translateY(-2px)'"
	onmouseleave="this.style.transform='translateY(0)'"
>
	<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487 1.823.788 2.354.79 3.565.598.736-.116 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.05 21.785a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884Z"/></svg>
	<?php esc_html_e('تواصل عبر واتساب', 'raoof-cars'); ?>
</a>
