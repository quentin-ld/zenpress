=== ZenPress ===
Contributors: @quentinldd
Donate link: https://github.com/sponsors/quentin-ld/
Tags: optimization, performance, security, woocommerce
Requires at least: 6.0
Tested up to: 7.0
Stable tag: 2.2.5
Requires PHP: 8.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html/

Clean up unused WordPress features, close security gaps, and configure cache integrations from a single settings page.

== Description ==

ZenPress disables unused WordPress and WooCommerce features, blocks security vulnerabilities, and configures cache plugins from a single settings page.
Combined with [Cache Enabler](https://wordpress.org/plugins/cache-enabler/), [Autoptimize](https://wordpress.org/plugins/autoptimize/) and [SQLite Object Cache](https://wordpress.org/plugins/sqlite-object-cache/), ZenPress replaces the need for premium performance plugins.
Settings integrate directly into the WordPress core interface, without requiring a custom dashboard.

= Why choose ZenPress? =
* Use curated settings presets to configure your site quickly.
* Integrates with the WordPress core interface for a familiar experience.
* A free alternative to premium performance plugins.
* Disable unused features to reduce page load and remove unnecessary code.
* Block security vulnerabilities by disabling unused features.
* Remove unnecessary third-party plugin code.
* Lightweight codebase with no external dependencies.

== Features ==

ZenPress includes the following features:

= Dashboard Settings =
* Navigate between categories using a tabbed interface.
* Features are grouped by Performance, Security, and User Interface.
* Select from three presets: Corporate, Blog, or E-commerce.
* Each setting includes a description of what it does and what side effects to expect.
* ARIA-compliant tabs with full keyboard navigation.
* Design matches the WordPress core interface.

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
* Corporate website: For business sites and portfolios. Disables RSS, author archives, and other features typically unused on company sites.
* Blog: For content-focused sites. Keeps RSS and other blog-related features while disabling unnecessary assets.
* E-commerce: For WooCommerce stores. Disables non-essential WooCommerce features and removes unused WordPress functionality.

= Accessibility =
* Navigate the dashboard using a keyboard: Tab, Arrow keys, Home, End, and Enter for all interactions.
* Tab panels activate immediately when focus moves between sections.
* Visible focus indicators on every interactive element.
* ARIA labels provide context for screen readers and assistive technologies.

== Privacy Statement ==

ZenPress does not store, collect, or transmit any data. It does not send data to any third party and does not include third-party resources.

== Accessibility Statement ==

ZenPress aims to be accessible to all users.

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

Yes, there is no pro version and there never will be.

[Sponsorships are accepted via the GitHub Sponsors program](https://github.com/sponsors/quentin-ld/dashboard). If you work at an agency that develops with WordPress, ask your company to sponsor the project.

If you like the plugin, [leave a review](https://wordpress.org/support/plugin/zenpress/reviews/).

= Does ZenPress work with my existing caching or optimization plugins? =

Yes. ZenPress disables unused WordPress core features and does not interfere with page caching or image optimization. If you notice overlapping features, toggle them off in either tool.

= How do I know which snippets are safe to enable? =

If you are new to these settings, start with a preset (Corporate, Blog, or E-commerce). For manual changes, begin with User Interface and performance settings, such as cleaning up the Admin Bar, before moving to more advanced core settings.

= What happens if I disable the REST API? =

The REST API allows external applications to communicate with your site. ZenPress blocks unauthenticated requests while keeping the API accessible to logged-in users. Some blocks or third-party integrations may require the REST API to be publicly accessible. If a feature stops working, use the `zenpress_disable_wp_rest_api_post_var` or `zenpress_disable_wp_rest_api_server_var` filters to allow specific requests.

= Does ZenPress store any personal data? =

No. ZenPress does not collect, store, or transmit any personal data. All settings are stored in standard WordPress options on your site.

= Is ZenPress multisite compatible? =

ZenPress is compatible with multisite networks. You can activate it across the entire network or on individual sites. Only Network Administrators can manage these settings across the network.

= I have a suggestion =

Visit the official support forum to share ideas. Developers can contribute directly on GitHub.

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
