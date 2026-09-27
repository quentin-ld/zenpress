<?php
/**
 * PHPUnit bootstrap for all suites.
 *
 * - **Integration** (`ZENPRESS_INTEGRATION_TESTS=1`, set by
 *   `.config/phpunit.integration.xml.dist`): loads `wordpress-tests-lib` and
 *   real WordPress, then the plugin. WordPress functions behave as they do in
 *   production, which is the point: a hand-written stub for `sanitize_file_name`
 *   would make the suite assert the stub rather than WordPress.
 * - **Unit** (otherwise): no WordPress, no database.
 *
 * @package zenpress
 */

declare(strict_types=1);

$zenpress_integration = getenv('ZENPRESS_INTEGRATION_TESTS');
if ($zenpress_integration === '1' || $zenpress_integration === 'true') {
    if ('cli' !== \PHP_SAPI && 'phpdbg' !== \PHP_SAPI) {
        exit;
    }

    $zenpress_plugin_root = dirname(__DIR__);

    require_once $zenpress_plugin_root . '/vendor/autoload.php';
    require_once $zenpress_plugin_root . '/vendor/yoast/phpunit-polyfills/phpunitpolyfills-autoload.php';

    $zenpress_wp_tests_dir = getenv('WP_TESTS_DIR');
    if (!is_string($zenpress_wp_tests_dir) || $zenpress_wp_tests_dir === '') {
        $zenpress_wp_tests_dir = rtrim(sys_get_temp_dir(), '/\\') . '/wordpress-tests-lib';
    }

    if (!is_file($zenpress_wp_tests_dir . '/includes/functions.php')) {
        die(
            "WordPress test library not found.\n"
            . "Install it once, from the plugin directory:\n"
            . "  bin/harness setup\n"
        );
    }

    require_once $zenpress_wp_tests_dir . '/includes/functions.php';

    /**
     * Load the plugin under test (same pattern as WP-CLI scaffold).
     *
     * @return void
     */
    function zenpress_tests_load_plugin(): void {
        require dirname(__DIR__) . '/zenpress.php';
    }

    tests_add_filter('muplugins_loaded', 'zenpress_tests_load_plugin');

    require $zenpress_wp_tests_dir . '/includes/bootstrap.php';

    return;
}

// --- Unit suite (no WordPress) ---

require_once dirname(__DIR__) . '/vendor/autoload.php';

if (!defined('ABSPATH')) {
    define('ABSPATH', true);
}

// Load constants from single source (no WordPress functions needed).
require_once dirname(__DIR__) . '/inc/core/constants.php';

// Load the plugin's core files for testing.
require_once dirname(__DIR__) . '/inc/core/metadata.php';
require_once dirname(__DIR__) . '/inc/core/sanitize.php';
