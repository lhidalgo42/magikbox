<?php


class MacsTableSeeder extends Seeder {

	public function run()
    {
        Mac::create([
            'name' => 'Coordinador',
            'value' => '0013A20040B1E199',
            'mac_types_id' => 1
		]);
        Mac::create([
            'name' => 'Camara 1',
            'value' => '0013A20040B1E19E',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 2',
            'value' => '0013A20040B1E143',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 3',
            'value' => '0013A20040A79681',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 4',
            'value' => '0013A20040B1E347',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 5',
            'value' => '0013A20040B1E18F',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 6',
            'value' => '0013A20040B1E0E6',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 7',
            'value' => '0013A20040A79680',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 8',
            'value' => '0013A20040B1E345',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 9',
            'value' => '0013A20040B1E34F',
            'mac_types_id' => 2
        ]);
        Mac::create([
            'name' => 'Camara 10',
            'value' => '0013A20040B1E1A3',
            'mac_types_id' => 2
        ]);
	}

}