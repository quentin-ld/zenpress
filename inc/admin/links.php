<?php

if (!defined('ABSPATH')) {
    exit;
}

add_filter('plugin_action_links_' . plugin_basename(ZENPRESS_PLUGIN_FILE), 'zenpress_add_settings_link');
/**
 * Adds "Settings" to plugin action links on Plugins screen.
 *
 * @param array<int, string> $links Existing action links.
 * @return array<int, string> Action links with Settings added.
 */
function zenpress_add_settings_link(array $links): array {
    $url = admin_url('options-general.php?page=zenpress');
    $links[] = sprintf(
        '<a href="%s" aria-label="%s">%s</a>',
        esc_url($url),
        esc_attr__('Go to ZenPress settings', 'zenpress'),
        esc_html__('Settings', 'zenpress')
    );

    return $links;
}

add_filter('plugin_row_meta', 'zenpress_plugin_row_meta', 10, 2);
/**
 * Adds Changelog, Docs, Support to plugin row meta for ZenPress.
 *
 * @param array<int, string> $links Existing row meta.
 * @param string             $file  Plugin basename.
 * @return array<int, string> Row meta.
 */
function zenpress_plugin_row_meta(array $links, string $file): array {
    if ($file === plugin_basename(ZENPRESS_PLUGIN_FILE)) {
        $extra_links = [
            sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">%s</a>',
                esc_url('https://wordpress.org/plugins/zenpress/#developers'),
                esc_attr__('View ZenPress changelog on WordPress.org (opens in new tab)', 'zenpress'),
                esc_html__('Changelog', 'zenpress')
            ),
            sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">%s</a>',
                esc_url('https://holdmywp.com/zenpress/'),
                esc_attr__('Read ZenPress documentation (opens in new tab)', 'zenpress'),
                esc_html__('Documentation', 'zenpress')
            ),
            sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">%s</a>',
                esc_url('https://buymeacoffee.com/quentinld'),
                esc_attr__('Support ZenPress: Buy me a coffee (opens in new tab)', 'zenpress'),
                esc_html__('Support', 'zenpress')
            )
        ];
        $links = array_merge($links, $extra_links);
    }

    return $links;
}
