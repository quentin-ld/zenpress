<?php

/**
 * Title :  Disable author archives and redirects to 404
 * Category : Security
 * Description : Disable author archive pages by redirecting them to a 404 page. This can help improve security by preventing attackers from trying to exploit author archive pages to gather information about authors and their posts.
 *
 * @return void
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable author archives and redirects to 404', 'zenpress'),
    'description' => __('Disable author archive pages by redirecting them to a 404 page. This can help improve security by preventing attackers from trying to exploit author archive pages to gather information about authors and their posts.', 'zenpress'),
    'category' => __('Security', 'zenpress')
];

remove_filter('template_redirect', 'redirect_canonical');
add_action('template_redirect', function () {
    if (is_author()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
    } else {
        redirect_canonical();
    }
});
