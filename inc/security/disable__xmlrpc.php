<?php

/*
Snippet Name: Disable XML-RPC
Version: 1.0.0
Tag(s): Security
Description: 
*/

if (!defined('ABSPATH')) die();

add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );