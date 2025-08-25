<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Hide WordPress version from HTTP headers, scripts, and styles', 'zenpress'),
    'description' => __('Removes the WordPress version number from the HTML head (via the `wp_generator` meta tag), the `the_generator` filter, and from the URLs of scripts and styles. This helps improve security by preventing attackers from easily identifying the version of WordPress you\'re using, which could be targeted for known vulnerabilities.', 'zenpress'),
    'category'    => __('Security', 'zenpress'),
];
