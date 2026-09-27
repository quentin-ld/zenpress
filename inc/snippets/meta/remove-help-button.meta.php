<?php
/**
 * Metadata for remove-help-button.php
 *
 * @since 2.2.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Remove Help tab', 'zenpress' ),
	'description' => __(
		'Hides the Help tab on all admin screens. The tab is removed from the screen options area at the top right of each admin page.',
		'zenpress'
	),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'user-interface', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array(),
);
