<?php

/**
 * Plugin Name: Highlight Multiple Quantities In Order
 * Description: This plugin ensures that you will notice when a single product quantity in order is over one.
 * Author: Jerry Selin
 * Version: 1.0.0
 * Author URI: https://jerrysel.in/
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}
/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
  
  add_action( 'admin_enqueue_scripts', 'multiquantityorder_script_load' );
  function multiquantityorder_script_load($hook){
    if ( 'post.php' != $hook ) {
      return;
    }
    wp_enqueue_script( 'multiquantityorder-script', plugin_dir_url( __FILE__ ) . 'highlight-multiple.js', array( ), NULL, true );

  }
}
