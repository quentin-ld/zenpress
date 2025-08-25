<?php
/**
 * Disable unnecessary Stripe scripts on WooCommerce pages.
 *
 * Prevents loading of Stripe-related scripts on the product and cart pages
 * when the "Payment Request Button Support" (PRBS) is disabled.
 * Helps improve performance by avoiding unnecessary JavaScript loading.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

if (class_exists('WooCommerce')) {
    add_filter('wc_stripe_load_scripts_on_product_page_when_prbs_disabled', '__return_false');
    add_filter('wc_stripe_load_scripts_on_cart_page_when_prbs_disabled', '__return_false');
}
