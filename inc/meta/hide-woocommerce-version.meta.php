<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Hide WooCommerce version from HTTP headers, scripts, and styles', 'zenpress'),
    'description' => __('Removes the WooCommerce version number from the HTTP headers, and prevents the version from being exposed in the URLs of scripts and styles. This helps improve security by preventing attackers from easily identifying the version of WooCommerce you\'re using, which could be targeted for exploits.', 'zenpress'),
    'category'    => __('WooCommerce', 'zenpress'),
];
