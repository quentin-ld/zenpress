<?php
/**
 * Metadata for block-user-enumeration.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Block user enumeration', 'zenpress' ),
	'description' => __(
		'Blocks user enumeration via author archive URLs and query strings (/?author=1). Prevents attackers from discovering usernames, a common step in targeted brute-force attacks.',
		'zenpress'
	),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'security', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
