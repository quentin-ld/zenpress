<?php

if (!defined('ABSPATH')) {
    exit;
}

$filters = [
    'the_content' => 11,
    'the_title' => 11,
    'wp_title' => 11,
    'document_title' => 11,
    'comment_text' => 31,
    'widget_text_content' => 11,
];

foreach ($filters as $filter => $priority) {
    remove_filter($filter, 'capital_P_dangit', $priority);
}