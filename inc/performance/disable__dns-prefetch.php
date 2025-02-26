<?php

/*
Snippet Name: Disable DNS Prefetch
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

remove_action('wp_head', 'wp_resource_hints', 2);
