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
 * Description: Easily speed up and strengthen your WordPress site by cleaning out unnecessary features and protecting weak points.
 * Version: 2.0
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 */

/*****
 * TODOLIST ▓▒░(°◡°)░▒▓
****/
// TODO: Disable comments URL
// TODO: CHECK THE DEPLOYMENT WORKING PROPERLY

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add settings link on the plugins list page (next to Activate/Deactivate).
 *
 * @param array $links Existing plugin action links.
 * @return array Modified links with Settings link appended at the end.
 */
function zenpress_add_settings_link(array $links): array {
    $settings_url = admin_url('options-general.php?page=zenpress');

    $settings_link = sprintf(
        '<a href="%s" aria-label="%s">%s</a>',
        esc_url($settings_url),
        esc_attr__('Go to ZenPress settings page', 'zenpress'),
        esc_html__('Settings', 'zenpress')
    );

    // Add "Settings" link at the end instead of first
    $links[] = $settings_link;

    return $links;
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'zenpress_add_settings_link');


/**
 * Add extra links under the plugin description on the plugins page.
 *
 * @param array  $links Existing links.
 * @param string $file  Current plugin file.
 * @return array Modified links.
 */
function zenpress_plugin_row_meta($links, $file) {
    if ($file === plugin_basename(__FILE__)) {
        $extra_links = array(
            '<a href="' . esc_url('https://wordpress.org/plugins/zenpress/#developers') . '" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr__('View ZenPress changelog on WordPress.org (opens in a new tab)', 'zenpress') . '">' . esc_html__('Changelog', 'zenpress') . '</a>',
			'<a href="' . esc_url('https://holdmywp.com/zenpress/') . '" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr__('Read ZenPress documentation (opens in a new tab)', 'zenpress') . '">' . esc_html__('Docs', 'zenpress') . '</a>',
            '<a href="' . esc_url('https://buymeacoffee.com/quentinld') . '" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr__('Support ZenPress by buying a coffee (opens in a new tab)', 'zenpress') . '">' . esc_html__('Support ☕', 'zenpress') . '</a>',
        );

        $links = array_merge($links, $extra_links);
    }

    return $links;
}
add_filter('plugin_row_meta', 'zenpress_plugin_row_meta', 10, 2);



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
    if (!is_file($asset_file)) {
        return;
    }

    /** @var mixed $asset */
    $asset = include $asset_file;

    if (!is_array($asset) || empty($asset['dependencies']) || empty($asset['version'])) {
        return;
    }

    $dependencies = array_map('sanitize_key', (array) $asset['dependencies']);
    $version      = sanitize_text_field((string) $asset['version']);

    wp_enqueue_script(
        'zenpress-scripts',
        plugins_url('assets/build/index.js', __FILE__),
        $dependencies,
        $version,
        true
    );

    wp_enqueue_style(
        'zenpress-style',
        plugins_url('assets/build/index.css', __FILE__),
        array_filter(
            $dependencies,
            static fn($style) => is_string($style) && wp_style_is($style, 'registered')
        ),
        $version
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
	$plugin_data = get_file_data(__FILE__, ['Version' => 'Version'], 'plugin');
	$plugin_version = $plugin_data['Version'] ?? '';
    ?>
    <div class="wrap zenpress-dashboard-wrap">
        <div class="zenpress-header">
            <div class="zenpress-header-title">
                <h1>
                    <?php echo esc_html__('ZenPress', 'zenpress'); ?>
                </h1>
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
 * Extract snippet metadata from corresponding meta file.
 *
 * @param string $snippet_name Base name of the snippet (without extension).
 * @return array<string,mixed> Metadata array with keys: title, description, category, weight, preset.
 */
function zenpress_extract_snippet_metadata(string $snippet_name): array {
    $metadata = [
        'title'       => '',
        'description' => '',
        'category'    => '',
        'weight'      => 0,
        'preset'      => [],
    ];

    $safe_name = sanitize_file_name($snippet_name);
    $meta_file = plugin_dir_path(__FILE__) . 'inc/meta/' . $safe_name . '.meta.php';

    if (is_file($meta_file)) {
        /** @var mixed $data */
        $data = include $meta_file;
        if (is_array($data)) {
            $metadata = array_merge($metadata, array_intersect_key($data, $metadata));
        }
    }

    // Sanitize values securely
    $metadata['title']       = sanitize_text_field($metadata['title']);
    $metadata['description'] = sanitize_text_field($metadata['description']);
    $metadata['category']    = sanitize_text_field($metadata['category']);
    $metadata['weight']      = intval($metadata['weight']);
    $metadata['preset']      = array_map('sanitize_text_field', (array) $metadata['preset']);

    return $metadata;
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
            'type'              => 'array',
            'default'           => [],
            'sanitize_callback' => static function ($value): array {
                return array_values(array_filter(
                    array_map('sanitize_file_name', (array) $value)
                ));
            },
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
        $safe_name     = sanitize_file_name($base_name);
        $file          = $snippets_path . $safe_name . '.php';
        $constant_name = 'ZENPRESS_' . strtoupper(str_replace(['-', '_'], '_', $safe_name));

        if (is_file($file) && (!defined($constant_name) || constant($constant_name) !== false)) {
            include_once $file;
            $loaded[] = $safe_name;
        }
    }

    return $loaded;
}
add_action('init', function () {
    return zenpress_load_snippets();
});

/**
 * Localize translated snippet metadata for use in JavaScript.
 *
 * @param string $hook Current admin page hook.
 * @return void
 */
add_action('admin_enqueue_scripts', static function (string $hook): void {
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
