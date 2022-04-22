=== PDF Viewer Block for Gutenberg ===
Contributors: audrasjb, whodunitagency
Donate link: https://www.paypal.me/audrasjb
Tags: Gutenberg, block, PDF, viewer, reader, liseuse, iframe, pdf reader, pdf viewer
Requires at least: 5.0
Tested up to: 5.9
Stable tag: 1.1
Requires PHP: 5.6
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple and 100% free Gutenberg Block to display PDF Viewers / Readers on your website.

== Description ==

A simple, responsive and 100% free Gutenberg Block to display PDF Viewers / Readers on your website.

You can easily configure the Reader’s width, height and alignment on the fly.

Compatibility:
- Fully responsive
- Works fine on Chrome, Firefox, Opera, Edge and IE11
- If javascript is disabled, a download link is provided as a fallback

This plugin uses [PDF.js](https://mozilla.github.io/pdf.js/) library, provided by Mozilla under Apache license.

== Screenshots ==

1. Adding "PDF Viewer" Gutenberg Block on my Post.
2. Selecting/Uploading a PDF document.
3. Basic front-end rendering.
4. Selecting alignement for my PDF Reader.
5. Applying custom width and height.
6. "PDF Viewer" variations showcase.
7. Front-end rendering for the selected variations.

== Installation ==

1. Install the plugin and activate.
2. No settings page: just enjoy your new Gutenberg block! It’s available in Embeds > PDF Viewer.

== Changelog ==

= 1.1 =
* Performances: Enqueue admin assets only when showing the block editor screen.

= 1.0.1 =
* Fix XSS security vulnerability. Thanks @wpscan who responsively disclosed the issue.

= 1.0 =
* Enqueue scripts and styles only when the block is displayed for better performance and Google Core Web Vitals compliance.

= 0.2 =
* Declare support for WordPress 5.5 and Block Directory.

= 0.1 =
* Plugin initial commit. Works fine :)
