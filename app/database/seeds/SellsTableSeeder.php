<?php


class SellsTableSeeder extends Seeder {

	public function run()
	{
		Sell::create([
            'name' => 'Control de Enchufes',
            'description' => 'Controla Enchufes a Distancia',
            'price' => '29.990',
            'products_types_id' => 1
		]);

        Sell::create([
            'name' => 'Control de Luces',
            'description' => 'Controla luces a Distancia',
            'price' => '29.990',
            'products_types_id' => 1
        ]);

	}
}