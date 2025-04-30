=== ZenPress - Unbloat, Performance & Security ===
Contributors: @quentinldd
Donate link: https://github.com/sponsors/quentin-ld/
Tags: optimization, performance, security, woocommerce, bloat
Requires at least: 6.0
Tested up to: 6.8
Stable tag: 1.0.4
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html/

The zeniest unbloat, performance and security lightweight plugin for WordPress and WooCommerce. Install, activate, and done!

== Description ==

ZenPress is a lightweight, super-fast plugin that boosts your WordPress & WooCommerce website through a wide range of solid actions. This is a simple solution for improving your WordPress website's performance and security while enjoying a simpler and lighter UI.
Need some features that it removes? You can simply tell it to leave them alone using a WordPress constant.
No database clutter, no ads, no pro version. Just install, activate, and forget about it!

== Features ==

Following features are included :

= Performance =

* Disable adjacent posts link tags in the WordPress header
* Disable Dashicons for non-logged-in users
* Disable DNS prefetch
* Disable WordPress emoji scripts and styles
* Disable jQuery Migrate on the frontend
* Disable oEmbed
* Disable PDF thumbnails
* Disable RSS feeds except main one and remove links from the site head
* Disable WordPress shortlink generation
* Disable the Windows Live Writer (WLW) manifest link
* Disable WooCommerce cart fragments script
* Disable WooCommerce scripts and styles on non-WooCommerce pages
* Disable unnecessary Stripe scripts on WooCommerce pages
* Disable WooCommerce widgets
* Disable unwanted default block patterns in gutenberg editor
* Remove REST API link from the site head
* Remove WooCommerce patterns
* Enables separate loading of core block styles

= Security =

* Blocks user enumeration via author query string
* Disable author archives and redirects to 404
* Disable pingback and trackback
* Disable XML-RPC and removes the RSD (Really Simple Discovery) link
* Hide WooCommerce version from HTTP headers, scripts, and styles
* Hide WordPress version from HTTP headers, scripts, and styles
* Protect the wp-login form from brute force attacks

= User interface =

* Cleans up the WordPress Admin Bar
* Removes redudant items from the WordPress Dashboard

 == Configuration options ==

All ZenPress optimizations are enabled by default. You can disable specific
functionalities by defining constants in your wp-config.php or functions.php file and setting them to false.

= Performance constants =

define('ZENPRESS_DISABLE_ADJACENT_POSTS', false);                // Allow adjacent posts queries
define('ZENPRESS_DISABLE_DASHICONS', false);                     // Allow dashicons for non-admin users
define('ZENPRESS_DISABLE_DNS_PREFETCH', false);                  // Allow DNS prefetch
define('ZENPRESS_DISABLE_EMOJIS', false);                        // Allow WordPress emoji scripts
define('ZENPRESS_DISABLE_JQUERY_MIGRATE', false);                // Allow jQuery Migrate
define('ZENPRESS_DISABLE_OEMBED', false);                        // Allow oEmbed functionality
define('ZENPRESS_DISABLE_PDF_THUMBNAILS', false);                // Allow PDF thumbnail generation
define('ZENPRESS_DISABLE_RSS', false);					 		 // Allow all RSS feeds and links
define('ZENPRESS_DISABLE_SHORTLINK', false);                     // Allow WordPress shortlink
define('ZENPRESS_DISABLE_WLW_MANIFEST', false);                  // Allow Windows Live Writer manifest
define('ZENPRESS_DISABLE_WC_CART_FRAGMENTS', false);             // Allow WooCommerce cart fragments
define('ZENPRESS_DISABLE_WC_SCRIPTS_STYLES', false);             // Allow WooCommerce scripts and styles
define('ZENPRESS_DISABLE_WC_STRIPE_SCRIPTS', false);             // Allow WooCommerce Stripe scripts
define('ZENPRESS_DISABLE_WC_WIDGETS', false);                    // Allow WooCommerce widgets
define('ZENPRESS_REMOVE_GUTENBERG_BLOCK_PATTERNS', false);       // Allow Gutenberg default patterns
define('ZENPRESS_REMOVE_REST_API_LINK', false);					 // Allow REST API link in head
define('ZENPRESS_REMOVE_WC_PATTERNS', false);                    // Allow WooCommerce default patterns
define('ZENPRESS_SEPARATE_GUTENBERG_CORE_BLOCK_STYLES', false);  // Don't separate Gutenberg core block styles

= Security constants =

define('ZENPRESS_BLOCK_USER_ENUMERATION_PROTECTION', false);     // Allow user enumeration
define('ZENPRESS_DISABLE_AUTHOR_ARCHIVES', false);               // Allow author archives
define('ZENPRESS_DISABLE_PINGBACK_TRACKBACK', false);            // Allow pingback and trackback
define('ZENPRESS_DISABLE_XMLRPC_RSDLINK', false);                // Allow XML-RPC and RSD link
define('ZENPRESS_HIDE_WC_VERSION', false);                       // Allow WooCommerce version display
define('ZENPRESS_HIDE_WP_VERSION', false);                       // Allow WordPress version display
define('ZENPRESS_LOGIN_PROTECTION', false);                      // Remove login protection

= User interface constants =

define('ZENPRESS_ADMIN_BAR_CLEANUP', false);                     // Disable admin bar cleanup
define('ZENPRESS_DASHBOARD_CLEANUP', false);                     // Disable dashboard cleanup

== Screenshots ==

1. Dashboard without ZenPress.
2. Dashboard with ZenPress.
3. Site editor without ZenPress.
4. Site editor with ZenPress.
5. Login page without ZenPress login protection.
6. Login page with ZenPress login protection.
7. Login page with ZenPress login protection after trying to brute force it.
8. Website head without ZenPress.
9. Website head with ZenPress.

== Privacy Statement ==

ZenPress is private by default and always will be. It does not store any data. It does not send data to any third party, nor does it include any third party resources.

== Accessibility Statement ==

ZenPress aims to be fully accessible to all of its users.

== Frequently Asked Questions ==

= Can I disable some ZenPress functions ? =

Yes! You can easily disable them by setting a constant in your wp-config.php or functions.php file. Please refer to the configuration section for more details.

= Does this plugin work with PHP 8 =

Yes, it's actively tested and working up to PHP 8.2.

= Do you accept donations? =

I am accepting donations on my buymeacoffee page : https://buymeacoffee.com/quentinld. If you work at an agency that develops with WordPress, ask your company to provide sponsorship in order to invest in its supply chain. The tools that I maintain probably save your company time and money, and GitHub sponsorship can now be done at the organisation level.

In addition, if you like the plugin then I'd love for you to leave a review. Tell all your friends about it too!

== Changelog ==

= 1.0.4 =

- Fix ABSPATH on woocommerce patterns snippets.
- Disable RSS feeds except main one.
- Remove RSS feeds links in head except main one.
- Remove Rest API link in head.
- Remove WP Mail SMTP ads widget.

= 1.0.3 =

- ZenPress tested for WordPress 6.8.
- UI : Disable AARVE plugin bloat widget.

= 1.0.2 =

- Remove load_plugin_textdomain, not needed since WordPress 4.6.
- Protect wp login : Add zenpress_ prefix to transients.
- Remove woocommerce patterns : Add zenpress_ prefix to function.
- Lint and fix PHP code with phpstan.

= 1.0.1 =

Fix script loading error on WC home admin page

= 1.0 =

First release of ZenPress, yaaaaayyy!

== Upgrade Notice ==

= 1.0.* =

Small fixes for WordPress Directory Submission

= 1.0 =

Let's boost your WordPress website!

== Credits ==

* Photo CC0 licensed photo by Chandra WordPress Photo Directory: https://wordpress.org/photos/photo/76967b30b3/
