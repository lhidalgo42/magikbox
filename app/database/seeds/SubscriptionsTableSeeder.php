<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SubscriptionsTableSeeder extends Seeder {

    public function run()
    {
        Subscription::create([
            'mail' => 'leontuna@gmail.com',
            'active' => 'yes'
        ]);
        Subscription::create([
            'mail' => 'enzo.9214@gmail.com',
            'active' => 'yes'
        ]);
        $faker = Faker::create();

        foreach(range(1, 50) as $index) {
            Subscription::create([
                'mail' => $faker->freeEmail,
                'active' => 'yes'
            ]);
        }
    }

}