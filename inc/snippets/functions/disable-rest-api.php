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

// Disable REST API
if (version_compare(get_bloginfo('version'), '4.7', '>=')) {
    add_filter('rest_authentication_errors', 'zenpress_disable_wp_rest_api');
} else {
    zenpress_disable_wp_rest_api_legacy();
}

function zenpress_disable_wp_rest_api($access) {
    if (!is_user_logged_in() && !zenpress_disable_wp_rest_api_allow_access()) {
        $message = apply_filters('zenpress_disable_wp_rest_api_error', __('REST API restricted to authenticated users.', 'zenpress'));

        return new WP_Error('rest_login_required', $message, ['status' => rest_authorization_required_code()]);
    }

    return $access;
}

function zenpress_disable_wp_rest_api_allow_access() {
    $post_var = apply_filters('zenpress_disable_wp_rest_api_post_var', false);
    $server_var = apply_filters('zenpress_disable_wp_rest_api_server_var', false);

    if (!empty($post_var)) {
        if (is_array($post_var)) {
            foreach($post_var as $var) {
                // phpcs:ignore WordPress.Security.NonceVerification.Missing -- Intentional: Allows bypass via specific POST vars for webhooks/third-party integrations
                if (isset($_POST[$var]) && !empty($_POST[$var])) {
                    return true;
                }
            }
        } else {
            // phpcs:ignore WordPress.Security.NonceVerification.Missing -- Intentional: Allows bypass via specific POST vars for webhooks/third-party integrations
            if (isset($_POST[$post_var]) && !empty($_POST[$post_var])) {
                return true;
            }
        }
    }

    if (!empty($server_var)) {
        if (is_array($server_var)) {
            foreach($server_var as $var) {
                if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] === $var) {
                    return true;
                }
            }
        } else {
            if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] === $server_var) {
                return true;
            }
        }
    }

    return false;
}

function zenpress_disable_wp_rest_api_legacy() {
    // REST API 1.x
    add_filter('json_enabled', '__return_false');
    add_filter('json_jsonp_enabled', '__return_false');

    // REST API 2.x
    add_filter('rest_enabled', '__return_false');
    add_filter('rest_jsonp_enabled', '__return_false');
}