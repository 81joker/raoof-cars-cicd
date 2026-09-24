# Raoof Cars — WordPress theme (classic PHP)

Arabic RTL marketing theme: **server-rendered PHP templates**, no React runtime in the browser.

## Structure

- `front-page.php` — homepage sections (`template-parts/section-*.php`).
- `page.php` — any **Page** content from the block editor (`the_content()`).
- `single.php` — blog **Posts**.
- `index.php` — blog index / archives.
- `page-fleet.php` — template **Fleet Page** (اسطول السيارات).
- `page-services.php` — template **Services Page** (خدماتنا).
- `page-about.php` — template **About Page** (من نحن + editor body).
- `page-contact.php` — template **Contact Page** (تواصل + booking form + optional editor below).

## Navigation

The navbar links to URLs derived from **page slugs**: `fleet`, `services`, `about`, `contact`. Create pages in WordPress with those slugs (or Arabic slug equivalents — then adjust `raoof_cars_page_url()` in `functions.php` if needed).

## Booking form

Posts to `admin-post.php`, handled in `functions.php` (`raoof_cars_handle_booking`). Sends email to the site **admin email**. Extend with SMTP plugins as needed.

## Assets

- Design tokens: `assets/colors_and_type.css`
- Layout / utilities: `assets/css/theme.css`
- Icons: Lucide (CDN) + `assets/js/theme.js` (scroll class on navbar)

## Optional hero video

Place `assets/video-car.mp4` in the theme; if missing, the hero uses a static image.

Legacy JSX files under `assets/js/` are not loaded by the theme; you may delete them after backup.
