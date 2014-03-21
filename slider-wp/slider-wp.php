<?php

/*
Plugin Name: Slider-wp
Plugin URI: http://www.wsf.fr
Description: Plugin réalisé en cours de Wordpress
Author: Romano Malnoult & Julien Guyon
Version: 1
Author URI: http://www.romainmalnoult.com
*/


// Plugin Constants
define ('SLIDER_WP_URL', plugin_dir_url(__FILE__) );
define ('SLIDER_WP_DIR', plugin_dir_path(__FILE__) );

// Classes
require_once(SLIDER_WP_DIR . '/inc/cpt.php');
require_once(SLIDER_WP_DIR . '/inc/fields.php');
require_once(SLIDER_WP_DIR . '/inc/shortcode.php');




new shortcode();