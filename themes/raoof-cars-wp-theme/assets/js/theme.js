/**
 * Raoof Cars classic theme: Lucide icons + navbar scroll state.
 */
(function () {
	'use strict';

	function initLucide() {
		if (typeof lucide !== 'undefined' && lucide.createIcons) {
			lucide.createIcons({ attrs: { 'stroke-width': 1.75 } });
		}
	}

	function initNavScroll() {
		var nav = document.querySelector('.raoof-nav');
		if (!nav) {
			return;
		}
		function onScroll() {
			if (window.scrollY > 80) {
				nav.classList.add('raoof-nav--scrolled');
			} else {
				nav.classList.remove('raoof-nav--scrolled');
			}
		}
		onScroll();
		window.addEventListener('scroll', onScroll, { passive: true });
	}

	document.addEventListener('DOMContentLoaded', function () {
		initLucide();
		initNavScroll();
	});
})();
