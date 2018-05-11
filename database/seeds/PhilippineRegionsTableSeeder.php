<?php

use Illuminate\Database\Seeder;

class PhilippineRegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('philippine_regions')->insert([
            [
                'psgc_code' => '010000000',
                'region_description' => 'REGION I (ILOCOS REGION)',
                'region_code' => '01'
            ],
            [
                'psgc_code' => '020000000',
                'region_description' => 'REGION II (CAGAYAN VALLEY)',
                'region_code' => '02'
            ],
            [
                'psgc_code' => '030000000',
                'region_description' => 'REGION III (CENTRAL LUZON)',
                'region_code' => '03'
            ],
            [
                'psgc_code' => '040000000',
                'region_description' => 'REGION IV-A (CALABARZON)',
                'region_code' => '04'
            ],
            [
                'psgc_code' => '170000000',
                'region_description' => 'REGION IV-B (MIMAROPA)',
                'region_code' => '17'
            ],
            [
                'psgc_code' => '050000000',
                'region_description' => 'REGION V (BICOL REGION)',
                'region_code' => '05'
            ],
            [
                'psgc_code' => '060000000',
                'region_description' => 'REGION VI (WESTERN VISAYAS)',
                'region_code' => '06'
            ],
            [
                'psgc_code' => '070000000',
                'region_description' => 'REGION VII (CENTRAL VISAYAS)',
                'region_code' => '07'
            ],
            [
                'psgc_code' => '080000000',
                'region_description' => 'REGION VIII (EASTERN VISAYAS)',
                'region_code' => '08'
            ],
            [
                'psgc_code' => '090000000',
                'region_description' => 'REGION IX (ZAMBOANGA PENINSULA)',
                'region_code' => '09'
            ],
            [
                'psgc_code' => '100000000',
                'region_description' => 'REGION X (NORTHERN MINDANAO)',
                'region_code' => '10'
            ],
            [
                'psgc_code' => '110000000',
                'region_description' => 'REGION XI (DAVAO REGION)',
                'region_code' => '11'
            ],
            [
                'psgc_code' => '120000000',
                'region_description' => 'REGION XII (SOCCSKSARGEN)',
                'region_code' => '12'
            ],
            [
                'psgc_code' => '130000000',
                'region_description' => 'NATIONAL CAPITAL REGION (NCR)',
                'region_code' => '13'
            ],
            [
                'psgc_code' => '140000000',
                'region_description' => 'CORDILLERA ADMINISTRATIVE REGION (CAR)',
                'region_code' => '14'
            ],
            [
                'psgc_code' => '150000000',
                'region_description' => 'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)',
                'region_code' => '15'
            ],
            [
                'psgc_code' => '160000000',
                'region_description' => 'REGION XIII (Caraga)',
                'region_code' => '16'
            ]
        ]);
    }
}
