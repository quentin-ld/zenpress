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
// TODO: Add a "weight" to each snippet and add a component to display the saved weight
// TODO: CHECK ALL THE TEXTS
// TODO: EDIT THE README
// TODO: UPDATE IMAGES
// TODO: CHECK THE DEPLOYMENT WORKING PROPERLY

if (!defined('ABSPATH')) {
    die();
}

/**
 * Enqueue scripts and styles used by the plugin in admin area.
 *
 * @param string $admin_page Current admin page hook.
 * @return void
 */
function zenpress_admin_enqueue_scripts(string $admin_page): void {
    if ($admin_page !== 'settings_page_zenpress') {
        return;
    }

    $asset_file = plugin_dir_path(__FILE__) . 'assets/build/index.asset.php';
    if (!file_exists($asset_file)) {
        return;
    }

    /** @var array{dependencies: string[], version: string} $asset */
    $asset = include $asset_file;

    if (!is_array($asset) || !isset($asset['dependencies'], $asset['version'])) {
        return;
    }

    wp_enqueue_script(
        'zenpress-scripts',
        plugins_url('assets/build/index.js', __FILE__),
        array_map('sanitize_key', $asset['dependencies']),
        sanitize_text_field($asset['version']),
        ['in_footer' => true]
    );

    wp_enqueue_style(
        'zenpress-style',
        plugins_url('assets/build/index.css', __FILE__),
        array_filter(
            array_map('sanitize_key', $asset['dependencies']),
            fn($style) => wp_style_is($style, 'registered')
        ),
        sanitize_text_field($asset['version'])
    );
}
add_action('admin_enqueue_scripts', 'zenpress_admin_enqueue_scripts');

/**
 * Register ZenPress options page under the Settings menu.
 *
 * @return void
 */
function zenpress_add_option_page(): void {
    add_options_page(
        __('ZenPress options', 'zenpress'),
        __('ZenPress', 'zenpress'),
        'manage_options',
        'zenpress',
        'zenpress_options_page'
    );
}
add_action('admin_menu', 'zenpress_add_option_page');

/**
 * Render ZenPress options page content.
 *
 * @return void
 */
function zenpress_options_page(): void {
    ?>
    <div class="wrap zenpress-dashboard-wrap">
        <div class="zenpress-dashboard-header">
            <div class="zenpress-dashboard-header-title">
                <h1>
                    <?php echo esc_html__('ZenPress settings', 'zenpress'); ?>
                </h1>
            </div>
			<div class="zenpress-navigation">
				<a href="https://holdmywp.com/zenpress/"
				target="_blank"
				rel="noopener noreferrer"
				aria-label="<?php echo esc_attr__('Read the ZenPress documentation (opens in a new tab)', 'zenpress'); ?>">
					<span aria-hidden="true">📖</span> <?php echo esc_html__('Documentation', 'zenpress'); ?>
				</a>

				<a href="https://wordpress.org/plugins/zenpress/#reviews"
				target="_blank"
				rel="noopener noreferrer"
				aria-label="<?php echo esc_attr__('Leave a review for ZenPress on WordPress.org (opens in a new tab)', 'zenpress'); ?>">
					<span aria-hidden="true">⭐️</span> <?php echo esc_html__('Leave a review (helps a lot)', 'zenpress'); ?>
				</a>

				<a href="https://buymeacoffee.com/quentinld"
				target="_blank"
				rel="noopener noreferrer"
				class="button button-primary"
				aria-label="<?php echo esc_attr__('Support development: Buy me a coffee (opens in a new tab)', 'zenpress'); ?>">
					<span aria-hidden="true">☕</span> <?php echo esc_html__('Buy me a coffee', 'zenpress'); ?>
				</a>
			</div>

        </div>

        <div id="zenpress-settings" class="zenpress-settings">
            <?php echo esc_html__('Loading settings…', 'zenpress'); ?>
        </div>
    </div>
    <?php
}

/**
 * Extract snippet metadata from corresponding meta file.
 *
 * @param string $snippet_name Base name of the snippet (without extension).
 * @return array<string,string> Metadata array with keys: title, description, category.
 */
function zenpress_extract_snippet_metadata(string $snippet_name): array {
    $metadata = [
        'title'       => '',
        'description' => '',
        'category'    => '',
    ];

    $meta_file = plugin_dir_path(__FILE__) . 'inc/meta/' . basename($snippet_name) . '.meta.php';

    if (is_file($meta_file)) {
        /** @var mixed $data */
        $data = include $meta_file;
        if (is_array($data)) {
            $metadata = array_merge(
                $metadata,
                array_intersect_key($data, $metadata)
            );
        }
    }

    return array_map('sanitize_text_field', $metadata);
}

/**
 * Register a single option to store all active snippets.
 *
 * @return void
 */
function zenpress_register_snippet_settings(): void {
    register_setting(
        'options',
        'zenpress_active_snippets',
        [
            'type'         => 'array',
            'default'      => [],
            'show_in_rest' => [
                'schema' => [
                    'type'  => 'array',
                    'items' => [ 'type' => 'string' ],
                ],
            ],
        ]
    );
}
add_action('init', 'zenpress_register_snippet_settings');

/**
 * Load enabled snippets.
 *
 * @param string $folder Relative folder where snippets are stored.
 * @return array<int,string> List of loaded snippet base names.
 */
function zenpress_load_snippets(string $folder = 'inc/snippets/'): array {
    $snippets_path = plugin_dir_path(__FILE__) . rtrim($folder, '/') . '/';
    if (!is_dir($snippets_path)) {
        return [];
    }

    $active_snippets = get_option('zenpress_active_snippets', []);
    if (!is_array($active_snippets)) {
        $active_snippets = [];
    }

    $loaded = [];
    foreach ($active_snippets as $base_name) {
        $file = $snippets_path . $base_name . '.php';
        $constant_name = 'ZENPRESS_' . strtoupper(str_replace(['-', '_'], '_', $base_name));

        if (is_file($file) && (!defined($constant_name) || constant($constant_name) !== false)) {
            include_once $file;
            $loaded[] = $base_name;
        }
    }

    return $loaded;
}
add_action('init', fn() => zenpress_load_snippets());

/**
 * Localize translated snippet metadata for use in JavaScript.
 *
 * @param string $hook Current admin page hook.
 * @return void
 */
add_action('admin_enqueue_scripts', function (string $hook): void {
    if ($hook !== 'settings_page_zenpress') {
        return;
    }

    $snippets = [];
    $snippets_path = plugin_dir_path(__FILE__) . 'inc/snippets/';
    if (!is_dir($snippets_path)) {
        return;
    }

    foreach (glob($snippets_path . '*.php') ?: [] as $file) {
        $base_name = basename($file, '.php');
        $snippets[$base_name] = zenpress_extract_snippet_metadata($base_name);
    }

    wp_localize_script('zenpress-scripts', 'zenpressSnippetsMeta', $snippets);
});
