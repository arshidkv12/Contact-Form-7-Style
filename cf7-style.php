<?php 
/**
 * Plugin Name: CF7 Style
 * Plugin URI: https://wpdebuglog.com/
 * Description: CF7 css style
 * Author: Arshid
 * Author URI: https://servmask.com/
 * Version: 1.0.0
 */

/**
  * Chage it( debug = false )
  */

$debug = true;


$cf7css_do_enqueue_scripts = function () use( $debug ) {

    $version = empty($debug) ? '1.0.0' : time();
    wp_enqueue_style( 'cf7-form',
        plugin_dir_url( __FILE__ ).'form-min.css',
        array(), $version , 'all' );
    wp_enqueue_style( 'cf7-style',
        plugin_dir_url( __FILE__ ).'styles.css',
        array(), $version , 'all' );
};

add_action( 'wpcf7_enqueue_styles',  $cf7css_do_enqueue_scripts, 10, 0 );
