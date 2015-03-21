<?php

class SensorsTypesTableSeeder extends Seeder {

	public function run()
    {
        SensorsType::create([
            'name' => 'Enchufe',
            'uses' => '',
            'examples' => '',
            'tag' => '<i class="fa fa-plug"></i>'
        ]);

        SensorsType::create([
            'name' => 'Luces',
            'uses' => '',
            'examples' => '',
            'tag' => '<i class="fa fa-lightbulb-o"></i>'
        ]);
    }

}