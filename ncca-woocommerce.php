<?php
/*
Plugin Name: NCCA WooCommerce
Plugin URI: http://wptechcentre.com/
Description: Declares a plugin that extends WooThemes' WooCommerce plugin.
Version: 1.0
Author: Tom Frearson
Author URI: http://wptechcentre.com/
License: GPLv2
*/
if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Remove product reviews tab
remove_action( 'woocommerce_product_tabs', 'woocommerce_product_reviews_tab', 30 );

// Remove product reviews panel
remove_action( 'woocommerce_product_tab_panels', 'woocommerce_product_reviews_panel', 30 );

// Remove tabs from their original location
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Insert tabs under the main right product content 
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );
?>
