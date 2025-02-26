<?php

/*
Snippet Name: Disable WooCommerce Widgets
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

if (class_exists('woocommerce')) {

	add_action('widgets_init', 'ripperdoc_disable_woocommerce_widgets', 99);
	function ripperdoc_disable_woocommerce_widgets()
	{
		unregister_widget('WC_Widget_Products');
		unregister_widget('WC_Widget_Product_Categories');
		unregister_widget('WC_Widget_Product_Tag_Cloud');
		unregister_widget('WC_Widget_Cart');
		unregister_widget('WC_Widget_Layered_Nav');
		unregister_widget('WC_Widget_Layered_Nav_Filters');
		unregister_widget('WC_Widget_Price_Filter');
		unregister_widget('WC_Widget_Product_Search');
		unregister_widget('WC_Widget_Recently_Viewed');
		unregister_widget('WC_Widget_Recent_Reviews');
		unregister_widget('WC_Widget_Top_Rated_Products');
		unregister_widget('WC_Widget_Rating_Filter');
	}
}
