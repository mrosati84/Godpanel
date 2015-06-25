<?php

class ExampleTest extends TestCase {

	public function test_home_page_as_anonymous_user()
	{
		$response = $this->call('GET', '/');

		$this->assertResponseStatus(302);
		$this->assertRedirectedToRoute('auth.index');
	}

	public function test_home_page_as_authenticated_user()
	{
		$this->be(App\User::first());

		$response = $this->call('GET', '/');

		$this->assertResponseOk();
	}

	public function test_user_full_name_method()
	{
		$user = App\User::first();

		$this->assertEquals('User 1', $user->full_name);
	}

}
