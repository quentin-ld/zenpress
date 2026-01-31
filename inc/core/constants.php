<?php
/**
 * Plugin path constants.
 *
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('ZENPRESS_PLUGIN_FILE')) {
    $zenpress_plugin_file = dirname(__DIR__, 2) . '/zenpress.php';
    define('ZENPRESS_PLUGIN_FILE', is_file($zenpress_plugin_file) ? $zenpress_plugin_file : __FILE__);
}

if (!defined('ZENPRESS_PLUGIN_DIR')) {
    define('ZENPRESS_PLUGIN_DIR', plugin_dir_path(ZENPRESS_PLUGIN_FILE));
}
