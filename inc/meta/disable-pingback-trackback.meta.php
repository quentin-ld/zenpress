<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable pingback and trackback', 'zenpress'),
    'description' => __('Removes the X-Pingback header, disables pingbacks and trackbacks on new posts, and prevents self-pingbacks (where WordPress pings its own site). This can help improve security and performance by preventing unnecessary requests and reducing the risk of spam and DDoS attacks.', 'zenpress'),
    'category'    => __('Security', 'zenpress'),
];
