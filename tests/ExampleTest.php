<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(302, $response->getStatusCode());
	}

	public function testUserFullNameMethod()
	{
		$user = App\User::first();

		$this->assertEquals('User 1', $user->full_name);
	}

}
