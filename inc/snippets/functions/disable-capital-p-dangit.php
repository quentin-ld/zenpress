<?php

if (!defined('ABSPATH')) {
    exit;
}

$zenpress_filters = [
    'the_content' => 11,
    'the_title' => 11,
    'wp_title' => 11,
    'document_title' => 11,
    'comment_text' => 31,
    'widget_text_content' => 11,
];

foreach ($zenpress_filters as $zenpress_filter => $zenpress_priority) {
    remove_filter($zenpress_filter, 'capital_P_dangit', $zenpress_priority);
}