<?php
/**
 * Metadata for separate-gutenberg-core-block-styles.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Load block styles separately', 'zenpress' ),
	'description' => __( 'Forces WordPress to load core block styles as separate files instead of inlining them. Each block loads only the stylesheet it requires, reducing the CSS payload on pages that use few blocks.', 'zenpress' ),
	'category'    => __( 'gutenberg', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
