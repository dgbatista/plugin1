<?php

/*Este arquivo inicializa todos os componentes do PLugin*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('DP_CORE_INCLUDES', dirname(__FILE__) . '/INCLUDES/');
define('DP_CORE_IMAGE', plugins_url('assets/images/', __FILE__));
define('DP_CORE_CSS', plugins_url('assets/css/', __FILE__));
define('DP_CORE_JS', plugins_url('assets/js/', __FILE__));

/*Registrando CSS*/
function dp_register_core_css(){
    wp_enqueue_style('dp_core_css', DP_CORE_CSS . 'core.css', null, time(), 'all');
}

add_action('wp_enqueue_scripts','dp_register_core_css');

/*Registrando JS/jQuery*/
function dp_register_core_js(){
    wp_enqueue_script('dp_core_js', DP_CORE_JS . 'core.js', 'jquery', time(), true);
}

add_action('wp_enqueue_scripts','dp_register_core_js');


/*Includes*/
if( file_exists(DP_CORE_INCLUDES) . 'core_functions.php'){
    require_once DP_CORE_INCLUDES . 'core_functions.php';
}
if( file_exists(DP_CORE_INCLUDES) . 'dp_shortcodes.php'){
    require_once DP_CORE_INCLUDES . 'dp_shortcodes.php';
}