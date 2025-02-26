<?php

/**
 * Disables WordPress shortlink generation
 *
 * This function removes the shortlink functionality in WordPress by
 * disabling both the header and template redirect actions that output
 * the shortlink. This can improve performance slightly by reducing
 * unnecessary HTTP headers and meta tags.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) die();

remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('template_redirect', 'wp_shortlink_header', 11, 0);
