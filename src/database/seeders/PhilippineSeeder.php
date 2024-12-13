<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhilippineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            PhilippineRegionSeeder::class,
            PhilippineProvinceSeeder::class,
            PhilippineCitySeeder::class,
            PhilippineBarangaySeeder::class,
        ]);
    }
}
