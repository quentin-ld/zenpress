<?php

/**
 * Autoptimize integration: clear cache on zenpress_caches_clear, autoconfig via options.
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Autoptimize: detection, cache clear, admin bar hide, autoconfig.
 */
final class ZenPress_Autoptimize {
    /**
     * Autoptimize active (cache class exists).
     */
    public static function is_active(): bool {
        return class_exists('autoptimizeCache', false);
    }

    /**
     * Clears Autoptimize CSS/JS cache. No-op if inactive.
     */
    public static function clear_cache(): void {
        if (!self::is_active()) {
            return;
        }
        /** @phpstan-ignore-next-line function.impossibleType (Autoptimize plugin class loaded at runtime) */
        if (!method_exists('autoptimizeCache', 'clearall')) {
            return;
        }
        /** @phpstan-ignore-next-line class.notFound (Autoptimize plugin class) */
        autoptimizeCache::clearall();
    }

    /**
     * Subscribes to zenpress_caches_clear.
     */
    public static function register_handlers(): void {
        add_action('zenpress_caches_clear', [self::class, 'clear_cache'], 10, 0);
    }

    /**
     * Hides Autoptimize admin bar button (autoptimize_filter_toolbar_show → false).
     */
    public static function disable_admin_bar_button(): void {
        add_filter('autoptimize_filter_toolbar_show', '__return_false');
    }

    /**
     * Sets recommended options (JS/CSS/aggregate/nogzip/fallback on; defer/HTML/logged-in/meta off), then clears cache.
     */
    public static function autoconfig(): void {
        if (!class_exists('autoptimizeOptionWrapper', false)) {
            return;
        }
        /** @phpstan-ignore-next-line function.impossibleType (Autoptimize plugin class loaded at runtime) */
        if (!method_exists('autoptimizeOptionWrapper', 'update_option')) {
            return;
        }

        // --- SET (enable) ---
        autoptimizeOptionWrapper::update_option('autoptimize_js', 'on');
        autoptimizeOptionWrapper::update_option('autoptimize_css', 'on');
        autoptimizeOptionWrapper::update_option('autoptimize_css_aggregate', 'on');
        autoptimizeOptionWrapper::update_option('autoptimize_cache_nogzip', 'on');
        autoptimizeOptionWrapper::update_option('autoptimize_cache_fallback', 'on');

        // --- UNSET (disable) ---
        autoptimizeOptionWrapper::update_option('autoptimize_js_defer_not_aggregate', '');
        autoptimizeOptionWrapper::update_option('autoptimize_html', '');
        autoptimizeOptionWrapper::update_option('autoptimize_optimize_logged', '');
        autoptimizeOptionWrapper::update_option('autoptimize_enable_meta_ao_settings', '');

        self::clear_cache();
    }
}

ZenPress_Autoptimize::register_handlers();
