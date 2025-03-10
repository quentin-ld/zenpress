<?php

/**
 * Disable WooCommerce widgets
 *
 * This function Disable various WooCommerce widgets that are typically
 * registered by default. By unregistering these widgets, you can improve
 * site performance by preventing the loading of unnecessary widgets on
 * the frontend.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

if (class_exists('woocommerce')) {

    add_action('widgets_init', 'zenpress_disable_woocommerce_widgets', 99);
    function zenpress_disable_woocommerce_widgets() {
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
