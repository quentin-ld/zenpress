<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable All RSS Feeds Except the Main Feed', 'zenpress'),
    'description' => __('Disables all RSS feeds in WordPress, including the main feed, RDF feed, RSS feed, RSS2 feed, Atom feed, and comment feeds. It also removes links to additional feeds from the <head> section of the site. The only feed that remains accessible is the main feed.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
