=== ZenPress ===
Contributors: @quentinldd
Donate link: https://github.com/sponsors/quentin-ld/
Tags: optimization, performance, security, bloat, woocommerce
Requires at least: 6.0
Tested up to: 6.9
Stable tag: 2.2.5
Requires PHP: 8.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html/

Speed up and harden your site with a single click: cleans up unused features, protects security gaps, and configures cache integrations automatically.

== Description ==

ZenPress is a lightweight, high-performance plugin that improves your WordPress and WooCommerce sites through a range of supportive actions.
Combined with [Cache Enabler](https://wordpress.org/plugins/cache-enabler/), [Autoptimize](https://wordpress.org/plugins/autoptimize/) and [SQLite Object Cache](https://wordpress.org/plugins/sqlite-object-cache/), you can use ZenPress as a reliable, free alternative to major premium performance plugins.
By integrating directly into the WordPress core interface, ZenPress provides a simpler experience without the need for complex custom dashboards. You can improve your site's performance and security without ads, pro versions, or database clutter.

= Why choose ZenPress? =
* Use curated settings presets to help you optimize your site instantly.
* Experience deep integration with the WordPress core interface for a lightweight, familiar experience.
* Choose a free, reliable alternative to premium performance plugins.
* Keep your site fast and clean by disabling unused features.
* Harden your security by turning off unused features and protecting weak spots.
* Reduce bloat from third-party plugins.
* Enjoy an ultra-lightweight and future-proof design.

== Features ==

ZenPress includes the following features:

= Dashboard Settings =
* Navigate easily between categories like Core, Gutenberg, and WooCommerce using a structured tabbed interface.
* Identify features quickly with visual icons organized by Performance, Security, and User Interface.
* Select from three ready-to-use presets: Corporate, Blog, or E-commerce: each optimized for your specific site type.
* Understand every choice with concise descriptions that explain the benefits to your site.
* Use a fully accessible interface that includes ARIA-compliant tabs and full keyboard navigation support.
* Benefit from a design that matches the WordPress core look and feel, supporting the latest block editor features.

= Core Settings =
* Block user enumeration.
* Clean up the admin bar.
* Disable "WordPress" spelling correction.
* Disable all feeds (RSS, Atom, comments).
* Disable application passwords.
* Disable author archives.
* Disable autosave (classic editor).
* Disable Dashicons (admin icons).
* Disable default lazy loading for images.
* Disable DNS prefetch.
* Disable jQuery Migrate script.
* Disable login language selector.
* Disable oEmbed.
* Disable password strength meter.
* Disable PDF thumbnails.
* Disable pingbacks and trackbacks.
* Disable prev/next post links in head.
* Disable shortlink.
* Disable Windows Live Writer link.
* Disable WordPress emoji scripts and styles.
* Disable XML-RPC and RSD link.
* Hide WordPress version.
* Limit post revisions to 10.
* Limit REST API to logged-in users.
* Remove "Thanks for using WordPress" from footer.
* Remove Help tab.
* Remove REST API links from page source.
* Remove WordPress logo from admin bar.

= Gutenberg Settings =
* Disable default pattern categories in Site Editor.
* Load block styles separately.
* Remove WordPress default block patterns.

= WooCommerce Settings =
* Disable Stripe scripts on product and cart pages.
* Disable WooCommerce cart fragments.
* Disable WooCommerce scripts and styles on non-shop pages.
* Disable WooCommerce widgets.
* Hide WooCommerce version.
* Remove WooCommerce default block patterns.

= Ads-blocker Settings =
* Clean up the Dashboard.

= Tools Settings =
* Protect login from brute force.
* Show cache actions in admin bar.

= Integrations =

ZenPress integrates with Cache Enabler, Autoptimize, and SQLite Object Cache. When any of these plugins is active, the Tools tab shows integration status and one-click autoconfig actions.

* Admin bar: Adds a ZenPress menu to the admin bar with "Clear all caches" and options for each active cache (page, static files, object cache). Only appears when Cache Enabler, Autoptimize, or SQLite Object Cache is active. Hides those plugins' own admin bar buttons.
* Autoptimize: Minify JS and CSS, combine CSS, static file caching, 404 fallbacks.
* Cache Enabler: Clear cache on content changes, WebP, compression, minify HTML.
* SQLite Object Cache: Enable "Use APCu" in the plugin if available.

= Presets =
* Corporate website: For business sites and portfolios. Focuses on security, performance, and removing unused features like RSS and author archives.
* Blog: For content-focused blogs. Keeps RSS and other blog features while improving performance and security.
* E-commerce: For WooCommerce stores. Performance and security plus WooCommerce optimizations for faster checkout.

= Accessibility =
* You can navigate the dashboard with confidence using an interface built to WCAG 2.1 AA accessibility standards.
* Move through settings efficiently using only your keyboard; we fully support the use of Tab, Arrow keys, Home, End, and Enter for all interactions.
* Experience faster navigation with automatic tab activation, which displays panels immediately as you move focus between sections.
* Always identify your position on the page through highly visible focus indicators on every interactive button and link.
* Every element is optimized for screen readers and assistive technologies with descriptive ARIA labels to provide clear context for every setting.

== Roadmap ==

* Use new Gutenberg Icon component for categories & subcategories icons instead of Dashicons.
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

Yes. You can use ZenPress alongside tools like Cache Enabler or Autoptimize. Because ZenPress focuses on disabling unused core features and reducing bloat, it does not interfere with page caching or image optimization. If you notice overlapping features, you can easily toggle them off in either tool.

= How do I know which snippets are safe to enable? =

If you are new to optimization, you can safely start with a curated preset (Corporate, Blog, or E‑commerce). For manual changes, we suggest starting with User Interface (UI) and performance settings, such as cleaning up the Admin Bar, before moving to more advanced core settings.

= What happens if I disable the REST API? =

The REST API allows different applications to communicate with your site. If you disable it, ZenPress will block unauthenticated requests to keep your site secure. However, some blocks or third-party integrations may require this to be active. If a feature stops working, you can simply use our documented filters to allow specific routes.

= Does ZenPress store any personal data or phone home? =

No. ZenPress does not collect, store, or transmit any personal data. It does not contact external services or include third‑party trackers. All settings are stored in standard WordPress options and remain on your site only.

= Is ZenPress multisite compatible? =

ZenPress is fully compatible with multisite networks. You can activate it across the entire network or on individual sites. Only Network Administrators have the capability to manage these settings across the network to ensure consistent performance and security policies.

= I have a suggestion =

I welcome your ideas! If you have a suggestion for the roadmap, please visit the official support forum. If you are a developer, you can also contribute directly to the project on GitHub.

== Changelog ==

= 2.2.5 =
- Linguistic improvements : Align to WordPress [Style, voice, and tone](https://make.wordpress.org/docs/style-guide/general-guidelines/style-voice-tone/).
- Accessibility improvements : Align to WordPress [accessibility guidelines](https://make.wordpress.org/docs/style-guide/general-guidelines/accessibility/).

= 2.2.4 =
- Fix : Admin bar “Clear all caches” is now off by default; user turns it on if they want.
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
