<?php
/*
Plugin Name: Advanced Custom Fields: Ninja Forms Field
Plugin URI: https://github.com/graemehoffman/acf-ninja-forms
Description: Adds an Advanced Custom Fields field to select one or many Ninja Forms.
Version: 1.1.0
Author: graemehoffman
Author URI: http://www.graemehoffman.com
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

load_plugin_textdomain( 'acf-ninja-forms', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

/**
 * Verson 5
 */

function include_field_types_ninja_forms( $version ) {
  include_once( 'acf-ninja-forms-field-v5.php' );
}

add_action( 'acf/include_field_types', 'include_field_types_ninja_forms' );
