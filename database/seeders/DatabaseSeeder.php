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
            CompanieTableSeeder::class,
            SerieTableSeeder::class,
            ProductTableSeeder::class,
            StatusTableSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class
        ]);
    }
}
