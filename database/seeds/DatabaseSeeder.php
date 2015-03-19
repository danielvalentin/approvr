<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Role;
use App\Http\Models\Subscription;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('RolesTableSeeder');
		$this->command->info('Roles table seeded');
		
		$this->call('SubscriptionsTableSeeder');
		$this->command->info('Subscriptions table seeded');
	}

}

class RolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Role::create(['name' => 'login', 'description' => 'The login priviledge. Everyone.']);
		Role::create(['name' => 'user', 'description' => 'Users']);
		Role::create(['name' => 'client', 'description' => 'Users clients']);
		Role::create(['name' => 'admin', 'description' => 'Admins.']);
	}

}

class SubscriptionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Subscription::create(['name' => 'free']);
		Subscription::create(['name' => 'basic', 'projects' => 5, 'clients' => 5, 'space' => 10000000000, 'monthly' => '5', 'description' => '1 GB']);
		Subscription::create(['name' => 'pro', 'projects' => 99999, 'clients' => 99999, 'space' => 100000000000, 'monthly' => '10', 'description' => '10 GB, no limit on projects and clients.']);
	}

}
