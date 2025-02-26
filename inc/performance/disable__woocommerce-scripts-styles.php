<?php

/**
 * Disables WooCommerce scripts and styles on non-WooCommerce pages
 *
 * This function dequeues the WooCommerce scripts and styles on pages
 * where WooCommerce functionality is not required, such as the homepage,
 * blog posts, or other custom pages. This helps improve site performance
 * by preventing the unnecessary loading of WooCommerce assets.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) die();

add_action('wp_enqueue_scripts', 'zenpress_disable_woocommerce_scripts_styles', 11);
function zenpress_disable_woocommerce_scripts_styles()
{
	if (class_exists('woocommerce')) {

		// Disable WooCommerce scripts and styles on non-WooCommerce pages
		if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() && !is_product() && !is_product_category() && !is_shop()) {
			// Dequeue WooCommerce Styles
			wp_dequeue_style('woocommerce-general');
			wp_dequeue_style('woocommerce-layout');
			wp_dequeue_style('woocommerce-smallscreen');
			wp_dequeue_style('woocommerce_frontend_styles');
			wp_dequeue_style('woocommerce_fancybox_styles');
			wp_dequeue_style('woocommerce_chosen_styles');
			wp_dequeue_style('woocommerce_prettyPhoto_css');

			// Dequeue WooCommerce Scripts
			wp_dequeue_script('wc_price_slider');
			wp_dequeue_script('wc-single-product');
			wp_dequeue_script('wc-add-to-cart');
			wp_dequeue_script('wc-checkout');
			wp_dequeue_script('wc-add-to-cart-variation');
			wp_dequeue_script('wc-single-product');
			wp_dequeue_script('wc-cart');
			wp_dequeue_script('wc-chosen');
			wp_dequeue_script('woocommerce');
			wp_dequeue_script('prettyPhoto');
			wp_dequeue_script('prettyPhoto-init');
			wp_dequeue_script('jquery-blockui');
			wp_dequeue_script('jquery-placeholder');
			wp_dequeue_script('fancybox');
			wp_dequeue_script('jqueryui');
		}
	}
}
