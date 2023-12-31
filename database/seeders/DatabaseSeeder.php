<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ActivitiesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        $this->call([            
            ActivitiesTableSeeder::class,
            ObjectivesTableSeeder::class,
            UserObjectivesTableSeeder::class,
        ]);
    }
}
