<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Protect the wp-login form from brute force attacks', 'zenpress'),
    'description' => __('Adds a layer of protection to the WordPress login form by: - Removing detailed login error messages to prevent attackers from knowing if the username or password is incorrect. - Limiting login attempts per IP address and blocking further attempts after a certain number of failed logins, for a specified duration (e.g., 5 minutes). After this time, the IP address is allowed to attempt logging in again.', 'zenpress'),
    'category'    => __('Security', 'zenpress'),
];
