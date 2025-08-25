<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable unwanted default block patterns in gutenberg editor', 'zenpress'),
    'description' => __('Disable the loading of remote block patterns and removes the core block patterns that WordPress includes by default. This can improve performance by preventing unnecessary block patterns from being loaded in the editor.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
