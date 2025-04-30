<?php

/**
 * Disable All RSS Feeds Except the Main Feed
 *
 * This function disables all RSS feeds in WordPress, including the main feed,
 * RDF feed, RSS feed, RSS2 feed, Atom feed, and comment feeds. It also removes
 * links to additional feeds from the <head> section of the site. The only feed
 * that remains accessible is the main feed.
 *
 * @return void
 *
 * @since 1.0.4
 */

if (!defined('ABSPATH')) {
    die();
}

add_action('do_feed', 'zenpress_disable_feed', 1);
add_action('do_feed_rdf', 'zenpress_disable_feed', 1);
add_action('do_feed_rss', 'zenpress_disable_feed', 1);
add_action('do_feed_rss2', 'zenpress_disable_feed', 1);
add_action('do_feed_atom', 'zenpress_disable_feed', 1);
add_action('do_feed_rss2_comments', 'zenpress_disable_feed', 1);
add_action('do_feed_atom_comments', 'zenpress_disable_feed', 1);

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

add_action('wp_head', 'zenpress_add_main_feed_link');

function zenpress_disable_feed() {
    wp_die(esc_html(__('No feed available', 'zenpress')));
}

function zenpress_add_main_feed_link() {
    $blog_name = get_bloginfo('name');
    $feed_title = esc_html($blog_name . ' » Feed');
    echo '<link rel="alternate" type="application/rss+xml" title="' . esc_html($feed_title) . '" href="' . esc_url(get_feed_link()) . '" />';
}

