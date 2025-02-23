<?php

/*
Snippet Name: Disable Shortlink
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

remove_action ( 'wp_head', 'wp_shortlink_wp_head' );
remove_action ( 'template_redirect', 'wp_shortlink_header', 11, 0 );
