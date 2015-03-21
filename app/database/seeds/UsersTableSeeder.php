<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{

			User::create([
				'username' => 'leontuna',
				'email' => 'leontuna@gmail.com',
				'password' => '123',
				'roles_id' => '1',
				'img_path'   => ''
			]);
			User::create([
				'username' => 'enzo9214',
				'email' => 'enzo.9214@gmail.com',
				'password' => '123',
				'roles_id' => '2',
				'img_path'   => ''
			]);
	}

}