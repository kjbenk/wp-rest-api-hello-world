<?php

class WPRAHW_Test extends WP_Test_REST_Controller_Testcase {

	public function setUp() {
		parent::setUp();

		$this->endpoint = new WP_REST_Users_Controller();
	}

	public function test_register_routes() {
		// No op
	}

	public function test_context_param() {
		// No op
	}

	public function test_get_items() {
		// No op
	}

	public function test_get_item() {
		// No op
	}

	public function test_create_item() {
		// No op
	}

	public function test_update_item() {
		// No op
	}

	public function test_delete_item() {
		// No op
	}

	public function test_prepare_item() {
		// No op
	}

	public function test_get_item_schema() {
		// No op
	}

	function test_wprahw() {

		$request = new WP_REST_Request( 'GET', '/wprahw/hello-world' );
		$response = $this->server->dispatch( $request );
		$data = $response->get_data();

		$this->assertEquals( $data, 'Hello World' );
	}
}
