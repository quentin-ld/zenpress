<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable author archives and redirects to 404', 'zenpress'),
    'description' => __('Disable author archive pages by redirecting them to a 404 page. This can help improve security by preventing attackers from trying to exploit author archive pages to gather information about authors and their posts.', 'zenpress'),
    'category'    => __('Security', 'zenpress'),
];
