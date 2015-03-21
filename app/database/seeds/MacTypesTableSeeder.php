<?php

class MacTypesTableSeeder extends Seeder {

	public function run()
	{
		MacType::create([
            'name' => 'Productos de Control'
		]);
        MacType::create([
            'name' => 'Productos Estandar'
        ]);
	}

}