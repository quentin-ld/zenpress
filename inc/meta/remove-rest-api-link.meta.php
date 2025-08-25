<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Remove REST API Links from the <head>', 'zenpress'),
    'description' => __('Removes the links to the REST API from the <head> section of the site. This is useful for improving performance and reducing unnecessary output in the HTML source, while still keeping the REST API functionality available for use.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
