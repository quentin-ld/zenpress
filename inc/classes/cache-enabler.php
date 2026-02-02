<?php

/**
 * Cache Enabler integration: clear on zenpress_caches_clear, hide admin bar, autoconfig (post/plugin clear, WebP, Gzip, minify HTML).
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Cache Enabler: detection, cache clear, admin bar hide, autoconfig.
 */
final class ZenPress_Cache_Enabler {
    /** Cache Enabler admin bar node IDs (main + "clear page cache" sub-item). */
    private const CACHE_ENABLER_ADMIN_BAR_IDS = [
        'cache_enabler_clear_cache',
        'cache_enabler_clear_page_cache',
    ];

    /**
     * Cache Enabler active.
     */
    public static function is_active(): bool {
        return class_exists('Cache_Enabler', false);
    }

    /**
     * Clears Cache Enabler page cache. No-op if inactive.
     */
    public static function clear_cache(): void {
        if (!self::is_active()) {
            return;
        }
        /** @phpstan-ignore-next-line class.notFound (Cache Enabler plugin class) */
        Cache_Enabler::clear_complete_cache();
    }

    /**
     * Subscribes to zenpress_caches_clear.
     */
    public static function register_handlers(): void {
        add_action('zenpress_caches_clear', [self::class, 'clear_cache'], 10, 0);
    }

    /**
     * Hides Cache Enabler admin bar item (admin_bar_menu priority 95).
     */
    public static function disable_admin_bar_button(): void {
        add_action('admin_bar_menu', [self::class, 'remove_admin_bar_node'], 95);
    }

    /**
     * Removes Cache Enabler nodes from the admin bar (main item + "clear page cache" sub-item).
     */
    public static function remove_admin_bar_node(WP_Admin_Bar $wp_admin_bar): void {
        foreach (self::CACHE_ENABLER_ADMIN_BAR_IDS as $node_id) {
            $wp_admin_bar->remove_node($node_id);
        }
    }

    /**
     * Enables: clear site cache on post/plugin changes, WebP, Gzip, minify HTML (excl. inline CSS/JS); then clears cache.
     */
    public static function autoconfig(): void {
        if (!self::is_active()) {
            return;
        }

        $option_name = 'cache_enabler';
        $current = get_option($option_name, []);
        if (!is_array($current)) {
            $current = [];
        }
        $autoconfig = [
            'clear_site_cache_on_saved_post' => 1,
            'clear_site_cache_on_changed_plugin' => 1,
            'convert_image_urls_to_webp' => 1,
            'compress_cache' => 1,
            'minify_html' => 1,
            'minify_inline_css_js' => 0, // Exclude inline CSS and JS from minification.
        ];

        update_option($option_name, array_merge($current, $autoconfig));

        self::clear_cache();
    }
}

ZenPress_Cache_Enabler::register_handlers();
