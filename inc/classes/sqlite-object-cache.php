<?php

/**
 * SQLite Object Cache integration: flush on zenpress_caches_clear, hide admin bar, autoconfig (Use APCu option).
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * SQLite Object Cache: detection, flush, admin bar hide, autoconfig.
 */
final class ZenPress_Sqlite_Object_Cache {
    /** SQLite Object Cache admin bar node ID. */
    private const SQLITE_OBJECT_CACHE_ADMIN_BAR_ID = 'sqlite-object-cache-flush';

    /**
     * SQLite Object Cache active.
     */
    public static function is_active(): bool {
        return class_exists('SQLite_Object_Cache', false);
    }

    /**
     * Flushes object cache. No-op if inactive.
     */
    public static function clear_cache(): void {
        if (!self::is_active()) {
            return;
        }
        wp_cache_flush();
    }

    /**
     * Subscribes to zenpress_caches_clear.
     */
    public static function register_handlers(): void {
        add_action('zenpress_caches_clear', [self::class, 'clear_cache'], 10, 0);
    }

    /**
     * Hides SQLite Object Cache admin bar button (admin_bar_menu priority 101).
     */
    public static function disable_admin_bar_button(): void {
        add_action('admin_bar_menu', [self::class, 'remove_admin_bar_node'], 101);
    }

    /**
     * Removes SQLite Object Cache node from the admin bar.
     */
    public static function remove_admin_bar_node(WP_Admin_Bar $wp_admin_bar): void {
        $wp_admin_bar->remove_node(self::SQLITE_OBJECT_CACHE_ADMIN_BAR_ID);
    }

    /**
     * Sets plugin option use_apcu to 'on' if APCu is available. Plugin may write constant when its settings are saved.
     */
    public static function autoconfig(): void {
        if (!self::is_active()) {
            return;
        }
        if (!self::apcu_available()) {
            return;
        }

        $option_name = 'sqlite_object_cache_settings';
        $current = get_option($option_name, []);
        if (!is_array($current)) {
            $current = [];
        }
        if (isset($current['use_apcu']) && $current['use_apcu'] === 'on') {
            return;
        }

        update_option($option_name, array_merge($current, ['use_apcu' => 'on']));
    }

    /**
     * APCu extension loaded and enabled.
     */
    public static function apcu_available(): bool {
        return function_exists('apcu_enabled') && apcu_enabled();
    }
}

ZenPress_Sqlite_Object_Cache::register_handlers();
