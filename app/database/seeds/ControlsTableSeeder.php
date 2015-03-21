<?php


class ControlsTableSeeder extends Seeder {

	public function run()
	{
			Control::create([
                'name' => 'Casa Leo',
                'mac' => '11:11:11:11:11:ab',
                'users_id' => '1'
			]);

            Control::create([
                'name' => 'Casa Enzo',
                'mac' => '11:11:11:11:11:ab',
                'users_id' => '2'
            ]);

	}

}