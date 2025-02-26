<?php

/*
Snippet Name: Disable jQuery Migrate
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

add_action('wp_default_scripts', 'ripperdoc_disable_jquery_migrate');
function ripperdoc_disable_jquery_migrate(&$scripts)
{
	if (!is_admin() && isset($scripts->registered['jquery'])) {
		$script = $scripts->registered['jquery'];

		if ($script->deps) {
			$script->deps = array_diff($script->deps, ['jquery-migrate']);
		}
	}
}
