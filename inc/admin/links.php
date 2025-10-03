<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add a settings link on the plugins list page.
 *
 * @param array $links Existing plugin action links.
 * @return array Modified plugin action links.
 */
add_filter('plugin_action_links_' . plugin_basename(ZENPRESS_PLUGIN_FILE), 'zenpress_add_settings_link');
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
    if ($file === plugin_basename(ZENPRESS_PLUGIN_FILE)) {
        $extra_links = [
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
        ];
        $links = array_merge($links, $extra_links);
    }

    return $links;
}
