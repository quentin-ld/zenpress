<?php

/**
* Title : Disable the Windows Live Writer (WLW) manifest link
* Category : Performance
* Description : Removes the WLW manifest link from the `<head>` section of WordPress pages. The WLW manifest is used by the Windows Live Writer application to connect to WordPress, and removing it can help reduce unnecessary metadata in the HTML head.
*
* @return void
* @since 1.0.0
*/

if (!defined('ABSPATH')) {
    die();
}

remove_action('wp_head', 'wlwmanifest_link');
