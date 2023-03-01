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
            ['name' => "Administrador", 'first_surname' => "Administrador", 'second_surname' => "Administrador", 'email' => 'admin@gmail.com', 'password' => '$2y$10$qMdJAOerbBJ4isPjKdD00uk.Pjkr/sSW2kgdq4fF5Z7ANJRDsil/u', 'address' => 'local', 'phone' =>'2281703399', 'role_id' => 1, 'status_id' => 1],
            ['name' => "DISPONIBLE", 'first_surname' => "EJECUTIVO1", 'second_surname' => "EJECUTIVO1", 'email' => 'ejecutivo1@gmail.com', 'password' => '$2y$10$qMdJAOerbBJ4isPjKdD00uk.Pjkr/sSW2kgdq4fF5Z7ANJRDsil/u', 'address' => 'local', 'phone' =>'2281703399', 'role_id' => 3, 'status_id' => 1],
            ['name' => "ALICIA", 'first_surname' => "VALENCIA", 'second_surname' => "VALENCIA", 'email' => 'alicia@gmail.com', 'password' => '$2y$10$qMdJAOerbBJ4isPjKdD00uk.Pjkr/sSW2kgdq4fF5Z7ANJRDsil/u', 'address' => 'local', 'phone' =>'2281703399', 'role_id' => 1, 'status_id' => 1]
        ]);
    }
}
