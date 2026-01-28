<?php

if (!defined('ABSPATH')) {
    exit;
}

// Disable REST API link in HTTP headers
// Link: <https://example.com/wp-json/>; rel="https://api.w.org/"
remove_action('template_redirect', 'rest_output_link_header', 11);

//Disable REST API links in HTML <head>
//<link rel='https://api.w.org/' href='https://example.com/wp-json/' />
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');

/**
 * Check whether to allow unauthenticated REST API access (bypass).
 *
 * Filters zenpress_disable_wp_rest_api_post_var and zenpress_disable_wp_rest_api_server_var
 * let site owners allow specific POST keys or REQUEST_URI values for webhooks/third-party
 * integrations. Security note: only use values that are secret or not guessable (e.g. a
 * random token in POST, or a unique path). Using predictable values can re-enable public
 * REST API access and weaken the protection provided by the "Disable REST API" snippet.
 */
$zenpress_disable_wp_rest_api_allow_access = static function (): bool {
    $post_var = apply_filters('zenpress_disable_wp_rest_api_post_var', false);
    $server_var = apply_filters('zenpress_disable_wp_rest_api_server_var', false);

    if (!empty($post_var)) {
        $post_vars = is_array($post_var) ? $post_var : [$post_var];
        foreach ($post_vars as $var) {
            // phpcs:ignore WordPress.Security.NonceVerification.Missing -- Intentional: Allows bypass via specific POST vars for webhooks/third-party integrations
            if (!empty($_POST[$var] ?? null)) {
                return true;
            }
        }
    }

    if (!empty($server_var)) {
        $server_vars = is_array($server_var) ? $server_var : [$server_var];
        $request_uri = $_SERVER['REQUEST_URI'] ?? '';
        foreach ($server_vars as $var) {
            if ($request_uri === $var) {
                return true;
            }
        }
    }

    return false;
};

// Disable REST API
if (version_compare(get_bloginfo('version'), '4.7', '>=')) {
    add_filter('rest_authentication_errors', static function (WP_Error|bool|null $access) use ($zenpress_disable_wp_rest_api_allow_access): WP_Error|bool|null {
        if (!is_user_logged_in() && !$zenpress_disable_wp_rest_api_allow_access()) {
            $message = apply_filters('zenpress_disable_wp_rest_api_error', __('REST API restricted to authenticated users.', 'zenpress'));

            return new WP_Error('rest_login_required', $message, ['status' => rest_authorization_required_code()]);
        }

        return $access;
    });
} else {
    // REST API 1.x
    add_filter('json_enabled', '__return_false');
    add_filter('json_jsonp_enabled', '__return_false');

    // REST API 2.x
    add_filter('rest_enabled', '__return_false');
    add_filter('rest_jsonp_enabled', '__return_false');
}
