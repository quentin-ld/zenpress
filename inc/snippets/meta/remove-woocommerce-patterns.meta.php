<?php
/**
 * Metadata for remove-woocommerce-patterns.php
 *
 * @since 1.0.4
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Remove WooCommerce default block patterns', 'zenpress' ),
	'description' => __( 'Removes all WooCommerce block patterns from the editor. Reduces the number of patterns displayed in the block inserter.', 'zenpress' ),
	'category'    => __( 'woocommerce', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'ecommerce' ),
);
