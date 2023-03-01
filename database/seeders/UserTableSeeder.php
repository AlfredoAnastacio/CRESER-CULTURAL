<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            ['name' => "Alfredo", 'first_surname' => null, 'second_surname' => null, 'email' => 'admin@gmail.com', 'password' => '$2y$10$qMdJAOerbBJ4isPjKdD00uk.Pjkr/sSW2kgdq4fF5Z7ANJRDsil/u']
        ]);
    }
}
