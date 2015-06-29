<?php

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		Profile::create([
            'users_id' => 1,
            'rut' => '11111111-1',
            'name' => 'Elabra',
            'lastname1' => 'Elabra',
            'lastname2' => '',
            'born' => '2015-06-28',
            'sex' => 'female'
		]);

	}

}