<?php

/**
 * ZenPress plugin for WordPress
 *
 * @package   zenpress
 * @link      https://github.com/quentin-ld/zenpress/
 * @author    Quentin Le Duff
 * @copyright 2024-2025 Quentin Le Duff
 * @license   GPL v2 or later
 *
 * Plugin Name: ZenPress - Unbloat, Performance & Security
 * Description: The zeniest unbloat, performance and security lightweight plugin for WordPress and WooCommerce. Install, activate, and done!
 * Version: 1.0.4
 * Plugin URI: https://wordpress.org/plugins/zenpress/
 * Author: Quentin Le Duff
 * Author URI: https://holdmywp.com/zenpress/
 * Text Domain: zenpress
 * Domain Path: /languages/
 * Requires at least: 6.0
 * Tested up to: 6.8
 * Requires PHP: 7.4
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html/
 * License: GPL v2 or later
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
 *
 */

if (!defined('ABSPATH')) {
    die();
}

/*****
 * PERFORMANCE (つ≧▽≦)つ
 ****/
if (!defined('ZENPRESS_DISABLE_ADJACENT_POSTS') || ZENPRESS_DISABLE_ADJACENT_POSTS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__adjacent-posts.php';
}

if (!defined('ZENPRESS_DISABLE_DASHICONS') || ZENPRESS_DISABLE_DASHICONS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__dashicons.php';
}

if (!defined('ZENPRESS_DISABLE_DNS_PREFETCH') || ZENPRESS_DISABLE_DNS_PREFETCH !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__dns-prefetch.php';
}

if (!defined('ZENPRESS_DISABLE_EMOJIS') || ZENPRESS_DISABLE_EMOJIS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__emoji-scripts.php';
}

if (!defined('ZENPRESS_DISABLE_JQUERY_MIGRATE') || ZENPRESS_DISABLE_JQUERY_MIGRATE !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__jquery-migrate.php';
}

if (!defined('ZENPRESS_DISABLE_OEMBED') || ZENPRESS_DISABLE_OEMBED !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__oembed.php';
}

if (!defined('ZENPRESS_DISABLE_PDF_THUMBNAILS') || ZENPRESS_DISABLE_PDF_THUMBNAILS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__pdf-thumbnails.php';
}

if (!defined('ZENPRESS_DISABLE_RSS') || ZENPRESS_DISABLE_RSS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__rss.php';
}

if (!defined('ZENPRESS_DISABLE_SHORTLINK') || ZENPRESS_DISABLE_SHORTLINK !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__shortlink.php';
}

if (!defined('ZENPRESS_DISABLE_WLW_MANIFEST') || ZENPRESS_DISABLE_WLW_MANIFEST !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__wlw-manifest.php';
}

if (!defined('ZENPRESS_DISABLE_WC_CART_FRAGMENTS') || ZENPRESS_DISABLE_WC_CART_FRAGMENTS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-cart-fragments.php';
}

if (!defined('ZENPRESS_DISABLE_WC_SCRIPTS_STYLES') || ZENPRESS_DISABLE_WC_SCRIPTS_STYLES !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-scripts-styles.php';
}

if (!defined('ZENPRESS_DISABLE_WC_STRIPE_SCRIPTS') || ZENPRESS_DISABLE_WC_STRIPE_SCRIPTS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-stripe-scripts.php';
}

if (!defined('ZENPRESS_DISABLE_WC_WIDGETS') || ZENPRESS_DISABLE_WC_WIDGETS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/disable__woocommerce-widgets.php';
}

if (!defined('ZENPRESS_REMOVE_GUTENBERG_BLOCK_PATTERNS') || ZENPRESS_REMOVE_GUTENBERG_BLOCK_PATTERNS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/remove__gutenberg-unwanted-block-patterns.php';
}

if (!defined('ZENPRESS_REMOVE_REST_API_LINK') || ZENPRESS_REMOVE_REST_API_LINK !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/remove__rest-api-link.php';
}

if (!defined('ZENPRESS_REMOVE_WC_PATTERNS') || ZENPRESS_REMOVE_WC_PATTERNS !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/remove__woocommerce-patterns.php';
}

if (!defined('ZENPRESS_SEPARATE_GUTENBERG_CORE_BLOCK_STYLES') || ZENPRESS_SEPARATE_GUTENBERG_CORE_BLOCK_STYLES !== false) {
    include plugin_dir_path(__FILE__) . 'inc/performance/separate__gutenberg-core-block-styles.php';
}

/*****
 * SECURITY ┐(︶▽︶)┌
 ****/
if (!defined('ZENPRESS_BLOCK_USER_ENUMERATION_PROTECTION') || ZENPRESS_BLOCK_USER_ENUMERATION_PROTECTION !== false) {
    include plugin_dir_path(__FILE__) . 'inc/security/block__user-enumeration.php';
}

if (!defined('ZENPRESS_DISABLE_AUTHOR_ARCHIVES') || ZENPRESS_DISABLE_AUTHOR_ARCHIVES !== false) {
    include plugin_dir_path(__FILE__) . 'inc/security/disable__author-archives.php';
}

if (!defined('ZENPRESS_DISABLE_PINGBACK_TRACKBACK') || ZENPRESS_DISABLE_PINGBACK_TRACKBACK !== false) {
    include plugin_dir_path(__FILE__) . 'inc/security/disable__pingback-trackback.php';
}

if (!defined('ZENPRESS_DISABLE_XMLRPC_RSDLINK') || ZENPRESS_DISABLE_XMLRPC_RSDLINK !== false) {
    include plugin_dir_path(__FILE__) . 'inc/security/disable__xmlrpc-rsdlink.php';
}

if (!defined('ZENPRESS_HIDE_WC_VERSION') || ZENPRESS_HIDE_WC_VERSION !== false) {
    include plugin_dir_path(__FILE__) . 'inc/security/hide__woocommerce-version.php';
}

if (!defined('ZENPRESS_HIDE_WP_VERSION') || ZENPRESS_HIDE_WP_VERSION !== false) {
    include plugin_dir_path(__FILE__) . 'inc/security/hide__wordpress-version.php';
}

if (!defined('ZENPRESS_LOGIN_PROTECTION') || ZENPRESS_LOGIN_PROTECTION !== false) {
    include plugin_dir_path(__FILE__) . 'inc/security/protect__wp-login.php';
}

/*****
 * USER INTERFACE ヾ(☆▽☆)
 ****/
if (!defined('ZENPRESS_ADMIN_BAR_CLEANUP') || ZENPRESS_ADMIN_BAR_CLEANUP !== false) {
    include plugin_dir_path(__FILE__) . 'inc/ui/clean__admin-bar.php';
}

if (!defined('ZENPRESS_DASHBOARD_CLEANUP') || ZENPRESS_DASHBOARD_CLEANUP !== false) {
    include plugin_dir_path(__FILE__) . 'inc/ui/clean__dashboard-items.php';
}

/*****
 * TODOLIST ▓▒░(°◡°)░▒▓
 ****/
// TODO: Add a unique button with dropdown in adminbar to clean all caches types onclick (will work with : Autooptimize, Cache enabler, Redis Object Cache, SQL Object Cache, APCU Manager).
// TODO: Remove Rest API link from frontend
// TODO: Remove all RSS feeds links and Disable it except main one
// TODO: Disable comments URL
// TODO: Disable author URL in generatepress theme
