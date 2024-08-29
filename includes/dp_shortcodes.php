<?php

/*Este arquivo contém os shortcodes*/

//se chamar diretamente aborta
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function foobar_func ($atts){
    return "foo and bar";
}

/*Registro dos Shortcodes*/

function dp_register_shortcodes(){
    //Shortcodes registrados
    add_shortcode('foobar', 'foobar_func');
}
