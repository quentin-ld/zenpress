<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Block user enumeration', 'zenpress'),
    'description' => __('Prevents the user enumeration that can be exploited by attackers to gather information about users on the WordPress site. It blocks both the default and permalink-based user enumeration URLs that reveal user IDs through author query strings, improving security.', 'zenpress'),
    'category'    => __('Security', 'zenpress'),
];
