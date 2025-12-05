=== ZenPress - Cleaner, Lighter, Faster WP ===
Contributors: @quentinldd
Donate link: https://github.com/sponsors/quentin-ld/
Tags: optimization, performance, security, bloat, woocommerce
Requires at least: 6.0
Tested up to: 6.9
Stable tag: 2.1.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html/

Easily speed up and strengthen your WordPress site by cleaning out unnecessary features and protecting weak spots.

== Description ==

ZenPress is a lightweight, super-fast plugin that boosts your WordPress & WooCommerce website through a wide range of solid actions.
Combined with [Cache Enabler](https://wordpress.org/plugins/cache-enabler/), [Autoptimize](https://wordpress.org/plugins/autoptimize/) and [SQLite Object Cache](https://wordpress.org/plugins/sqlite-object-cache/), ZenPress is a free alternative to major premium performance plugins.
This is a simple solution for improving your WordPress website's performance and security while enjoying a simpler and lighter UI without breaking the bank.
No database clutter, no ads, no pro version. Just install, activate, select what you need or pick up your settings preset and you are ready to go !

= Why choose ZenPress? =
* Curated settings presets included to help you.
* Deep integration with the native WordPress interface: no bloat, no extra options page, no weird custom dashboard : only what you need.
* Free alternative to major premium performance plugin for everyone.
* Make your WordPress website fast & clean by disabling unwanted features.
* Improve security by turning off features you don’t use and hardening weak spots.
* Eliminate third-party plugin bloat (actually hunting them down).
* Ultra lightweight.
* Future proof.

== Features ==

Following features are included :

= Settings subpage 🧰 =
* Organized interface with vertical tabs for easy navigation between categories (Core, Gutenberg, WooCommerce, Tools).
* Features grouped by subcategories (Performance, Security, User Interface) with visual icons for quick identification.
* Three ready-to-use presets: Corporate website, Blog, and E-commerce - each optimized for specific site types.
* Every action is documented with descriptions so that you understand what you are doing and the benefits.
* Fully accessible interface with ARIA-compliant tabs and complete keyboard navigation support.
* Native WordPress interface, benefits from Gutenberg's new features and the site editor.

= Core - Performance =

* Disable adjacent posts link tags.
* Disable dashicons.
* Disable DNS prefetch.
* Disable WordPress emoji scripts and styles.
* Disable jQuery migrate.
* Disable oEmbed.
* Disable PDF thumbnails.
* Disable all WordPress feeds (RDF, RSS, RSS2, Atom, and comments).
* Disable WordPress shortlink.
* Disable WLW link.
* Remove WordPress default remote block patterns.
* Remove REST API links.
* Separate loading of core block styles.

= Core - Security =

* Block user enumeration.
* Disable application passwords.
* Disable author archives.
* Disable pingback and trackback.
* Disable REST API for visitors not logged into WordPress.
* Disable XML-RPC and remove RSD link.
* Hide WordPress version.
* Protect the wp-login form from brute force attacks.

= Core - User Interface =

* Clean up the WordPress admin bar.
* Clean up the WordPress Dashboard.
* Disable the login language selector.

= WooCommerce - Performance =
* Disable WooCommerce cart fragments script.
* Disable WooCommerce scripts and styles on non-WooCommerce pages.
* Disable unnecessary Stripe scripts on WooCommerce pages.
* Disable WooCommerce widgets.
* Remove WooCommerce default block patterns.

= WooCommerce - Security =
* Hide WooCommerce version.

= Gutenberg - Performance =
* Remove WordPress default remote block patterns.
* Separate loading of core block styles.

= Gutenberg - User Interface =
* Disable default pattern categories in site editor.

= Presets =
* Corporate website / Portfolio: Optimized for business sites and portfolios. Focuses on security, performance, and removing unnecessary features like RSS feeds and author archives.
* Blog: Tailored for content-focused blogs. Includes performance and security optimizations while preserving essential blog features like RSS feeds.
* E-commerce: Designed for WooCommerce stores. Includes all performance and security features plus WooCommerce-specific optimizations for faster checkout.

= Accessibility =
* Fully ARIA-compliant tab interface following W3C ARIA Authoring Practices Guide.
* Complete keyboard navigation: Arrow keys, Home, End, Space, Enter, and Tab keys fully supported.
* Automatic tab activation on focus for improved user experience.
* Proper focus management with visible focus indicators.
* Screen reader friendly with proper ARIA labels and roles.

== Roadmap ==

= Global =
* Additional presets for specific use cases.
* Documentation pages with detailed guides.

= Security =
* Manage Heartbeat API (frontend + backend + admin whitelist).

= Performance =
* Disable capital_P_dangit filter.
* Disable autosave.
* Disable post revision.
* Disable Password Strength Meter.
* Disable WordPress default lazy loading.

= User Interface =
* Remove "howdy" from admin bar.
* Remove WordPress logo.
* Remove "Help button".
* Remove "Thanks for using WordPress" in footer.
* Remove "site health" page.
* Remove "Privacy tools".

= WooCommerce =
* Disable WooCommerce tracking.
* Disable marketing hub.
* Disable dashboard setup widget.
* Disable new product editor.
* Disable WooCommerce blocks.
* Disable WooCommerce promo emails.

= Plugins =
* Disable CF7 CSS & JS.
* Disable Elementor bloat.
* Disable WP Bakery bloat.
* Disable Divi bloat.
* Disable Yoast SEO bloat.
* Disable Jetpack bloat.
* Disable Updraft bloat.

== Privacy Statement ==

ZenPress is private by default and always will be. It does not store any data. It does not send data to any third party, nor does it include any third party resources.

== Accessibility Statement ==

ZenPress aims to be fully accessible to all of its users.

== Screenshots ==

1. ZenPress admin interface.
2. Dashboard without ZenPress.
3. Dashboard with ZenPress.
4. Site editor without ZenPress.
5. Site editor with ZenPress.
6. Login page without ZenPress login protection.
7. Login page with ZenPress login protection.
8. Login page with ZenPress login protection after trying to brute force it.
9. Website head without ZenPress.
10. Website head with ZenPress.

== Frequently Asked Questions ==

= No pro version? Really? =

Yes, there is no pro version for this plugin and there never will be.

However, [I am accepting sponsorships via the GitHub Sponsors program](https://github.com/sponsors/quentin-ld/dashboard). If you work at an agency that develops with WordPress, ask your company to provide sponsorship in order to invest in its supply chain. The tools that I maintain probably save your company time and money, and GitHub sponsorship can now be done at the organisation level.

In addition, if you like the plugin then I'd love for you to [leave a review](https://wordpress.org/support/plugin/zenpress/reviews/). Tell all your friends about it too!

= I have a suggestion =

Nice ! If you can't find anything in the roadmap, feel free to submit your suggestion on the support page! If you know how to code, you can even contribute on GitHub.

= Does this plugin work with PHP 8 =

Yes, it 's been tested actively and works from PHP 7.4 to PHP 8.4.

== Changelog ==

= 2.1.0 =
- Global: Tested with WordPress 6.9.
- Interface: Complete redesign with vertical tabbed interface for better organization.
- Interface: Features now organized by categories (Core, Gutenberg, WooCommerce, Tools) and subcategories (Performance, Security, User Interface).
- Interface: Visual icons added to categories and subcategories for quick identification.
- Presets: Three ready-to-use presets with detailed descriptions (Corporate website, Blog, E-commerce).
- Accessibility: Fully ARIA-compliant tab interface following W3C ARIA Authoring Practices Guide.
- Accessibility: Complete keyboard navigation support (Arrow keys, Home, End, Space, Enter, Tab).
- Accessibility: Automatic tab activation on focus for improved user experience.
- Accessibility: Proper focus management with visible focus indicators.
- Accessibility: Screen reader friendly with proper ARIA labels and roles.
- Keyboard: Toggle controls now fully keyboard accessible with Enter key support.
- Keyboard: Added Ctrl+S / Cmd+S shortcut to save settings.
- Gutenberg: New actionable function: Disable default pattern categories in site editor.

= 2.0.5 =
- Global: Compatibility check.

= 2.0.4.1 =
- Global: Fix plugin png icon.
- Global: Fix typo.

= 2.0.4 =
- New actionable function: Disable the WP REST API for visitors not logged into WordPress.

= 2.0.3.1 =
- New actionable function: Disable application passwords.

= 2.0.3 =
- Global: Codebase and snippets optimization.
- Global: Fix typo.
- New actionable function: Disable application passwords.

= 2.0.2 =

- Global : Codebase and snippets optimization.
- Global : Fixed a bug in the automatic opening and closing function of the panels on the settings page.

= 2.0.1 =

- Global: Fix typo.

= 2.0 =

- Settings subpage: new ZenPress settings page, where you can choose your features or select a preset.
- Global: code reinforcement to prevent vulnerabilities, prepare plugin scaling and easy addition of new features.
- Global: new banners and icons.
- Global: addition of translation strings and metadata.
- Compatibility: improved compatibility from PHP 7.4 to PHP 8.4.

= 1.0.9.1 =

- Compatibility: Plugin tested up to PHP 8.4.

= 1.0.9 =

- Compatibility: Plugin tested up to PHP 8.4.
- New actionable function: Disable login language selector.
- Fix constant naming in readme.txt.

= 1.0.8 =

- UI: Remove smash baloon ads meta box.
- Global : Files naming and call for scalability.

= 1.0.7 =

- ZenPress tested for WordPress 6.8.1.
- UI: Remove site health meta box.
- UI: Remove WooCommerce admin dashboard setup metabox.

= 1.0.6 =

- Remove the image assets from the plugin.
- Plugin deployment with github actions.
- No hidden files in plugin.

= 1.0.5 =

- Remove the image assets from the plugin.

= 1.0.4 =

- Fix ABSPATH on woocommerce patterns snippets.
- New actionable function: Disable RSS feeds except main one.
- New actionable function: Remove RSS feeds links in head except main one.
- New actionable function: Remove Rest API link in head.
- New actionable function: Remove WP Mail SMTP ads widget.

= 1.0.3 =

- ZenPress tested for WordPress 6.8.
- UI: Disable AARVE plugin bloat widget.

= 1.0.2 =

- Remove load_plugin_textdomain, not needed since WordPress 4.6.
- Protect wp login: Add zenpress_ prefix to transients.
- Remove woocommerce patterns : Add zenpress_ prefix to function.
- Lint and fix PHP code with phpstan.

= 1.0.1 =

- Fix script loading error on WC home admin page.

= 1.0.0.2 =

- First release of ZenPress, yaaaaayyy!

== Upgrade Notice ==

= 1.0.0.1 =

- Small fixes for WordPress Directory Submission.

= 1.0 =

- Let's boost your WordPress website!
