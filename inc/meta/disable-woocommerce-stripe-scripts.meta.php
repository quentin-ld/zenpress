<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable unnecessary Stripe scripts on WooCommerce pages', 'zenpress'),
    'description' => __('Disable the loading of Stripe-related scripts on the product and cart pages when the "Payment Request Button Support" (PRBS) is disabled, helping to improve performance by preventing unnecessary JavaScript from loading on pages where it\'s not needed.', 'zenpress'),
    'category'    => __('WooCommerce', 'zenpress'),
];
