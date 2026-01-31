<?php

/**
 * Cache integrations: admin bar "Clear caches", autoconfig REST routes, hide third-party admin bar buttons.
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Orchestrates cache integrations (Autoptimize, Cache Enabler, SQLite Object Cache).
 */
final class ZenPress_Integrations {
    /**
     * Integration class names. Each must implement is_active(); optional: disable_admin_bar_button().
     *
     * @var array<string>
     */
    private static array $integrations = [
        ZenPress_Autoptimize::class,
        ZenPress_Cache_Enabler::class,
        ZenPress_Sqlite_Object_Cache::class,
    ];

    /**
     * Admin bar "Clear caches" button enabled.
     */
    public static function is_admin_bar_enabled(): bool {
        return (bool) get_option('zenpress_admin_bar_enabled', true);
    }

    /**
     * At least one cache integration is active.
     */
    public static function has_active_integration(): bool {
        foreach (self::get_integrations() as $class) {
            if (method_exists($class, 'is_active') && $class::is_active()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Integration slug => active for settings UI.
     *
     * @return array<string, bool>
     */
    public static function get_active_integrations_for_ui(): array {
        $result = [];
        foreach (self::get_integrations() as $class) {
            try {
                $shortName = (new \ReflectionClass($class))->getShortName();
                $slug = strtolower(str_replace('ZenPress_', '', $shortName));
                $result[$slug] = method_exists($class, 'is_active') && $class::is_active();
            } catch (\Throwable $e) {
                continue;
            }
        }

        return $result;
    }

    /**
     * Registers admin bar menu, AJAX and REST handlers, and integration hooks.
     */
    public static function register(): void {
        add_action('init', [self::class, 'remove_integration_admin_bar_buttons'], 1);
        add_action('admin_bar_menu', [self::class, 'add_admin_bar_menu'], 100);
        add_action('wp_ajax_zenpress_clear_caches', [self::class, 'ajax_clear_caches']);
        add_action('rest_api_init', [self::class, 'register_rest_routes']);
    }

    /**
     * Registers POST routes for one-click autoconfig per integration.
     */
    public static function register_rest_routes(): void {
        $permission = static function (): bool {
            return current_user_can('manage_options');
        };

        register_rest_route('zenpress/v1', 'autoconfig/autoptimize', [
            'methods' => 'POST',
            'callback' => [self::class, 'rest_autoconfig_autoptimize'],
            'permission_callback' => $permission,
        ]);
        register_rest_route('zenpress/v1', 'autoconfig/cache-enabler', [
            'methods' => 'POST',
            'callback' => [self::class, 'rest_autoconfig_cache_enabler'],
            'permission_callback' => $permission,
        ]);
        register_rest_route('zenpress/v1', 'autoconfig/sqlite-object-cache', [
            'methods' => 'POST',
            'callback' => [self::class, 'rest_autoconfig_sqlite_object_cache'],
            'permission_callback' => $permission,
        ]);
    }

    /**
     * Runs Autoptimize autoconfig.
     */
    public static function rest_autoconfig_autoptimize(WP_REST_Request $request): WP_REST_Response {
        try {
            ZenPress_Autoptimize::autoconfig();
        } catch (\Throwable $e) {
            return new WP_REST_Response([
                'success' => false,
                'message' => __('Autoptimize configuration failed.', 'zenpress'),
            ], 500);
        }

        return new WP_REST_Response([
            'success' => true,
            'message' => __('Autoptimize has been configured.', 'zenpress'),
        ], 200);
    }

    /**
     * Runs Cache Enabler autoconfig.
     */
    public static function rest_autoconfig_cache_enabler(WP_REST_Request $request): WP_REST_Response {
        try {
            ZenPress_Cache_Enabler::autoconfig();
        } catch (\Throwable $e) {
            return new WP_REST_Response([
                'success' => false,
                'message' => __('Cache Enabler configuration failed.', 'zenpress'),
            ], 500);
        }

        return new WP_REST_Response([
            'success' => true,
            'message' => __('Cache Enabler has been configured.', 'zenpress'),
        ], 200);
    }

    /**
     * Runs SQLite Object Cache autoconfig.
     */
    public static function rest_autoconfig_sqlite_object_cache(WP_REST_Request $request): WP_REST_Response {
        try {
            ZenPress_Sqlite_Object_Cache::autoconfig();
        } catch (\Throwable $e) {
            return new WP_REST_Response([
                'success' => false,
                'message' => __('SQLite Object Cache configuration failed.', 'zenpress'),
            ], 500);
        }

        return new WP_REST_Response([
            'success' => true,
            'message' => __('SQLite Object Cache has been configured.', 'zenpress'),
        ], 200);
    }

    /**
     * @return array<string> Integration class names.
     */
    public static function get_integrations(): array {
        return self::$integrations;
    }

    /**
     * Hides third-party admin bar cache buttons when ZenPress admin bar is enabled.
     */
    public static function remove_integration_admin_bar_buttons(): void {
        if (!self::is_admin_bar_enabled() || !self::has_active_integration()) {
            return;
        }
        foreach (self::get_integrations() as $class) {
            if (!method_exists($class, 'is_active') || !$class::is_active()) {
                continue;
            }
            if (method_exists($class, 'disable_admin_bar_button')) {
                $class::disable_admin_bar_button();
            }
        }
    }

    /**
     * Adds "Clear all caches" and per-integration sub-items to the admin bar.
     */
    public static function add_admin_bar_menu(WP_Admin_Bar $wp_admin_bar): void {
        if (!self::is_admin_bar_enabled() || !self::has_active_integration()) {
            return;
        }
        if (!current_user_can('manage_options') || !is_admin_bar_showing()) {
            return;
        }

        $base_url = add_query_arg('action', 'zenpress_clear_caches', admin_url('admin-ajax.php'));

        $wp_admin_bar->add_node([
            'id' => 'zenpress',
            'parent' => 'top-secondary',
            'title' => '<span style="margin-top: 2px;" class="ab-icon dashicons dashicons-trash" aria-hidden="true"></span><span class="ab-label">' . esc_html__('Clear all caches', 'zenpress') . '</span>',
            'href' => wp_nonce_url(add_query_arg('clear', 'all', $base_url), 'zenpress_clear_caches'),
            'meta' => [
                'title' => __('Clear all caches (page cache, static assets, object cache).', 'zenpress'),
            ],
        ]);

        if (ZenPress_Cache_Enabler::is_active()) {
            $wp_admin_bar->add_node([
                'id' => 'zenpress-clear-cache-enabler',
                'parent' => 'zenpress',
                'title' => __('Clear pages caches', 'zenpress'),
                'href' => wp_nonce_url(add_query_arg('clear', 'cache_enabler', $base_url), 'zenpress_clear_caches'),
                'meta' => [
                    'title' => __('Clear Cache Enabler page cache.', 'zenpress'),
                ],
            ]);
        }

        if (ZenPress_Autoptimize::is_active()) {
            $wp_admin_bar->add_node([
                'id' => 'zenpress-clear-autoptimize',
                'parent' => 'zenpress',
                'title' => __('Clear static assets caches (CSS/JS)', 'zenpress'),
                'href' => wp_nonce_url(add_query_arg('clear', 'autoptimize', $base_url), 'zenpress_clear_caches'),
                'meta' => [
                    'title' => __('Clear Autoptimize CSS/JS cache.', 'zenpress'),
                ],
            ]);
        }

        if (ZenPress_Sqlite_Object_Cache::is_active()) {
            $wp_admin_bar->add_node([
                'id' => 'zenpress-clear-sqlite-object-cache',
                'parent' => 'zenpress',
                'title' => __('Clear object cache', 'zenpress'),
                'href' => wp_nonce_url(add_query_arg('clear', 'sqlite_object_cache', $base_url), 'zenpress_clear_caches'),
                'meta' => [
                    'title' => __('Clear SQLite Object Cache.', 'zenpress'),
                ],
            ]);
        }
    }

    /**
     * AJAX 'clear' slug => integration class.
     *
     * @var array<string, string>
     */
    private static array $clear_slug_to_class = [
        'cache_enabler' => ZenPress_Cache_Enabler::class,
        'autoptimize' => ZenPress_Autoptimize::class,
        'sqlite_object_cache' => ZenPress_Sqlite_Object_Cache::class,
    ];

    /**
     * Verifies nonce/capability, clears caches (all or one integration), redirects or returns JSON.
     */
    public static function ajax_clear_caches(): void {
        if (!current_user_can('manage_options')) {
            wp_die(esc_html__('Forbidden', 'zenpress'), '', ['response' => 403]);
        }
        $nonce = isset($_REQUEST['_wpnonce']) ? sanitize_text_field(wp_unslash($_REQUEST['_wpnonce'])) : '';
        if (!wp_verify_nonce($nonce, 'zenpress_clear_caches')) {
            wp_die(esc_html__('Forbidden', 'zenpress'), '', ['response' => 403]);
        }

        $clear = isset($_REQUEST['clear']) ? sanitize_text_field(wp_unslash($_REQUEST['clear'])) : 'all';
        if ($clear === 'all' || $clear === '') {
            try {
                do_action('zenpress_caches_clear');
            } catch (\Throwable $e) {
                wp_die(esc_html__('Cache clear failed.', 'zenpress'), '', ['response' => 500]);
            }
            $message = __('Caches cleared.', 'zenpress');
        } elseif (isset(self::$clear_slug_to_class[$clear])) {
            $class = self::$clear_slug_to_class[$clear];
            try {
                if (method_exists($class, 'clear_cache')) {
                    $class::clear_cache();
                }
            } catch (\Throwable $e) {
                wp_die(esc_html__('Cache clear failed.', 'zenpress'), '', ['response' => 500]);
            }
            $message = __('Cache cleared.', 'zenpress');
        } else {
            wp_die(esc_html__('Invalid request.', 'zenpress'), '', ['response' => 400]);
        }

        $is_xhr = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 'XMLHttpRequest' === sanitize_text_field(wp_unslash($_SERVER['HTTP_X_REQUESTED_WITH']));
        if (!$is_xhr) {
            wp_safe_redirect(wp_get_referer() ?: admin_url());
            exit;
        }

        wp_send_json_success(['message' => $message]);
    }
}

ZenPress_Integrations::register();
