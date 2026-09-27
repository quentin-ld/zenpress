<?php
/**
 * Metadata for disable-rss.php
 *
 * @since 2.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Disable all feeds (RSS, Atom, comments)', 'zenpress' ),
	'description' => __( 'Prevents access to all default feeds — RDF, RSS, RSS2, Atom, and comments feed. Feed links are removed from the HTML head, and feed URL requests redirect to the homepage.', 'zenpress' ),
	'category'    => __( 'core', 'zenpress' ),
	'subcategory' => __( 'performance', 'zenpress' ),
	'weight'      => 0,
	'preset'      => array( 'corporate-website' ),
);
