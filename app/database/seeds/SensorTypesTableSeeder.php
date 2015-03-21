<?php

class SensorTypesTableSeeder extends Seeder {

	public function run()
	{
		SensorType::create([
            'name' => 'Sensor de Temperatura',
            'uses' => 'Para Medir la Temperatura de un Lugar',
            'examples' => 'En una Oficina, para Controlar la Temperatura.'
		]);
	}

}