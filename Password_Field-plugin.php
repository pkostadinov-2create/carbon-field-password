<?php
/*
Plugin Name: Carbon Field: Password_Field
Description: Extends the base Carbon Fields with a Password_Field field.
Version: 1.0.0
*/

/**
 * Set text domain
 * @see https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
 */
load_plugin_textdomain( 'carbon-field-password', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

/**
 * Hook field initialization
 */
add_action( 'after_setup_theme', 'crb_init_carbon_field_password_field', 15 );
function crb_init_carbon_field_password_field() {
	if ( class_exists( 'Carbon_Fields\\Field\\Field' ) ) {
		include_once dirname(__FILE__) . '/Password_Field.php';
	}
}
