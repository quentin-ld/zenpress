<?php
/**
 * Disable author archives and redirect them to 404.
 *
 * This snippet disables author archive pages by forcing them
 * to return a 404 error. It prevents attackers from exploiting
 * author archive pages to gather information about users.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

// Override the canonical redirect to handle author archives.
remove_filter('template_redirect', 'redirect_canonical');

add_action('template_redirect', function () {
    if (is_author()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
    } else {
        redirect_canonical();
    }
});
