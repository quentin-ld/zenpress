<?php
/**
 * Metadata for disable-pingback-trackback.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable pingbacks and trackbacks', 'zenpress' ),
	'description' => __( 'Removes the X-Pingback header from HTTP responses, disables pingbacks and trackbacks on new posts, and prevents self-pingbacks. Reduces spam and blocks a potential DDoS amplification vector.', 'zenpress' ),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'security', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
