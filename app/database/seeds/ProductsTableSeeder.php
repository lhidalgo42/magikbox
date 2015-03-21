<?php


class ProductsTableSeeder extends Seeder {

	public function run()
	{
		Product::create([
            'name' => "Living",
            'controls_id' => 1,
            'products_types_id' => 1,
            'mac' => '00:00:00:11:22:33'
        ]);

        Product::create([
            'name' => "Pared Comedor",
            'controls_id' => 1,
            'products_types_id' => 2,
            'mac' => '00:00:00:11:22:33'
        ]);

        Product::create([
            'name' => "Sala de Juego",
            'controls_id' => 2,
            'products_types_id' => 1,
            'mac' => '00:00:00:11:22:33'
        ]);

        Product::create([
            'name' => "Pared Pasillo",
            'controls_id' => 2,
            'products_types_id' => 2,
            'mac' => '00:00:00:11:22:33'
        ]);
	}

}