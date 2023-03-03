<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SerieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('series')->insert([
            ['cve' => 100, 'company_id' => 1],
            ['cve' => 200, 'company_id' => 1],
            ['cve' => 201, 'company_id' => 1],
            ['cve' => 300, 'company_id' => 1],
            ['cve' => 301, 'company_id' => 1],
            ['cve' => 400, 'company_id' => 1]
        ]);
    }
}
