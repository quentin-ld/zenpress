<?php
/**
 * Metadata for disable-rss.php
 *
 * @since 2.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable all WordPress feeds (RDF, RSS, RSS2, Atom, and comments)', 'zenpress'),
    'description' => __('Prevents access to all default feeds (RDF, RSS, RSS2, Atom, and comments). Also removes feed links from head, and redirects feed requests to the homepage. Reduces unnecessary requests and improves SEO consistency.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website'],
];
