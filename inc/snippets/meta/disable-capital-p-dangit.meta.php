<?php
/**
 * Metadata for disable-capital-p-dangit.php
 *
 * @since 2.2.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable "WordPress" spelling correction', 'zenpress' ),
	'description' => __(
		'Stops the capitalization filter that corrects "Wordpress" to "WordPress" in titles and content. The filter runs on every page load; disabling it removes that processing step.',
		'zenpress'
	),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
