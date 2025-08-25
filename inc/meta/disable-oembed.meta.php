<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable oEmbed', 'zenpress'),
    'description' => __('Removes all features related to oEmbed, including auto-discovery, embedding of external content, and the wp-embed script, to improve site performance by eliminating unnecessary API calls and scripts.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
