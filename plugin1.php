<?php
/*
* Plugin Name: Plugin 1
* Plugin URI: https://google.com.br
* Description: Plugin de Funcionalidades para WP
* Version: 2.0
* Author: Douglas Batista
* Author URI: https://douglasbatista.com
* Text Domain: dp1
*/

//se chamar diretamente aborta
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$plugin_path = plugin_dir_path( __FILE__ );

if( file_exists($plugin_path) . 'core-init.php'){
    require_once $plugin_path . 'core-init.php';
}





?>


