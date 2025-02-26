<?php

/*
Snippet Name: Disable WP Generator
Version: 1.0.0
Tag(s): Performance
Description:
*/
if (!defined('ABSPATH')) die();

remove_action('wp_head', 'wp_generator');
add_filter('the_generator', function () {
	return '';
});
