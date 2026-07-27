<?php
/**
 * Plugin constants.
 *
 * Single source of truth for all ZenPress constants.
 * Must be loaded before any other plugin file.
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ZENPRESS_PLUGIN_FILE', dirname(__DIR__, 2) . '/zenpress.php');
define('ZENPRESS_PLUGIN_DIR', dirname(__DIR__, 2) . '/');

/** Plugin version (must match Version header in zenpress.php). */
define('ZENPRESS_VERSION', '2.2.6');
