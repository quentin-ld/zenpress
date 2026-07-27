<?php
/**
 * PHPUnit bootstrap file for ZenPress.
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    define('ABSPATH', true);
}

// Define required constants for tests.
define('ZENPRESS_VERSION', '2.2.5');
define('ZENPRESS_PLUGIN_FILE', dirname(__DIR__) . '/zenpress.php');
define('ZENPRESS_PLUGIN_DIR', dirname(__DIR__) . '/');

// Load the plugin's core files for testing.
require_once dirname(__DIR__) . '/inc/core/metadata.php';
require_once dirname(__DIR__) . '/inc/core/sanitize.php';