<?php
/**
 * Metadata for disable-application-passwords.php
 *
 * @since 2.0.3
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable application passwords', 'zenpress' ),
	'description' => __( 'Turns off application passwords for all users. Do not enable if your site relies on external applications or services that authenticate via the WordPress REST API or XML-RPC using application passwords.', 'zenpress' ),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'security', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array(),
);
