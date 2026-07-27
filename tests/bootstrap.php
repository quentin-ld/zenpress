<?php
/**
 * PHPUnit bootstrap file for ZenPress.
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    define('ABSPATH', true);
}

// Load constants from single source (no WordPress functions needed).
require_once dirname(__DIR__) . '/inc/core/constants.php';

// Load the plugin's core files for testing.
require_once dirname(__DIR__) . '/inc/core/metadata.php';
require_once dirname(__DIR__) . '/inc/core/sanitize.php';