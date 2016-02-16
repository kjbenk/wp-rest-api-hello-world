<?php

class WPRAHW_Test extends WP_UnitTestCase {

	function test_wprahw() {

		$response = wp_remote_get( 'http://local.wordpress.dev/wp-json/wprahw/hello-world' );
		$data = wp_remote_retrieve_body( $response );

		// replace this with some actual testing code
		$this->assertEquals( json_decode( $data ), 'Hello World' );
	}
}
