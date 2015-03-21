<?php


class SensorsTableSeeder extends Seeder {

	public function run()
	{
		Sensor::create([
            'name' => 'Enchufe TV',
            'products_id' => 1,
            'sensors_types_id' => 1
		]);

        Sensor::create([
            'name' => 'Enchufe Blue Ray',
            'products_id' => 1,
            'sensors_types_id' => 1
        ]);
        Sensor::create([
            'name' => 'Luz Comedor',
            'products_id' => 2,
            'sensors_types_id' => 2
        ]);

        Sensor::create([
            'name' => 'Luz Patio Trasero',
            'products_id' => 2,
            'sensors_types_id' => 2
        ]);

        Sensor::create([
            'name' => 'Enchufe TV',
            'products_id' => 3,
            'sensors_types_id' => 1
        ]);

        Sensor::create([
            'name' => 'Enchufe Play 3',
            'products_id' => 3,
            'sensors_types_id' => 1
        ]);
        Sensor::create([
            'name' => 'Luz Pasillo',
            'products_id' => 4,
            'sensors_types_id' => 2
        ]);

        Sensor::create([
            'name' => 'Luz Patio Delantero',
            'products_id' => 4,
            'sensors_types_id' => 2
        ]);
	}

}