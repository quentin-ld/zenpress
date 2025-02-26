<?php

/*
Snippet Name: Disable unnecessary Stripe scripts
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

if (class_exists('woocommerce')) {

	// Disable unnecessary Stripe scripts
	add_filter('wc_stripe_load_scripts_on_product_page_when_prbs_disabled', '__return_false');
	add_filter('wc_stripe_load_scripts_on_cart_page_when_prbs_disabled', '__return_false');
}
