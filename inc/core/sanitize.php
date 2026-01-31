<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sanitizes zenpress_active_snippets option to an array of file-safe base names.
 *
 * @param mixed $value Raw option value.
 * @return array<string>
 */
function zenpress_sanitize_snippets_option(mixed $value): array {
    return array_values(
        array_filter(
            array_map('sanitize_file_name', (array) $value)
        )
    );
}
