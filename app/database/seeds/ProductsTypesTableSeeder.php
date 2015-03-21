<?php


class ProductsTypesTableSeeder extends Seeder {

	public function run()
	{
		ProductsType::create([
		    'name' => 'Control Enchufes',
            'uses' => 'Encender o apagar enchufes.',
            'Examples' => 'Por Ejemplo : Prender las luces de navidad y apagarlas a cierta hora.',
            'tag' => '<i class="fa fa-plug"></i>'
        ]);

        ProductsType::create([
            'name' => 'Control Luces',
            'uses' => 'Prender o Apagar las Luces de la Casa',
            'Examples' => 'Por Ejemplo : Pender las luces de la casa cuando uno anda de viaje.',
            'tag' => '<i class="fa fa-lightbulb-o"></i>'
        ]);

	}

}