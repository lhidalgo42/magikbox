<?php


class RolesTableSeeder extends Seeder {

	public function run()
	{
		Role::create([
            'name' => 'admin',
            'privileges' => 'Privilegios de Administrador'
		]);
	}

}