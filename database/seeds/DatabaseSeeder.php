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

		$this->call('UsersTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('ActivitiesTableSeeder');
	}

}

class UsersTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();

		App\User::create(['email' => 'mrosati@h-art.com', 'area' => 'DEV', 'first_name' => 'Matteo', 'last_name' => 'Rosati', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'mfiaschini@h-art.com', 'area' => 'DEV', 'first_name' => 'Maurizio', 'last_name' => 'Fiaschini', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'lcadamuro.ce@h-art.com', 'area' => 'DEV', 'first_name' => 'Lorenzo', 'last_name' => 'Cadamuro', 'password' => Hash::make('123456')]);
		App\User::create(['email' => 'nruggeri@h-art.com', 'area' => 'DEV', 'first_name' => 'Nicholas', 'last_name' => 'Ruggeri', 'password' => Hash::make('123456')]);
	}
}

class ProjectsTableSeeder extends Seeder {
	public function run()
	{
		DB::table('projects')->delete();

		App\Project::create(['name' => 'Telecom']);
		App\Project::create(['name' => 'Mutti']);
		App\Project::create(['name' => 'Silversea']);
		App\Project::create(['name' => 'Intesa San Paolo']);
	}
}

class ActivitiesTableSeeder extends Seeder {
	public function run()
	{
		DB::table('activities')->delete();

		for ($i = 0; $i < 150; $i++) {
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 09:00:00', 'end_time' => '2015-06-01 10:00:00']);
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 10:00:00', 'end_time' => '2015-06-01 11:00:00']);
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 11:00:00', 'end_time' => '2015-06-01 12:00:00']);
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 12:00:00', 'end_time' => '2015-06-01 13:00:00']);
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 13:00:00', 'end_time' => '2015-06-01 14:00:00']);
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 14:00:00', 'end_time' => '2015-06-01 15:00:00']);
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 15:00:00', 'end_time' => '2015-06-01 16:00:00']);
			App\Activity::create(['project_id' => 1, 'user_id' => 1, 'note' => null, 'start_time' => '2015-06-01 16:00:00', 'end_time' => '2015-06-01 17:00:00']);

			App\Activity::create(['project_id' => 2, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 09:00:00', 'end_time' => '2015-06-01 10:00:00']);
			App\Activity::create(['project_id' => 2, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 10:00:00', 'end_time' => '2015-06-01 11:00:00']);
			App\Activity::create(['project_id' => 2, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 11:00:00', 'end_time' => '2015-06-01 12:00:00']);
			App\Activity::create(['project_id' => 2, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 12:00:00', 'end_time' => '2015-06-01 13:00:00']);

			App\Activity::create(['project_id' => 3, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 13:00:00', 'end_time' => '2015-06-01 14:00:00']);
			App\Activity::create(['project_id' => 3, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 14:00:00', 'end_time' => '2015-06-01 15:00:00']);
			App\Activity::create(['project_id' => 3, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 15:00:00', 'end_time' => '2015-06-01 16:00:00']);
			App\Activity::create(['project_id' => 3, 'user_id' => 2, 'note' => null, 'start_time' => '2015-06-01 16:00:00', 'end_time' => '2015-06-01 17:00:00']);

			App\Activity::create(['project_id' => 3, 'user_id' => 3, 'note' => null, 'start_time' => '2015-06-02 13:00:00', 'end_time' => '2015-06-02 14:00:00']);
			App\Activity::create(['project_id' => 3, 'user_id' => 3, 'note' => null, 'start_time' => '2015-06-02 14:00:00', 'end_time' => '2015-06-02 15:00:00']);
			App\Activity::create(['project_id' => 3, 'user_id' => 3, 'note' => null, 'start_time' => '2015-06-02 15:00:00', 'end_time' => '2015-06-02 16:00:00']);
			App\Activity::create(['project_id' => 3, 'user_id' => 3, 'note' => null, 'start_time' => '2015-06-02 16:00:00', 'end_time' => '2015-06-02 17:00:00']);

			App\Activity::create(['project_id' => 4, 'user_id' => 4, 'note' => null, 'start_time' => '2015-06-03 09:00:00', 'end_time' => '2015-06-03 10:00:00']);
			App\Activity::create(['project_id' => 4, 'user_id' => 4, 'note' => null, 'start_time' => '2015-06-03 10:00:00', 'end_time' => '2015-06-03 11:00:00']);
			App\Activity::create(['project_id' => 4, 'user_id' => 4, 'note' => null, 'start_time' => '2015-06-03 11:00:00', 'end_time' => '2015-06-03 12:00:00']);
			App\Activity::create(['project_id' => 4, 'user_id' => 4, 'note' => null, 'start_time' => '2015-06-03 12:00:00', 'end_time' => '2015-06-03 13:00:00']);
		}
	}
}
