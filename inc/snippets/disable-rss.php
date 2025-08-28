<?php

if (!defined('ABSPATH')) {
    exit;
}

// Disable all feeds.
add_action('do_feed', 'zenpress_disable_all_feeds', 1);
add_action('do_feed_rdf', 'zenpress_disable_all_feeds', 1);
add_action('do_feed_rss', 'zenpress_disable_all_feeds', 1);
add_action('do_feed_rss2', 'zenpress_disable_all_feeds', 1);
add_action('do_feed_atom', 'zenpress_disable_all_feeds', 1);
add_action('do_feed_rss2_comments', 'zenpress_disable_all_feeds', 1);
add_action('do_feed_atom_comments', 'zenpress_disable_all_feeds', 1);

// Remove feed links from head.
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

// Redirect all feed requests to homepage.
function zenpress_disable_all_feeds() {
    wp_safe_redirect(home_url(), 301);
    exit;
}
