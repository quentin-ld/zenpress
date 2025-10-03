<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Load all active snippets.
 *
 * @param string $folder Relative folder path for snippets.
 * @return array<string> Loaded snippet base names.
 */
function zenpress_load_snippets(string $folder = 'inc/snippets/functions/'): array {
    $path = ZENPRESS_PLUGIN_DIR . rtrim($folder, '/') . '/';

    if (!is_dir($path)) {
        return [];
    }

    $snippets = (array) get_option('zenpress_active_snippets', []);
    $loaded = [];
    foreach ($snippets as $name) {
        $name = sanitize_file_name($name);
        $file = $path . $name . '.php';
        $constant = 'ZENPRESS_' . strtoupper(str_replace(['-', '_'], '_', $name));
        if (is_file($file) && (!defined($constant) || constant($constant) !== false)) {
            include_once $file;
            $loaded[] = $name;
        }
    }

    return $loaded;
}

/**************************************
 *  BOOT ZENPRESS PLUGIN
 **************************************/
add_action('init', function() : void {
    zenpress_load_snippets();
});
