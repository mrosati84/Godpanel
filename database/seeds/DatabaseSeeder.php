<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('AreasTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('ActivitiesTableSeeder');
	}

}

class UsersTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();

		App\User::create(['email' => 'user1@domain.com', 'role_id' => 1, 'first_name' => 'User', 'last_name' => '1', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user2@domain.com', 'role_id' => 2, 'first_name' => 'User', 'last_name' => '2', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user3@domain.com', 'role_id' => 3, 'first_name' => 'User', 'last_name' => '3', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user4@domain.com', 'role_id' => 4, 'first_name' => 'User', 'last_name' => '4', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user5@domain.com', 'role_id' => 5, 'first_name' => 'User', 'last_name' => '5', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user6@domain.com', 'role_id' => 6, 'first_name' => 'User', 'last_name' => '6', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user7@domain.com', 'role_id' => 1, 'first_name' => 'User', 'last_name' => '7', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user8@domain.com', 'role_id' => 2, 'first_name' => 'User', 'last_name' => '8', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user9@domain.com', 'role_id' => 3, 'first_name' => 'User', 'last_name' => '9', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'user10@domain.com', 'role_id' => 4, 'first_name' => 'User', 'last_name' => '10', 'password' => Hash::make('123456')]);
	}
}

class AreasTableSeeder extends Seeder {
	public function run()
	{
		DB::table('areas')->delete();

		App\Area::create(['name' => 'DEV']);
		App\Area::create(['name' => 'PM']);
		App\Area::create(['name' => 'UX']);
		App\Area::create(['name' => 'ART']);
		App\Area::create(['name' => 'CLIENT']);
		App\Area::create(['name' => 'SOCIAL']);
		App\Area::create(['name' => 'STRATEGIC']);
	}
}

class RolesTableSeeder extends Seeder {
	public function run()
	{
		DB::table('roles')->delete();

		App\Role::create(['name' => 'Backend developer', 'area_id' => 1]);
		App\Role::create(['name' => 'Frontend developer', 'area_id' => 1]);
		App\Role::create(['name' => 'Senior PM', 'area_id' => 2]);
		App\Role::create(['name' => 'Junior PM', 'area_id' => 2]);
		App\Role::create(['name' => 'UX designer', 'area_id' => 3]);
		App\Role::create(['name' => 'Art director', 'area_id' => 4]);
	}
}

class ProjectsTableSeeder extends Seeder {
	public function run()
	{
		DB::table('projects')->delete();

		App\Project::create(['name' => 'Project 1']);
		App\Project::create(['name' => 'Project 2']);
		App\Project::create(['name' => 'Project 3']);
		App\Project::create(['name' => 'Project 4']);
		App\Project::create(['name' => 'Project 5']);
		App\Project::create(['name' => 'Project 6']);
		App\Project::create(['name' => 'Project 7']);
		App\Project::create(['name' => 'Project 8']);
	}
}

class ActivitiesTableSeeder extends Seeder {
	public function run()
	{
		DB::table('activities')->delete();

		// App\Activity::create(['project_id' => 1, 'user_id' => 1, 'description' => 'Lorem ipsum', 'start_date' => '2015-06-14 09:00:00', 'end_date' => '2015-06-14 13:00:00']);
		// App\Activity::create(['project_id' => 2, 'user_id' => 1, 'description' => 'Lorem ipsum', 'start_date' => '2015-06-14 13:00:00', 'end_date' => '2015-06-14 17:00:00']);

		// App\Activity::create(['project_id' => 2, 'user_id' => 2, 'description' => 'Lorem ipsum', 'start_date' => '2015-06-15 13:00:00', 'end_date' => '2015-06-15 17:00:00']);

		// App\Activity::create(['project_id' => 3, 'user_id' => 3, 'description' => 'Lorem ipsum', 'start_date' => '2015-06-15 09:00:00', 'end_date' => '2015-06-15 17:00:00']);

		// App\Activity::create(['project_id' => 4, 'user_id' => 4, 'description' => 'Lorem ipsum', 'start_date' => '2015-06-16 09:00:00', 'end_date' => '2015-06-16 13:00:00']);
	}
}
