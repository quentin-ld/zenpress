<?php

/*
Snippet Name: Hide WordPress version
Version: 1.0.0
Tag(s): Security
Description: 
*/

if (!defined('ABSPATH')) die();

// Hide WordPress version
add_filter('the_generator', 'ripperdoc_remove_wordpress_version');
function ripperdoc_remove_wordpress_version() {
    return '';
}

// Remove WordPress version from scripts and styles
add_filter( 'style_loader_src', 'ripperdoc_remove_version_from_style_js');
add_filter( 'script_loader_src', 'ripperdoc_remove_version_from_style_js');
function ripperdoc_remove_version_from_style_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) ){
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}