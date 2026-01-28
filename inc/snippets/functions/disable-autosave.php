<?php

if (!defined('ABSPATH')) {
    exit;
}

// Classic editor: remove the autosave script.
add_action('admin_enqueue_scripts', static function (): void {
    wp_deregister_script('autosave');
}, 20);
