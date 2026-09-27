<?php
/**
 * Metadata for disable-xmlrpc-rsdlink.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable XML-RPC and RSD link', 'zenpress' ),
	'description' => __( 'Disables XML-RPC and removes the RSD link from the HTML head. XML-RPC is often targeted by brute-force attacks and can be used in DDoS amplification attacks.', 'zenpress' ),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'security', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
