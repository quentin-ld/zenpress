<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sanitize the list of active snippets.
 *
 * @param mixed $value Option value.
 * @return array<string> Sanitized base names.
 */
function zenpress_sanitize_snippets_option(mixed $value): array {
    return array_values(
        array_filter(
            array_map('sanitize_file_name', (array) $value)
        )
    );
}
