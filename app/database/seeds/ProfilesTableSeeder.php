<?php


class ProfilesTableSeeder extends Seeder {

    public function run()
    {
        Profile::create([
            'users_id' => 1,
            'rut' => '18541556-2',
            'name' => 'Leonardo',
            'lastname_1' => 'Hidalgo',
            'lastname_2' => 'Sepulveda',
            'born'       => '1993-09-09',
            'sex'        => 'male'
        ]);
        Profile::create([
            'users_id'   => 2,
            'rut'        => '17961926-1',
            'name'       => 'Enzo',
            'lastname_1' => 'Scilla',
            'lastname_2' => 'Godoy',
            'born'       => '1992-01-14',
            'sex'        => 'male'
        ]);

    }

}