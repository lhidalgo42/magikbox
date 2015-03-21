<?php

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		Profile::create([
            'users_id' => 1,
            'rut' => '11111111-1',
            'name' => 'Admin',
            'lastname1' => 'Admin',
            'lastname2' => 'Admin',
            'born' => '2015-03-21',
            'sex' => 'male'
		]);

	}

}