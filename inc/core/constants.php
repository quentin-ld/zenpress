<?php
/**
 * ZenPress constants
 * @package zenpress
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('ZENPRESS_PLUGIN_FILE')) {
    define(
        'ZENPRESS_PLUGIN_FILE',
        __FILE__ === realpath(__FILE__)
        ? __FILE__ // fallback
        : dirname(__DIR__, 1) . '/zenpress.php'
    );
}

if (!defined('ZENPRESS_PLUGIN_DIR')) {
    define('ZENPRESS_PLUGIN_DIR', plugin_dir_path(ZENPRESS_PLUGIN_FILE));
}
