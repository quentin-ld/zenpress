<?php

/*
Snippet Name: Block user-enumeration
Version: 1.0.0
Tag(s): Security
Description:
*/

if (!defined('ABSPATH')) die();

if (! is_admin()) {
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING']))
		die();
	add_filter('redirect_canonical', function ($redirect, $request) {
		// permalink URL format
		if (preg_match('/\?author=([0-9]*)(\/*)/i', $request))
			die();
		else
			return $redirect;
	}, 10, 2);
}
