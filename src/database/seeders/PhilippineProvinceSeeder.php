<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhilippineProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('philippine_provinces')->count()) {
            DB::unprepared(file_get_contents(__DIR__ . '/sql/philippine_provinces.sql'));
        }
    }
}
