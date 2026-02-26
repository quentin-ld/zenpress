<?php

/**
 * Metadata for disable-rest-api.php
 *
 * @since 2.0.4
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Limit REST API to logged-in users', 'zenpress'),
    'description' => __(
        'Only logged-in users can use the REST API. Visitors get an error. Advanced: filters let you allow specific tools; use with care.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
