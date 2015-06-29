<?php


class SensorsTableSeeder extends Seeder {

	public function run()
	{
			Sensor::create([
                'name' => 'Camara 1',
                'products_id' => 1,
                'sensor_types_id' => 1,
                'highlight' => 1,
                'tag' => '<i class="ion-thermometer"></i>'
			]);
        Sensor::create([
            'name' => 'Camara 2',
            'products_id' => 2,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 3',
            'products_id' => 3,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 4',
            'products_id' => 4,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 5',
            'products_id' => 5,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 6',
            'products_id' => 6,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 7',
            'products_id' => 7,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 8',
            'products_id' => 8,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 9',
            'products_id' => 9,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
        Sensor::create([
            'name' => 'Camara 10',
            'products_id' => 10,
            'sensor_types_id' => 1,
            'highlight' => 1,
            'tag' => '<i class="ion-thermometer"></i>'
        ]);
	}

}