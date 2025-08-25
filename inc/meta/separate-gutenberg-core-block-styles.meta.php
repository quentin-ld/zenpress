<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Enables separate loading of core block styles', 'zenpress'),
    'description' => __('Enables the separate loading of block styles for the core blocks in WordPress. By default, WordPress bundles block styles together, but this snippet forces them to be loaded separately, which can improve performance by loading only the necessary styles for the blocks being used.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
