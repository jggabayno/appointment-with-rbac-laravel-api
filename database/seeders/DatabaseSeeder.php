<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserTableSeeder::class,
            AccessTableSeeder::class,
            WorkingHourTableSeeder::class,
            AppointmentTableSeeder::class,
            RoleAccessTableSeeder::class,
        ]);

    }
}
