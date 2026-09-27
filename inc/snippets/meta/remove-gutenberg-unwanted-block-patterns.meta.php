<?php
/**
 * Metadata for remove-gutenberg-unwanted-block-patterns.php
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Remove WordPress default block patterns', 'zenpress' ),
	'description' => __( 'Stops WordPress from loading remote block patterns and removes the built-in core block patterns from the editor. Reduces the number of patterns displayed in the block inserter.', 'zenpress' ),
	'category'    => __( 'gutenberg', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website', 'blog', 'ecommerce' ),
);
