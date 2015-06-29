<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UsersTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('ProfilesTableSeeder');
        $this->call('MacTypesTableSeeder');
        $this->call('SensorTypeTableSeeder');
        $this->call('MacsTableSeeder');
        $this->call('ControlsTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('SensorsTableSeeder');
    }

}