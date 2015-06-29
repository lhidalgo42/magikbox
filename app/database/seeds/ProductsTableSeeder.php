<?php

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		Product::create([
            'name' => 'Camara 1',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 2
		]);
        Product::create([
            'name' => 'Camara 2',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 3
        ]);
        Product::create([
            'name' => 'Camara 3',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 4
        ]);
        Product::create([
            'name' => 'Camara 4',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 5
        ]);
        Product::create([
            'name' => 'Camara 5',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 6
        ]);
        Product::create([
            'name' => 'Camara 6',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 7
        ]);
        Product::create([
            'name' => 'Camara 7',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 8
        ]);
        Product::create([
            'name' => 'Camara 8',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 9
        ]);
        Product::create([
            'name' => 'Camara 9',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 10
        ]);
        Product::create([
            'name' => 'Camara 10',
            'controls_id' => 1,
            'tag' => '<i class="ion-thermometer"></i>',
            'macs_id' => 11
        ]);
	}

}