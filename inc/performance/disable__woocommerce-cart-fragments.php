<?php

/*
Snippet Name: Disable WooCommerce Cart Fragments
Version: 1.0.0
Tag(s): Performance
Description: 
*/

if (!defined('ABSPATH')) die();

if ( class_exists( 'woocommerce' ) ) { 
    // Disable WooCommerce Cart Fragments
    wp_dequeue_script('wc-cart-fragments');
}
