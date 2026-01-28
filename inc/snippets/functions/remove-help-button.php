<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_head', static function (): void {
    $screen = get_current_screen();
    if ($screen instanceof WP_Screen) {
        $screen->remove_help_tabs();
    }
});
