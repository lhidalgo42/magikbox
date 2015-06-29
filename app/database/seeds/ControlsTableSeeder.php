<?php

class ControlsTableSeeder extends Seeder {

	public function run()
	{
		Control::create([
            'name' => 'Elabra',
            'macs_id' => 1,
            'users_id' => 1
		]);
	}
}