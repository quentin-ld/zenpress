<?php
/**
 * Metadata for "Disable all WordPress feeds".
 *
 * @since 2.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable all WordPress feeds', 'zenpress'),
    'description' => __('Disables all WordPress feeds (RDF, RSS, RSS2, Atom, and comment feeds), removes feed links from <head>, and redirects any feed request to the homepage.', 'zenpress'),
    'category' => __('Performance', 'zenpress'),
];
