<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('companies')->insert([
            ['name' => "CRESER-CULTURAL", 'cve' => 29],
            ['name' => "MVCM", 'cve' => 11],
        ]);
    }
}
