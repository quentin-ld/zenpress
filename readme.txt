=== ZenPress - Optimize & Secure ===
Contributors: @quentinldd
Donate link: https://github.com/sponsors/quentin-ld/
Tags: optimization, performance, security, bloat, woocommerce
Requires at least: 6.0
Tested up to: 6.9
Stable tag: 2.2.4
Requires PHP: 8.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html/

Easily speed up and strengthen your website in one click: clean out unnecessary features, protect weak points, autoconfigure cache integrations.

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
* Organized interface with vertical tabs for easy navigation between categories (Core, Gutenberg, WooCommerce, Ads-blocker, Tools).
* Features grouped by subcategories (Performance, Security, User Interface) with visual icons for quick identification.
* Three ready-to-use presets: Corporate website, Blog, and E-commerce - each optimized for specific site types.
* Every action is documented with descriptions so that you understand what you are doing and the benefits.
* Fully accessible interface with ARIA-compliant tabs and complete keyboard navigation support.
* Native WordPress interface, benefits from Gutenberg's new features and the site editor.

= Core =

* Block user enumeration.
* Clean up the WordPress admin bar.
* Disable adjacent posts link tags.
* Disable all WordPress feeds (RDF, RSS, RSS2, Atom, and comments).
* Disable application passwords.
* Disable author archives.
* Disable autosave.
* Disable capital_P_dangit filter.
* Disable dashicons.
* Disable DNS prefetch.
* Disable jQuery migrate.
* Disable oEmbed.
* Disable Password Strength Meter.
* Disable PDF thumbnails.
* Disable pingback and trackback.
* Disable REST API for visitors not logged into WordPress.
* Disable the login language selector.
* Disable WLW link.
* Disable WordPress default lazy loading.
* Disable WordPress emoji scripts and styles.
* Disable WordPress shortlink.
* Disable XML-RPC and remove RSD link.
* Hide WordPress version.
* Limit post revision to 10.
* Remove "Help" button.
* Remove "Thanks for using WordPress" in footer.* Remove REST API links.
* Remove WordPress logo.

= WooCommerce  =
* Disable unnecessary Stripe scripts on WooCommerce pages.
* Disable WooCommerce cart fragments script.
* Disable WooCommerce scripts and styles on non-WooCommerce pages.
* Disable WooCommerce widgets.
* Hide WooCommerce version.* Remove WooCommerce default block patterns.

= Gutenberg  =
* Disable default pattern categories in site editor.
* Remove WordPress default remote block patterns.
* Separate loading of core block styles.

= Ads-blocker =
* Clean up the WordPress Dashboard.

= Tools =
* Protect the wp-login form from brute force attacks.
* Toggle "Show ZenPress admin bar button": ZenPress item in the admin bar with "Clear all caches" and sub-items per active integration (page cache, static assets, object cache). Visible only when at least one of Cache Enabler, Autoptimize, or SQLite Object Cache is active. When enabled, those plugins' own admin bar buttons are hidden. Toggle via Settings > ZenPress > Tools.

= Integrations =

ZenPress integrates with Cache Enabler, Autoptimize, and SQLite Object Cache. When any of these plugins is active, the Tools tab shows integration status and one-click autoconfig actions.

* Admin bar: One "Clear all caches" button (dashicon) in the admin bar, with sub-items to clear page cache (Cache Enabler), static assets (Autoptimize), or object cache (SQLite Object Cache) separately. When the ZenPress admin bar is enabled, the third-party cache buttons (Cache Enabler, Autoptimize, SQLite Object Cache) are hidden. You can hide the ZenPress admin bar via Settings > ZenPress > Tools.
* Autoptimize: One-click autoconfig enables recommended options (JS/CSS/aggregate/nogzip/fallback on; defer/HTML/logged-in/meta off).
* Cache Enabler: One-click autoconfig enables clear site cache on post or plugin changes, WebP support, Gzip or Brotli compression, and minify HTML (excluding inline CSS/JS).
* SQLite Object Cache: One-click autoconfig enables the "Use APCu" option in the plugin settings when the APCu extension is available.

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

* Additional presets for specific use cases.
* Documentation pages with detailed guides.
* Manage Heartbeat API (frontend + backend + admin whitelist).
* Remove "site health" page.
* Remove "Privacy tools".
* Disable WooCommerce tracking.
* Disable marketing hub.
* Disable dashboard setup widget.
* Disable new product editor.
* Disable WooCommerce blocks.
* Disable WooCommerce promo emails.
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

= Does ZenPress work with my existing caching / optimization plugins? =

Yes. ZenPress focuses on disabling unnecessary core features and plugin bloat; it does not handle page caching, minification, or image optimization. It is designed to work alongside plugins like Cache Enabler, Autoptimize, and most object-cache solutions. If a performance feature overlaps, simply disable it in one of the tools.

= Can ZenPress break my theme or plugins? =

Potentially, yes—especially if your theme or plugins rely on features you disable (RSS feeds, oEmbed, REST API, emojis, WooCommerce assets, etc.). That’s why each snippet includes clear descriptions and categories (performance, security, UI). Always test changes on a staging site first and enable snippets gradually.

= How do I know which snippets are safe to enable? =

If you are unsure, start with a preset (Corporate, Blog, E‑commerce) and then adjust. For manual tuning, prefer UI and performance snippets first (dashicons, emojis, dashboard/admin-bar cleanup) before more invasive ones (REST API, XML‑RPC, RSS). After each change, check: frontend pages, login, editor, and (if used) WooCommerce flows.

= What happens if I disable the REST API? =

Unauthenticated REST requests will be blocked except for any explicit bypasses configured via the filters documented in the snippet (`zenpress_disable_wp_rest_api_post_var`, `zenpress_disable_wp_rest_api_server_var`). Core features and plugins that depend on public REST endpoints (some blocks, headless/front-end apps, third-party integrations) may stop working until you whitelist the required routes.

**Important**: If you don't know how to configure bypass filters or whitelist specific routes, don't activate this snippet. It can break functionality that relies on public REST API access.

= Does ZenPress store any personal data or phone home? =

No. ZenPress does not collect, store, or transmit any personal data. It does not contact external services or include third‑party trackers. All settings are stored in standard WordPress options and remain on your site only.

= Is ZenPress multisite compatible? =

ZenPress can be network‑activated or activated per site. Settings are stored per site, so each site in a network can have different snippets enabled. As with any optimization/security plugin, test network‑wide changes carefully, especially REST API and XML‑RPC related snippets.

= I have a suggestion =

Nice ! If you can't find anything in the roadmap, feel free to submit your suggestion on the support page! If you know how to code, you can even contribute on GitHub.

== Hooks & filters ==

For developers: ZenPress exposes the following action and filters for extending or bypassing behavior.

= Action =
* `zenpress_caches_clear` – Fired when the user clears caches from the ZenPress admin bar. Integrations (e.g. Autoptimize) hook into this to clear their own caches. You can add custom cache clear logic with `add_action('zenpress_caches_clear', 'your_callback');`.

= Filters (Disable REST API snippet) =
* `zenpress_disable_wp_rest_api_post_var` – Allow unauthenticated REST access when a specific POST key is present (e.g. for webhooks). Return a string or array of key names. Use non-guessable values only.
* `zenpress_disable_wp_rest_api_server_var` – Allow unauthenticated REST access when `REQUEST_URI` matches a specific value. Return a string or array. Use non-guessable values only.

== Changelog ==

= 2.2.4 =
- Fix: Admin bar “Clear all caches” is now off by default; user turns it on if they want.
- Code quality : Split Settings page into smaller, modular piece.
- Interface : After clearing cache from the admin bar, show a WordPress success notice on the next admin load.

= 2.2.3 =
- Fix : Disable Cache enabler "clear page cache" button in admin bar when ZenPress admin bar button is active.
- Fix : ZenPress admin bar button default option is now "off".

= 2.2.2 =
- Integration : Cache enabler autoconfig in one click.
- Integration : Autoptimize autoconfig in one click.
- Integration : SQLite Object cache autoconfig in one click.
- New actionable function: Enable Admin bar "Clear all caches" button, visible only when at least one integration is active; third-party cache buttons hidden when ZenPress admin bar is enabled.
- Fix: REST and AJAX handlers wrap integration calls in try/catch; failed autoconfig or cache clear returns 500 with message instead of fatal.
- Fix: get_active_integrations_for_ui() wraps ReflectionClass in try/catch so one missing integration does not break the settings UI.
- Fix: Metadata and snippet loader wrap include in try/catch so a single bad meta file or snippet does not fatal the site.

= 2.2.1 =
- Security: Fixed $_SERVER['REQUEST_URI'] and $_SERVER['QUERY_STRING'] sanitization issues in disable-rest-api.php and block-user-enumeration.php.
- Global: Fixed global variable naming conventions to use zenpress_ prefix.
- Global: Change tagline.

= 2.2.0 =
- Global: Dropped PHP 7.4 support and aligned minimum PHP requirement with the currently recommended WordPress version.
- Global: Replaced strpos() with str_contains() and str_starts_with() throughout all snippets.
- Snippets: Converted snippets to use direct execution pattern where applicable for better performance.
- Security: Protect wp-login: fix wp_die() so blocked login responses return HTTP 403 instead of 200.
- Security: Loader: guard against path traversal in zenpress_load_snippets() when the folder argument contains '..'.
- Security: Disable REST API: document in-code that bypass filters (zenpress_disable_wp_rest_api_post_var, zenpress_disable_wp_rest_api_server_var) should use non-guessable values only.
- New actionable function: Disable autosave.
- New actionable function: Disable capital_P_dangit filter.
- New actionable function: Disable Password Strength Meter.
- New actionable function: Disable WordPress default lazy loading.
- New actionable function: Limit post revision to 10.
- New actionable function: Remove "Help" button.
- New actionable function: Remove "Thanks for using WordPress" in footer.
- New actionable function: Remove WordPress logo.

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

= 2.2.4 =
- Recommended update, Fix Admin bar “Clear all caches” is now off by default; user turns it on if they want.

= 2.2.1 =
- Security and code quality improvements. Recommended update.

= 2.2.0 =
- Breaking: PHP 8.1 is now required (PHP 7.4 support dropped). Major code modernization with improved type safety and performance.
- Security: HTTP 403 on login block, path traversal guard in snippet loader, and in-code docs for REST API bypass filters.

= 1.0.0.1 =

- Small fixes for WordPress Directory Submission.

= 1.0 =

- Let's boost your WordPress website!
