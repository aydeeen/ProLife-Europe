/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import collapse from '@alpinejs/collapse';

window.Alpine = Alpine;

Alpine.plugin(intersect);
Alpine.plugin(collapse);
Alpine.start();

/* Toggle Body Scroll on Mobile Nav Open */
const navToggle = document.querySelector('button[aria-label="mobile menu"]');
const body = document.body;

navToggle.addEventListener('click', function () {
	body.classList.toggle('overflow-hidden');
});