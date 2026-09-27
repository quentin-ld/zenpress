<?php
/**
 * Metadata for clean-dashboard-items.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Clean up the Dashboard', 'zenpress' ),
	'description' => __(
		'Removes default widgets from the Dashboard screen: Quick Draft, WordPress News, Site Health, and the Welcome Panel. Also removes widgets added by popular plugins.',
		'zenpress'
	),
	'category'    => __( 'ads-blocker', 'zenpress' ),
	'subcategory' => __( 'user-interface', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
