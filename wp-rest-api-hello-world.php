<?php
/*
Plugin Name: WP REST API Hello World
Plugin URI: https://github.com/kjbenk/wp-rest-api-hello-world
Description: A Hello World example for the WordPress REST API.
Version: 0.1.0-dev
Author: Kyle Benk
Author URI: http://kylebenk.com
*/

// Check to see if the function exists

if ( ! function_exists( 'wprahw_add_endpoint' ) ) :

/**
 * Adds a new rest api endpoint to output hello world
 *
 * @link http://v2.wp-api.org/extending/adding/
 */
function wprahw_add_endpoint() {
    register_rest_route( 'wprahw', '/hello-world', array(
        'methods'   => 'GET',
        'callback'  => 'wprahw_return_json',
    ) );
}
add_action( 'rest_api_init', 'wprahw_add_endpoint' );

endif;

if ( ! function_exists( 'wprahw_return_json' ) ) :

/**
 * Output Hello World in JSON format
 * @param  array $data The data passed in the request
 * @return json       The returned JSON
 */
function wprahw_return_json($data) {
    return 'Hello World';
}

endif;
