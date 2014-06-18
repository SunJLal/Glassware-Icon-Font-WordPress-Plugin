<?php
/*
Plugin Name: Glassware Icon Font
Plugin URI: https://github.com/SunJLal/Glassware-Icon-Font-WordPress-Plugin
Description: Bar Glassware Icon Font is a collection of glassware icons that are scaleable and retina ready!  Add the icon name to an element's class to display the icon anywhere on your website!  ex: class="glassware-martini"
Version: 1.0.0
Author: Sunjay Lal
Author URI: http://www.SunjayLal.com
License: GPLv2 or later
*/
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );
function register_plugin_styles() {
    wp_register_style( 'Glassware_Icon_Font', plugins_url( 'Glassware_Icon_Font/css/Glassware_Icon_Font.min.css' ) );
    wp_enqueue_style( 'Glassware_Icon_Font' );
}
?>