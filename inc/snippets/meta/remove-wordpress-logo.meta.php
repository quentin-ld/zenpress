<?php
/**
 * Metadata for remove-wordpress-logo.php
 *
 * @since 2.2.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Remove WordPress logo from admin bar', 'zenpress' ),
	'description' => __( 'Removes the WordPress logo and its associated menu from the admin bar.', 'zenpress' ),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'user-interface', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array(),
);
