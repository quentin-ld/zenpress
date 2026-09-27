<?php
/**
 * Metadata for disable-jquery-migrate.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable jQuery Migrate script', 'zenpress' ),
	'description' => __(
		'Disables the jQuery Migrate script on the front end while keeping it loaded in the admin area. Reduces the JavaScript payload for site visitors.',
		'zenpress'
	),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
