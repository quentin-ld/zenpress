<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueues script and style on ZenPress settings page only.
 */
add_action('admin_enqueue_scripts', 'zenpress_admin_enqueue_scripts');
function zenpress_admin_enqueue_scripts(string $admin_page): void {
    if ('settings_page_zenpress' !== $admin_page) {
        return;
    }

    $asset_file = ZENPRESS_PLUGIN_DIR . 'assets/build/index.asset.php';
    if (!file_exists($asset_file)) {
        return;
    }

    $asset = include $asset_file;
    if (!is_array($asset) || empty($asset['dependencies']) || empty($asset['version'])) {
        return;
    }

    wp_enqueue_script(
        'zenpress-scripts',
        plugins_url('assets/build/index.js', ZENPRESS_PLUGIN_FILE),
        (array) $asset['dependencies'],
        $asset['version'],
        true
    );

    wp_enqueue_style(
        'zenpress-style',
        plugins_url('assets/build/index.css', ZENPRESS_PLUGIN_FILE),
        array_filter(
            (array) $asset['dependencies'],
            static function (string $style): bool {
                return wp_style_is($style, 'registered');
            }
        ),
        $asset['version']
    );
}

/**
 * Localizes zenpressSnippetsMeta and zenpressIntegrationsActive on ZenPress settings page.
 */
add_action('admin_enqueue_scripts', 'zenpress_localize_snippets_meta');
function zenpress_localize_snippets_meta(string $admin_page): void {
    if ('settings_page_zenpress' !== $admin_page) {
        return;
    }

    $snippets = [];
    $snippets_path = ZENPRESS_PLUGIN_DIR . 'inc/snippets/functions/';
    if (!is_dir($snippets_path)) {
        return;
    }

    $files = glob($snippets_path . '*.php') ?: [];
    foreach ($files as $file) {
        $basename = basename($file, '.php');
        $snippets[$basename] = zenpress_extract_snippet_metadata($basename);
    }

    wp_localize_script('zenpress-scripts', 'zenpressSnippetsMeta', $snippets);
    wp_localize_script('zenpress-scripts', 'zenpressIntegrationsActive', ZenPress_Integrations::get_active_integrations_for_ui());
}
