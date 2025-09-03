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
 * Plugin Name: ZenPress — Cleaner, Lighter, Faster WP
 * Description: Easily speed up and strengthen your WordPress site by cleaning out unnecessary features and protecting weak points.
 * Version: 2.0.2
 * Plugin URI: https://wordpress.org/plugins/zenpress/
 * Author: Quentin Le Duff
 * Author URI: https://profiles.wordpress.org/quentinldd/
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue scripts and styles used by the plugin in admin area.
 *
 * @param string $admin_page Current admin page hook.
 * @return void
 */
add_action('admin_enqueue_scripts', 'zenpress_admin_enqueue_scripts');
function zenpress_admin_enqueue_scripts(string $admin_page): void {
    if ('settings_page_zenpress' !== $admin_page) {
        return;
    }

    $asset_file = plugin_dir_path(__FILE__) . 'assets/build/index.asset.php';
    if (!file_exists($asset_file)) {
        return;
    }

    $asset = include $asset_file;
    wp_enqueue_script(
        'zenpress-scripts',
        plugins_url('assets/build/index.js', __FILE__),
        $asset['dependencies'],
        $asset['version'],
        true
    );

    wp_enqueue_style(
        'zenpress-style',
        plugins_url('assets/build/index.css', __FILE__),
        array_filter(
            $asset['dependencies'],
            function ($style) {
                return wp_style_is($style, 'registered');
            }
        ),
        $asset['version']
    );
}

/**
 * Localize translated snippet metadata for use in JavaScript.
 *
 * @param string $admin_page Current admin page hook.
 * @return void
 */
add_action('admin_enqueue_scripts', 'zenpress_localize_snippets_meta');
function zenpress_localize_snippets_meta(string $admin_page): void {
    if ('settings_page_zenpress' !== $admin_page) {
        return;
    }

    $snippets = [];
    $snippets_path = plugin_dir_path(__FILE__) . 'inc/snippets/';
    if (!is_dir($snippets_path)) {
        return;
    }

    foreach (glob($snippets_path . '*.php') as $file) {
        $basename = basename($file, '.php');
        $snippets[$basename] = zenpress_extract_snippet_metadata($basename);
    }

    wp_localize_script('zenpress-scripts', 'zenpressSnippetsMeta', $snippets);
}

/**
 * Add a settings link on the plugins list page.
 *
 * @param array $links Existing plugin action links.
 * @return array Modified plugin action links.
 */
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'zenpress_add_settings_link');
function zenpress_add_settings_link(array $links): array {
    $url = admin_url('options-general.php?page=zenpress');
    $links[] = sprintf(
        '<a href="%s" aria-label="%s">%s</a>',
        esc_url($url),
        esc_attr__('Go to ZenPress settings page', 'zenpress'),
        esc_html__('Settings', 'zenpress')
    );
    return $links;
}

/**
 * Add extra links under the plugin description on the plugins page.
 *
 * @param array  $links Existing row meta links.
 * @param string $file  Current plugin file.
 * @return array Modified row meta links.
 */
add_filter('plugin_row_meta', 'zenpress_plugin_row_meta', 10, 2);
function zenpress_plugin_row_meta(array $links, string $file): array {
    if ($file === plugin_basename(__FILE__)) {
        $extra_links = array(
            sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">%s</a>',
                esc_url('https://wordpress.org/plugins/zenpress/#developers'),
                esc_attr__('View ZenPress changelog on WordPress.org (opens in a new tab)', 'zenpress'),
                esc_html__('Changelog', 'zenpress')
            ),
            sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">%s</a>',
                esc_url('https://holdmywp.com/zenpress/'),
                esc_attr__('Read ZenPress documentation (opens in a new tab)', 'zenpress'),
                esc_html__('Docs', 'zenpress')
            ),
            sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">%s</a>',
                esc_url('https://buymeacoffee.com/quentinld'),
                esc_attr__('Support ZenPress by buying a coffee (opens in a new tab)', 'zenpress'),
                esc_html__('Support ☕', 'zenpress')
            )
        );
        $links = array_merge($links, $extra_links);
    }
    return $links;
}

/**
 * Register ZenPress options page under the Settings menu.
 *
 * @return void
 */
add_action('admin_menu', 'zenpress_add_option_page');
function zenpress_add_option_page(): void {
    add_options_page(
        __('ZenPress options', 'zenpress'),
        __('ZenPress', 'zenpress'),
        'manage_options',
        'zenpress',
        'zenpress_options_page'
    );
}

/**
 * Render ZenPress options page content.
 *
 * @return void
 */
function zenpress_options_page(): void {
    $plugin_data = get_file_data(__FILE__, ['Version' => 'Version'], 'plugin');
    $plugin_version = $plugin_data['Version'] ?? '';
    ?>
    <div class="wrap zenpress-dashboard-wrap">
        <div class="zenpress-header">
            <div class="zenpress-header-title">
                <h1><?php echo esc_html__('ZenPress', 'zenpress'); ?></h1>
                <?php if ($plugin_version) : ?>
                    <p class="zenpress-plugin-version">
                        <?php echo esc_html__('Version', 'zenpress') . ' ' . esc_html($plugin_version) . ' - '; ?>
                        <a href="https://wordpress.org/plugins/zenpress/#developers"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="<?php echo esc_attr__('View ZenPress changelog on WordPress.org (opens in a new tab)', 'zenpress'); ?>">
                            <?php echo esc_html__('What\'s new ?', 'zenpress'); ?>
                        </a>
                    </p>
                <?php endif; ?>
            </div>
            <div class="zenpress-header-navigation">
                <a href="https://holdmywp.com/zenpress/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Read the ZenPress documentation (opens in a new tab)', 'zenpress'); ?>">
                    <?php echo esc_html__('Documentation', 'zenpress'); ?>
                </a>
                <a href="https://wordpress.org/plugins/zenpress/#reviews"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Leave a review for ZenPress on WordPress.org (opens in a new tab)', 'zenpress'); ?>">
                    <?php echo esc_html__('Leave a review (helps a lot)', 'zenpress'); ?>
                </a>
                <a href="https://buymeacoffee.com/quentinld"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="components-button is-next-40px-default-size is-tertiary"
                   aria-label="<?php echo esc_attr__('Support development: Buy me a coffee (opens in a new tab)', 'zenpress'); ?>">
                    <?php echo esc_html__('Buy me a coffee', 'zenpress'); ?> <span aria-hidden="true">☕</span>
                </a>
            </div>
        </div>
        <div id="zenpress-settings" class="zenpress-settings">
            <div class="zenpress-loading card">
                <div class="zenpress-loading-body">
                    <p class="zenpress-loading-text">
                        <?php echo esc_html__('Loading your ZenPress settings…', 'zenpress'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="zenpress-footer">
            <div class="zenpress-footer-title">
                <p>
                    <?php echo esc_html__('Made ', 'zenpress'); ?>
                    <span aria-hidden="true"> x ❤️ </span>
                    <?php echo esc_html__(' by Quentin Le Duff - Your WordPress Partner', 'zenpress'); ?>
                </p>
            </div>
            <div class="zenpress-footer-navigation">
                <a href="https://holdmywp.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Visite the developper website', 'zenpress'); ?>">
                    <?php echo esc_html__('My place', 'zenpress'); ?>
                </a>
                <a href="https://github.com/quentin-ld/zenpress"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Review the code on Github', 'zenpress'); ?>">
                    <?php echo esc_html__('ZenPress code repository', 'zenpress'); ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Extract snippet metadata from its meta file.
 *
 * @param string $snippet_name Snippet base name (without extension).
 * @return array<string,mixed> Sanitized metadata (title, description, category, weight, preset).
 */
function zenpress_extract_snippet_metadata(string $snippet_name): array {
    $defaults = array(
        'title'       => '',
        'description' => '',
        'category'    => '',
        'weight'      => 0,
        'preset'      => array()
    );

    $file = plugin_dir_path(__FILE__) . 'inc/meta/' . sanitize_file_name($snippet_name) . '.meta.php';
    $data = is_file($file) ? include $file : array();
    $metadata = array_merge($defaults, is_array($data) ? $data : array());

    return array(
        'title'       => sanitize_text_field($metadata['title']),
        'description' => sanitize_text_field($metadata['description']),
        'category'    => sanitize_text_field($metadata['category']),
        'weight'      => (int) $metadata['weight'],
        'preset'      => array_map('sanitize_text_field', (array) $metadata['preset'])
    );
}

/**
 * Register option to store active snippets.
 */
add_action('init', 'zenpress_register_snippet_settings');
function zenpress_register_snippet_settings(): void {
    register_setting(
        'options',
        'zenpress_active_snippets',
        array(
            'type'              => 'array',
            'default'           => array(),
            'sanitize_callback' => 'zenpress_sanitize_snippets_option',
            'show_in_rest'      => array(
                'schema' => array(
                    'type'  => 'array',
                    'items' => array('type' => 'string')
                )
            )
        )
    );
}

/**
 * Sanitize the list of active snippets.
 *
 * @param mixed $value Option value.
 * @return array<string> Sanitized base names.
 */
function zenpress_sanitize_snippets_option($value): array {
    return array_values(
        array_filter(
            array_map('sanitize_file_name', (array) $value)
        )
    );
}

/**
 * Load all active snippets.
 *
 * @param string $folder Relative folder path for snippets.
 * @return array<string> Loaded snippet base names.
 */
function zenpress_load_snippets(string $folder = 'inc/snippets/'): array {
    $path = plugin_dir_path(__FILE__) . rtrim($folder, '/') . '/';

    if (!is_dir($path)) {
        return array();
    }

    $snippets = (array) get_option('zenpress_active_snippets', array());
    $loaded = array();
    foreach ($snippets as $name) {
        $name = sanitize_file_name($name);
        $file = $path . $name . '.php';
        $constant = 'ZENPRESS_' . strtoupper(str_replace(array('-', '_'), '_', $name));
        if (is_file($file) && (!defined($constant) || constant($constant) !== false)) {
            include_once $file;
            $loaded[] = $name;
        }
    }
    return $loaded;
}

/**
 * Boot ZenPress snippets.
 */
add_action('init', function() : void {
	zenpress_load_snippets();
});
