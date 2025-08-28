<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_default_scripts', function (&$scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if (!empty($script->deps)) {
            $script->deps = array_diff($script->deps, ['jquery-migrate']);
        }
    }
});
