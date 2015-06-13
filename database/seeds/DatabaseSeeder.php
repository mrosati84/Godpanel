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
		$faker = Faker\Factory::create();
		$areas = ['DEV', 'PM', 'UX', 'ART', 'CLIENT', 'STRATEGY'];

		for ($i = 0; $i < 50; $i++) {
			App\User::create([
				'email' => $faker->email,
				'area' => array_rand($areas, $num=1),
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'password' => Hash::make('123456')
			]);
		}
	}
}

class ProjectsTableSeeder extends Seeder {
	public function run()
	{
		DB::table('projects')->delete();
		$faker = Faker\Factory::create();

		for ($i = 0; $i < 20; $i++) {
			App\Project::create([
				'name' => $faker->company
			]);
		}
	}
}

class ActivitiesTableSeeder extends Seeder {
	public function run()
	{
		DB::table('activities')->delete();
		$faker = Faker\Factory::create();

		for ($i = 0; $i < 150; $i++) {
			App\Activity::create([
				'project_id' => $faker->numberBetween($min=1, $max=20),
				'user_id' => $faker->numberBetween($min=1, $max=50),
				'start_time' => $faker->dateTimeThisYear($max = 'now'),
				'end_time' => $faker->dateTimeThisYear($max = 'now')
			]);
		}
	}
}