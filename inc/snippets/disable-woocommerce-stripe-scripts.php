<?php

if (!defined('ABSPATH')) {
    exit;
}

if (class_exists('WooCommerce')) {
    add_filter('wc_stripe_load_scripts_on_product_page_when_prbs_disabled', '__return_false');
    add_filter('wc_stripe_load_scripts_on_cart_page_when_prbs_disabled', '__return_false');
}
