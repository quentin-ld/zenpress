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
 * Version: 2.0
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

/*****
 * TODOLIST ▓▒░(°◡°)░▒▓
****/
// TODO: Disable comments URL
// TODO: Disable author URL in generatepress theme
// TODO: CHECK THE OPTIONS DATA AND CREATE MISSING ONES (PHP)
// TODO: USE OBJECT CACHE OR TRANSIENTS (PHP)
// TODO: CHECK IF EVERYTHING IS TRANSLATABLE (PHP, JS)
// TODO: MERGE BUILD AND SRC IN ASSETS FOLDER
// TODO: CHECK ALL THE TEXTS
// TODO: EDIT THE README
// TODO: UPDATE IMAGES
// TODO: CHECK THE DEPLOYMENT WORKING PROPERLY
// TODO: ORDER CATEGORIES A-Z

if (!defined('ABSPATH')) {
    die();
}

/**
 * Enqueue scripts and styles used by the plugin.
 */
add_action('admin_enqueue_scripts', 'zenpress_admin_enqueue_scripts');
function zenpress_admin_enqueue_scripts($admin_page) {
    // Check if the current admin page is not the ZenPress settings page
    if ('settings_page_zenpress' !== $admin_page) { return; }

    // Define the path to the asset file
    $asset_file = plugin_dir_path(__FILE__) . 'build/index.asset.php';
    // Check if the asset file exists
    if (!file_exists($asset_file)) { return; }

    // Include the asset file to get dependencies and version information
    $asset = include $asset_file;

    // Enqueue the main JavaScript file for the plugin
    wp_enqueue_script(
        'zenpress-scripts',
        plugins_url('build/index.js', __FILE__),
        $asset['dependencies'],
        $asset['version'],
        array('in_footer' => true)
    );

    // Enqueue the main CSS file for the plugin
    wp_enqueue_style(
        'zenpress-style',
        plugins_url('build/index.css', __FILE__),
        array_filter(
            $asset['dependencies'],
            function ($style) {
                return wp_style_is($style, 'registered');
            }
        ),
        $asset['version'],
    );
}

/**
 * Add a custom options page under the Settings menu.
 */
add_action('admin_menu', 'zenpress_add_option_page');
function zenpress_add_option_page() {
    // Add a new submenu page under the Settings menu
    add_options_page(
        __('ZenPress options', 'zenpress'), // Page title
        __('ZenPress', 'zenpress'),         // Menu title
        'manage_options',                   // Capability required to access the page
        'zenpress',                         // Menu slug
        'zenpress_options_page'             // Function to display the page content
    );
}

/**
 * Add a placeholder within the plugin's settings page.
 */
function zenpress_options_page() {
    // Output the HTML for the settings page
    printf(
        '<div class="wrap">' .
		'<div class="zenpress-dashboard-wrap">' .
		'<h1>' . esc_html__('ZenPress settings', 'zenpress') . '</h1>' .
        '<div id="zenpress-settings" class="zenpress-settings">%s</div></div></div>',
        esc_html__('Loading settings…', 'zenpress')
    );
}

/**
 * Extract snippet metadata from the file content.
 *
 * @param string $file_path The path to the snippet file.
 * @return array An array containing the title, description, and category.
 */
function zenpress_extract_snippet_metadata($file_path) {
    $metadata = array(
        'title' => '',
        'description' => '',
        'category' => ''
    );

    if (!file_exists($file_path)) {
        return $metadata;
    }

    $file_content = file_get_contents($file_path);

    // Extract title
    if (preg_match('/\* Title\s*:\s*(.*?)\s*\*/', $file_content, $title_match)) {
        $metadata['title'] = trim($title_match[1]);
    }

    // Extract description
    if (preg_match('/\* Description\s*:\s*(.*?)\s*\*/', $file_content, $desc_match)) {
        $metadata['description'] = trim($desc_match[1]);
    }

    // Extract category
    if (preg_match('/\* Category\s*:\s*(.*?)\s*\*/', $file_content, $category_match)) {
        $metadata['category'] = trim($category_match[1]);
    }

    return $metadata;
}


/**
 * Register settings for each snippet.
 */
function zenpress_register_snippet_settings() {
    // Define the path to the snippets directory
    $zenpress_path = plugin_dir_path(__FILE__) . 'inc/snippets/';
    // Get all PHP files in the snippets directory
    $zenpress_files = glob($zenpress_path . '*.php');
    $available_snippets = array();
    // Check if there are any snippet files
    if ($zenpress_files !== false) {
        // Loop through each file to get the snippet names and metadata
        foreach ($zenpress_files as $file) {
            if (file_exists($file)) {
                $base_name = basename($file, '.php');
                $metadata = zenpress_extract_snippet_metadata($file);
                $available_snippets[$base_name] = $metadata;
            }
        }
    }
    // Register settings for each available snippet
    foreach ($available_snippets as $snippet => $metadata) {
        $default = array(
            'enable-snippet' => false,
            'title' => $metadata['title'],
            'description' => $metadata['description'],
            'category' => $metadata['category'],
        );
        $schema = array(
            'type' => 'object',
            'properties' => array(
                'enable-snippet' => array(
                    'type' => 'boolean',
                ),
                'title' => array(
                    'type' => 'string',
                ),
                'description' => array(
                    'type' => 'string',
                ),
                'category' => array(
                    'type' => 'string',
                ),
            ),
        );
        register_setting(
            'options',
            'zenpress_' . $snippet,
            array(
                'type'         => 'object',
                'default'      => $default,
                'show_in_rest' => array(
                    'schema' => $schema,
                ),
            )
        );
    }
}
// Hook the function to the 'init' action to register settings
add_action('init', 'zenpress_register_snippet_settings');

/**
 * Load all ZenPress snippets and return loaded snippets.
 *
 * @param string $zenpress_folder The folder where snippets are stored.
 * @return array An array of loaded snippet names.
 */
function zenpress_load_snippets($zenpress_folder) {
    // Define the path to the snippets directory
    $zenpress_path = plugin_dir_path(__FILE__) . rtrim($zenpress_folder, '/') . '/';

    // Check if the directory exists
    if (!is_dir($zenpress_path)) {
        return array();
    }

    // Get all PHP files in the snippets directory
    $zenpress_files = glob($zenpress_path . '*.php');
    if ($zenpress_files === false) {
        return array();
    }

    $loaded_snippets = array();
    foreach ($zenpress_files as $file) {
        if (file_exists($file)) {
            // Get the base name of the file without the .php extension
            $base_name = basename($file, '.php');
            // Create a constant name for the snippet
            $constant_name = 'ZENPRESS_' . strtoupper(str_replace(['-', '_'], '_', $base_name));

            // Check if the snippet is enabled in the options
            $snippet_option = get_option('zenpress_' . $base_name, array('enable-snippet' => false));
            $is_enabled = isset($snippet_option['enable-snippet']) ? $snippet_option['enable-snippet'] : false;

            // Load the snippet if it is enabled and not disabled by a constant
            if ($is_enabled && (!defined($constant_name) || constant($constant_name) !== false)) {
                include_once $file;
                $loaded_snippets[] = $base_name;
            }
        }
    }
    return $loaded_snippets;
}

// Load snippets from the specified directory
zenpress_load_snippets('inc/snippets/');

