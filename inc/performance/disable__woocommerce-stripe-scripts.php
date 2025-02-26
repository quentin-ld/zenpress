<?php

/**
 * Disables unnecessary Stripe scripts on WooCommerce pages
 *
 * This function disables the loading of Stripe-related scripts on the product
 * and cart pages when the "Payment Request Button Support" (PRBS) is disabled,
 * helping to improve performance by preventing unnecessary JavaScript from
 * loading on pages where it's not needed.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) die();

if (class_exists('woocommerce')) {
	add_filter('wc_stripe_load_scripts_on_product_page_when_prbs_disabled', '__return_false');
	add_filter('wc_stripe_load_scripts_on_cart_page_when_prbs_disabled', '__return_false');
}
