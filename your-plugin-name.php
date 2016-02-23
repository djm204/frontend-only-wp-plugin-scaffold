<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
* Plugin Name: wpress-frontfacing-plugin-scaffold 
* Description: A basic scaffold for a front-facing wordpress plugin with no admin area functionality
* Version: 1.0.0
* Author: djm204
* Author URI: http://dev.desiratech.com
*/
add_action('wp_enqueue_scripts', 'init');
$path  = "wp-content/plugins/wpress-frontfacing-plugin-scaffold";

function init(){
	wp_register_style( 'styles', plugin_dir_url( __FILE__ ). 'css/style.css' );
	wp_enqueue_style( 'styles', plugin_dir_url( __FILE__ ). 'css/style.css' );
	
	wp_register_script( 'jquery1-9', plugin_dir_url( __FILE__ ). 'js/jquery.min.js');
	wp_register_script( 'jquery-easing', plugin_dir_url( __FILE__ ). '/js/jquery.easing.min.js');
    
	wp_enqueue_script( 'jquery1-9', plugin_dir_url( __FILE__ ). 'js/jquery.min.js');
	wp_enqueue_script( 'jquery-easing', plugin_dir_url( __FILE__ ). '/js/jquery.easing.min.js');
}

function show_plugin(){   
        
?>
<?php include(plugin_dir_path( __FILE__ ) . 'front/index.php'); ?>
<?php

}
add_shortcode('plugin-shortcut', 'show_plugin');

?>