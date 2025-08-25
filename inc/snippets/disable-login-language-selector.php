<?php

/**
* Title :  Disable the Login Language Selector
* Category : User interface
* Description : Disable the language selector on the WordPress login page
*
* @return void
* @since 1.0.9
*/

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable the Login Language Selector', 'zenpress'),
    'description' => __(' Disable the language selector on the WordPress login page', 'zenpress'),
    'category' => __('User interface', 'zenpress')
];

add_filter('login_display_language_dropdown', '__return_false');
