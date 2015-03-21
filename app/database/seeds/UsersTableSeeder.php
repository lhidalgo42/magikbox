<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '123',
                'roles_id' => '1'
		]);

	}
}