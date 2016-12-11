<?php
/*
Plugin Name: WP REST API Hello World
Plugin URI: https://github.com/kjbenk/wp-rest-api-hello-world
Description: A Hello World example for the WordPress REST API.
Version: 0.1.0-dev
Author: Kyle Benk
Author URI: http://kylebenk.com
*/

if ( ! class_exists( 'WP_REST_WPRAHW_Controller' ) ) :

	class WP_REST_WPRAHW_Controller extends WP_REST_Controller {

		public function __construct() {
			$this->namespace = 'wprahw';
			$this->rest_base = 'hello-world';
		}

		/**
		 * Register the routes for the objects of the controller.
		 */
		public function register_routes() {
			register_rest_route( 'wprahw', '/hello-world', array(
				'methods'   => 'GET',
				'callback'  => array( $this, 'hello_world' ),
			) );
		}

		/**
		 * Output Hello World in JSON format
		 * @param  array $data The data passed in the request
		 * @return json	   The returned JSON
		 */
		public function hello_world($data) {
			return 'Hello World';
		}

	}

endif;

// Check to see if the function exists

if ( ! function_exists( 'wprahw_add_endpoint' ) ) :

	/**
	 * Adds a new rest api endpoint to output hello world
	 *
	 * @link http://v2.wp-api.org/extending/adding/
	 */
	function wprahw_add_endpoint() {

		// Taxonomies.
		$wprahw = new WP_REST_WPRAHW_Controller;
		$wprahw->register_routes();
	}
	add_action( 'rest_api_init', 'wprahw_add_endpoint' );

endif;
