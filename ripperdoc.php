<?php

/*
	Plugin Name: Ripperdoc
	Plugin URI: https://wordpress.org/plugins/ripperdoc/
	Description:
	Author: Quentin Le Duff
	Author URI: https://holdmywp.com
	License: GPL3
	License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
	Text Domain: ripperdoc
	Tags: remove bloat, optimization, performance, security, woocommerce, wordpress optimization, ripperdoc
	Domain Path: /languages
	Requires at least: 5.9
	Tested up to: 6.7
	Version: 1.0
	Contributors: Quentin Le Duff
	Sources: https://holdmywp.com/checklist-securite-wordpress/, https://developer.wordpress.org/advanced-administration/security/hardening/, https://wordpress.org/plugins/disable-everything/ , https://wordpress.org/plugins/disable-dashboard-for-woocommerce/, https://fr.wordpress.org/plugins/secupress/, https://perfmatters.io/, https://faq.o2switch.fr/hebergement-mutualise/tutoriels-cpanel/wptiger/, https://mariecomet.fr/, https://github.com/vinkla/headache
*/

if (!defined('ABSPATH')) die();


/*****
 * PERFORMANCE
 ****/
// TODO : MAKE FUNCTION FOR EACH
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__adjacent-posts.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__dashicons.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__dns-prefetch.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__emoji-scripts.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__jquery-migrate.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__oembed.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__pdf-thumbnails.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__shortlink.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__wlw-manifest.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__woocommerce-cart-fragments.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__woocommerce-scripts-styles.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__woocommerce-stripe-scripts.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__woocommerce-widgets.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/disable__wp-generator.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/remove__gutenberg-unwanted-block-patterns.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/remove__woocommerce-patterns.php');
include( plugin_dir_path( __FILE__ ) . 'inc/performance/separate__gutenberg-core-block-styles.php');


/*****
 * SECURITY
 ****/
// TODO : MAKE FUNCTION FOR EACH
include( plugin_dir_path( __FILE__ ) . 'inc/security/block__user-enumeration.php');
include( plugin_dir_path( __FILE__ ) . 'inc/security/disable__author-archives.php');
include( plugin_dir_path( __FILE__ ) . 'inc/security/disable__pingback-trackback.php');
include( plugin_dir_path( __FILE__ ) . 'inc/security/disable__xmlrpc-rsdlink.php');
include( plugin_dir_path( __FILE__ ) . 'inc/security/hide__woocommerce-version.php');
include( plugin_dir_path( __FILE__ ) . 'inc/security/hide__wordpress-version.php');
include( plugin_dir_path( __FILE__ ) . 'inc/security/protect__wp-login.php');

/*****
 * USER INTERFACE
 ****/
// TODO : MAKE FUNCTION FOR EACH
include(plugin_dir_path(__FILE__) . 'inc/ui/clean__admin-bar.php');
include(plugin_dir_path(__FILE__) . 'inc/ui/clean__dashboard-items.php');
