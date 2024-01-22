<?php
/*
Plugin Name:  Advanced Custom Fields: Allow HTML
Description:  Allow Advanced Custom Fields to output HTML entered into fields created for your custome theme.
Version:      1.0
Author:       Aesthetic & Function 
Author URI:   https://af.works/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  acf-allow-unsafe-html
*/

// Turn on new behavior
// add_filter( 'acf/the_field/escape_html_optin', '__return_true' );

// Disable notice in Admin
add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );

// Allow HTML to be rendered for all fields
add_filter( 'acf/the_field/allow_unsafe_html', function( $allowed, $selector ) {
  return true;
}, 10, 2);