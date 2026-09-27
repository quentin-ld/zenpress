<?php
/**
 * Metadata for disable-woocommerce-scripts-styles.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable WooCommerce scripts and styles on non-shop pages', 'zenpress' ),
	'description' => __( 'Dequeues WooCommerce styles and scripts on pages where WooCommerce is not active, such as the homepage, blog posts, and custom pages. WooCommerce pages are not affected.', 'zenpress' ),
	'category'    => __( 'woocommerce', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'ecommerce' ),
);
