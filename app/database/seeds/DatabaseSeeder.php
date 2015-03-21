<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('SubscriptionsTableSeeder');
		 $this->call('UsersTableSeeder');
		 $this->call('RolesTableSeeder');
		 $this->call('ProfilesTableSeeder');
         $this->call('ControlsTableSeeder');
         $this->call('ProductsTypesTableSeeder');
         $this->call('ProductsTableSeeder');
         $this->call('SensorsTableSeeder');
         $this->call('SensorsTypesTableSeeder');

	}

}
