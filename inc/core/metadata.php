<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Extract snippet metadata from its meta file.
 *
 * @param string $snippet_name Snippet base name (without extension).
 * @return array<string,mixed> Sanitized metadata (title, description, category, weight, preset).
 */
function zenpress_extract_snippet_metadata(string $snippet_name): array {
    $defaults = [
        'title' => '',
        'description' => '',
        'category' => '',
        'weight' => 0,
        'preset' => []
    ];

    $file = ZENPRESS_PLUGIN_DIR . 'inc/snippets/meta/' . sanitize_file_name($snippet_name) . '.meta.php';
    $data = is_file($file) ? include $file : [];
    $metadata = array_merge($defaults, is_array($data) ? $data : []);

    return [
        'title' => sanitize_text_field($metadata['title']),
        'description' => sanitize_text_field($metadata['description']),
        'category' => sanitize_text_field($metadata['category']),
        'weight' => (int) $metadata['weight'],
        'preset' => array_map('sanitize_text_field', (array) $metadata['preset'])
    ];
}
