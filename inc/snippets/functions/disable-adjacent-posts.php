<?php
/**
 * Snippet: disable adjacent posts.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'wp_head', 'adjacent_posts_rel_link', 10 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
