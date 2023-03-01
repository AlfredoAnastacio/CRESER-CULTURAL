<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
            ['name_role' => "ADMINISTRADOR"],
            ['name_role' => "GERENTE"],
            ['name_role' => "EJECUTIVO"],
            ['name_role' => "CAPTURISTA"],
            ['name_role' => "DIFUSIÓN"]
        ]);
    }
}
