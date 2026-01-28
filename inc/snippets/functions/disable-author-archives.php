<?php

if (!defined('ABSPATH')) {
    exit;
}

// Override the canonical redirect to handle author archives.
remove_filter('template_redirect', 'redirect_canonical');

add_action('template_redirect', static function (): void {
    if (is_author()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
    } else {
        redirect_canonical();
    }
});
