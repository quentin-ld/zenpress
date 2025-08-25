<?php
/**
 * Disable jQuery Migrate on the frontend.
 *
 * Removes jQuery Migrate script from loading on the frontend
 * to improve performance, while keeping it enabled in the admin area.
 *
 * @since 1.0.0
 * @param WP_Scripts $scripts WP_Scripts object containing registered scripts.
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_action('wp_default_scripts', function (&$scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if (!empty($script->deps)) {
            $script->deps = array_diff($script->deps, ['jquery-migrate']);
        }
    }
});
