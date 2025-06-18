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
 * Version: 1.0.8
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

function zenpress_include_functions($zenpress_folder) {
    $zenpress_path = plugin_dir_path(__FILE__) . rtrim($zenpress_folder, '/') . '/';

    if (!is_dir($zenpress_path)) {
        return;
    }

    $zenpress_files = glob($zenpress_path . '*.php');

    if ($zenpress_files === false) {
        return;
    }

    foreach ($zenpress_files as $file) {
        if (file_exists($file)) {
            $base_name = basename($file, '.php');

            $constant_name = 'ZENPRESS_' . strtoupper(str_replace(['-', '_'], '_', $base_name));

            if (!defined($constant_name) || constant($constant_name) !== false) {
                include_once $file;
            }
        }
    }
}

/*****
 * PERFORMANCE (つ≧▽≦)つ
 ****/
zenpress_include_functions('inc/performance/');

/*****
 * SECURITY ┐(︶▽︶)┌
 ****/
zenpress_include_functions('inc/security/');

/*****
 * USER INTERFACE ヾ(☆▽☆)
 ****/
zenpress_include_functions('inc/ui/');

/*****
 * TODOLIST ▓▒░(°◡°)░▒▓
 ****/
// TODO: Add a unique button with dropdown in adminbar to clean all caches types onclick (will work with : Autooptimize, Cache enabler, Redis Object Cache, SQL Object Cache, APCU Manager).
// TODO: Remove Rest API link from frontend
// TODO: Remove all RSS feeds links and Disable it except main one
// TODO: Disable comments URL
// TODO: Disable author URL in generatepress theme
