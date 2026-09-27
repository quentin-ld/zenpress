<?php
/**
 * Metadata for disable-autosave.php
 *
 * @since 2.2.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable autosave (classic editor)', 'zenpress' ),
	'description' => __(
		'Disables autosave in the classic editor only. The block editor uses its own autosave mechanism and is not affected.',
		'zenpress'
	),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array(),
);
