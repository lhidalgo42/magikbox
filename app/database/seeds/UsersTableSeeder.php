<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
                'username' => 'elabra',
                'email' => 'elabra@magikbox.cl',
                'password' => '123456',
                'roles_id' => '1'
		]);

	}
}