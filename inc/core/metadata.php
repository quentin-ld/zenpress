<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Loads and sanitizes snippet metadata from inc/snippets/meta/{$snippet_name}.meta.php.
 *
 * @param string $snippet_name Snippet base name (no extension).
 * @return array<string, mixed> title, description, category, subcategory, weight, preset.
 */
function zenpress_extract_snippet_metadata(string $snippet_name): array {
    $defaults = [
        'title' => '',
        'description' => '',
        'category' => '',
        'subcategory' => '',
        'weight' => 0,
        'preset' => [],
    ];

    $file = ZENPRESS_PLUGIN_DIR . 'inc/snippets/meta/' . sanitize_file_name($snippet_name) . '.meta.php';
    $data = [];
    if (is_file($file)) {
        try {
            $data = include $file;
        } catch (\Throwable $e) {
            $data = [];
        }
    }
    $metadata = array_merge($defaults, is_array($data) ? $data : []);

    return [
        'title' => sanitize_text_field($metadata['title']),
        'description' => sanitize_text_field($metadata['description']),
        'category' => sanitize_text_field($metadata['category']),
        'subcategory' => sanitize_text_field($metadata['subcategory']),
        'weight' => (int) $metadata['weight'],
        'preset' => array_map('sanitize_text_field', (array) $metadata['preset']),
    ];
}
