<?php

/**
 * Disable jQuery Migrate on the frontend
 *
 * This function removes jQuery Migrate script from loading on the frontend
 * of the website to improve performance while keeping it enabled in the admin area.
 *
 * @param WP_Scripts $scripts WP_Scripts object containing registered scripts
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

add_action('wp_default_scripts', 'zenpress_disable_jquery_migrate');
function zenpress_disable_jquery_migrate(&$scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) {
            $script->deps = array_diff($script->deps, ['jquery-migrate']);
        }
    }
}
