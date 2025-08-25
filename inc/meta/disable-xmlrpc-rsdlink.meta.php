<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable XML-RPC and removes the RSD (Really Simple Discovery) link', 'zenpress'),
    'description' => __('Disable XML-RPC functionality, which is commonly targeted for attacks such as brute force login attempts or DDoS. It also removes the RSD link from the HTML head, which can provide unnecessary exposure of your WordPress setup to external services.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
