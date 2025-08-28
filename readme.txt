=== ZenPress - Unbloat, Performance & Security ===
Contributors: @quentinldd
Donate link: https://github.com/sponsors/quentin-ld/
Tags: optimization, performance, security, woocommerce, bloat
Requires at least: 6.0
Tested up to: 6.8
Stable tag: 2.0
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

= Performance 🚀=

* Disable adjacent posts link tags
* Disable dashicons
* Disable DNS prefetch
* Disable WordPress emoji scripts and styles
* Disable jQuery migrate
* Disable oEmbed
* Disable PDF thumbnails
* Disable all WordPress feeds (RDF, RSS, RSS2, Atom, and comments)
* Disable WordPress shortlink
* Disable WLW link
* Remove WordPress default remote block patterns
* Remove REST API links
* Separate loading of core block styles

= Security 🔒️=

* Block user enumeration
* Disable author archives
* Disable pingback and trackback
* Disable XML-RPC and remove RSD link
* Hide WordPress version
* Protect the wp-login form from brute force attacks

= User interface 💻️=

* Clean up the WordPress admin bar
* Clean up the WordPress Dashboard
* Disable the login language selector

= WooCommerce 🛒=
* Disable WooCommerce cart fragments script
* Disable WooCommerce scripts and styles on non-WooCommerce pages
* Disable unnecessary Stripe scripts on WooCommerce pages
* Disable WooCommerce widgets
* Hide WooCommerce version
* Remove WooCommerce default remote block patterns

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

Yes, it's actively tested and working up to PHP 8.4.

= Do you accept donations? =

I am accepting donations on my buymeacoffee page : https://buymeacoffee.com/quentinld. If you work at an agency that develops with WordPress, ask your company to provide sponsorship in order to invest in its supply chain. The tools that I maintain probably save your company time and money, and Buy me a coffee support can now be done at the organisation level.

In addition, if you like the plugin then I'd love for you to leave a review. Tell all your friends about it too!

== Changelog ==

= 2.0 =

-
-
-
-

= 1.0.9.1 =

- Compatibility : Plugin tested up to PHP 8.4

= 1.0.9 =

- Compatibility : Plugin tested up to PHP 8.4
- UI : Disable login language selector
- Fix constant naming in readme.txt

= 1.0.8 =

- UI : Remove smash baloon ads meta box
- Global : Files naming and call for scalability

= 1.0.7 =

- ZenPress tested for WordPress 6.8.1
- UI : Remove site health meta box
- UI : Remove WooCommerce admin dashboard setup metabox

= 1.0.6 =

- Remove the image assets from the plugin.
- Plugin deployment with github actions.
- No hidden files in plugin.

= 1.0.5 =

- Remove the image assets from the plugin.

= 1.0.4 =

- Fix ABSPATH on woocommerce patterns snippets.
- Performance : Disable RSS feeds except main one.
- Performance : Remove RSS feeds links in head except main one.
- Performance : Remove Rest API link in head.
- Performance : Remove WP Mail SMTP ads widget.

= 1.0.3 =

- ZenPress tested for WordPress 6.8.
- UI : Disable AARVE plugin bloat widget.

= 1.0.2 =

- Remove load_plugin_textdomain, not needed since WordPress 4.6.
- Protect wp login : Add zenpress_ prefix to transients.
- Remove woocommerce patterns : Add zenpress_ prefix to function.
- Lint and fix PHP code with phpstan.

= 1.0.1 =

- Fix script loading error on WC home admin page

= 1.0.0.2 =

- First release of ZenPress, yaaaaayyy!

== Upgrade Notice ==

= 1.0.0.1 =

- Small fixes for WordPress Directory Submission

= 1.0 =

- Let's boost your WordPress website!

== Credits ==

* Photo CC0 licensed photo by Chandra WordPress Photo Directory: https://wordpress.org/photos/photo/76967b30b3/
