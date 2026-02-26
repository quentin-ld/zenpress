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
 * Plugin Name: ZenPress
 * Description: Speed up and harden your site with a single click: cleans up unused features, protects security gaps, and configures cache integrations automatically.
 * Version: 2.2.5
 * Plugin URI: https://wordpress.org/plugins/zenpress/
 * Author: Quentin Le Duff
 * Author URI: https://profiles.wordpress.org/quentinldd/
 * Text Domain: zenpress
 * Domain Path: /languages/
 * Requires at least: 6.0
 * Tested up to: 6.9
 * Requires PHP: 8.1
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ZENPRESS_PLUGIN_FILE', __FILE__);
define('ZENPRESS_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once __DIR__ . '/inc/core/constants.php';
require_once __DIR__ . '/inc/core/metadata.php';
require_once __DIR__ . '/inc/core/sanitize.php';
require_once __DIR__ . '/inc/classes/autoptimize.php';
require_once __DIR__ . '/inc/classes/cache-enabler.php';
require_once __DIR__ . '/inc/classes/sqlite-object-cache.php';
require_once __DIR__ . '/inc/classes/integrations.php';
require_once __DIR__ . '/inc/admin/enqueue.php';
require_once __DIR__ . '/inc/admin/links.php';
require_once __DIR__ . '/inc/admin/menu.php';
require_once __DIR__ . '/inc/settings/options.php';
require_once __DIR__ . '/inc/settings/loader.php';
