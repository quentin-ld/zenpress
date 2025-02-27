<?php

/**
 * ZenPress plugin for WordPress
 *
 * @package   zenpress
 * @link      https://github.com/quentin-ld/zenpress
 * @author    Quentin Le Duff
 * @copyright 2024-2025 Quentin Le Duff
 * @license   GPL v2 or later
 *
 * Plugin Name:  ZenPress
 * Description: ZenPress is a powerful plugin designed to enhance the performance and security of your WordPress website. It disables unnecessary features, optimizes performance, and hardens security to protect your site. This plugin comes with various functionalities like disabling unused scripts, removing unnecessary WordPress and WooCommerce features, and securing login pages, among others.
 * Version:      1.0
 * Plugin URI:   https://wordpress.org/plugins/zenpress/
 * Author:       Quentin Le Duff
 * Author URI:   https://holdmywp.com/
 * Text Domain:  zenpress
 * Domain Path:  /languages/
 * Requires at least: 6.0
 * Tested up to: 6.7
 * Requires PHP: 7.4
 * License URI:  https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * License:      GPL v2 or later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

if (!defined('ABSPATH')) die();


/*****
 * PERFORMANCE (つ≧▽≦)つ
 ****/
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__adjacent-posts.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__dashicons.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__dns-prefetch.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__emoji-scripts.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__jquery-migrate.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__oembed.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__pdf-thumbnails.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__shortlink.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__wlw-manifest.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-cart-fragments.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-scripts-styles.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-stripe-scripts.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-widgets.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/remove__gutenberg-unwanted-block-patterns.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/remove__woocommerce-patterns.php');
include(plugin_dir_path(__FILE__) . 'inc/performance/separate__gutenberg-core-block-styles.php');


/*****
 * SECURITY ┐(︶▽︶)┌
 ****/
include(plugin_dir_path(__FILE__) . 'inc/security/block__user-enumeration.php');
include(plugin_dir_path(__FILE__) . 'inc/security/disable__author-archives.php');
include(plugin_dir_path(__FILE__) . 'inc/security/disable__pingback-trackback.php');
include(plugin_dir_path(__FILE__) . 'inc/security/disable__xmlrpc-rsdlink.php');
include(plugin_dir_path(__FILE__) . 'inc/security/hide__woocommerce-version.php');
include(plugin_dir_path(__FILE__) . 'inc/security/hide__wordpress-version.php');
include(plugin_dir_path(__FILE__) . 'inc/security/protect__wp-login.php');


/*****
 * USER INTERFACE ヾ(☆▽☆)
 ****/
include(plugin_dir_path(__FILE__) . 'inc/ui/clean__admin-bar.php');
include(plugin_dir_path(__FILE__) . 'inc/ui/clean__dashboard-items.php');


/*****
 * TODOLIST ▓▒░(°◡°)░▒▓
 ****/
// TODO: Add possibility to disable functionality based on wp-config variable (everything active by default)
// TODO: Make plugin translatable
// TODO: Fix for plugincheck
// TODO: Add a unique button with dropdown in adminbar to clean all caches types onclick (will work with : Autooptimize, Cache enabler, Redis Object Cache, SQL Object Cache, APCU Manager).
// TODO: Remove Rest API link from frontend
// TODO: Remove all RSS feeds links and disables it except main one
// TODO: Disable comments URL
// TODO: Disable author URL in generatepress theme
