<?php

/*
Snippet Name: Hide WooCommerce version
Version: 1.0.0
Tag(s): Security
Description:
*/

if (!defined('ABSPATH')) die();

if (class_exists('woocommerce')) {

	// Hide WooCommerce version
	add_filter('wp_headers', 'ripperdoc_remove_woocommerce_version');
	function ripperdoc_remove_woocommerce_version($headers)
	{
		if (isset($headers['X-WooCommerce-Version'])) {
			unset($headers['X-WooCommerce-Version']);
		}
		return $headers;
	}

	// Removes WooCommerce version from scripts and styles
	add_filter('style_loader_src', 'ripperdoc_remove_woocommerce_version_scripts_styles', 10, 2);
	add_filter('script_loader_src', 'ripperdoc_remove_woocommerce_version_scripts_styles', 10, 2);
	function ripperdoc_remove_woocommerce_version_scripts_styles($src)
	{
		if (strpos($src, 'ver=') && strpos($src, 'woocommerce')) {
			$src = remove_query_arg('ver', $src);
		}
		return $src;
	}
}
