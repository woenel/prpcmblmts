<?php

namespace Woenel\Prpcmblmts\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrpcmblmtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedTable(__DIR__ . '/csv/philippine_regions.csv', 'philippine_regions');
        $this->seedTable(__DIR__ . '/csv/philippine_provinces.csv', 'philippine_provinces');
        $this->seedTable(__DIR__ . '/csv/philippine_cities.csv', 'philippine_cities');
        $this->seedTable(__DIR__ . '/csv/philippine_barangays.csv', 'philippine_barangays');
    }

    /**
     * Seed a database table from a CSV file.
     */
    private function seedTable(string $file_path, string $table): void
    {
        $data = $this->parseCsvData($file_path);
        $this->insertOrUpdateData($data, $table);
    }

    /**
     * Parse CSV data and return as an array.
     */
    private function parseCsvData(string $file_path): array
    {
        $rows = array_map('str_getcsv', file($file_path));
        $header = $this->sanitizeHeaders(array_shift($rows));

        return array_map(function ($row) use ($header) {
            return array_combine($header, $row);
        }, $rows);
    }

    /**
     * Sanitize headers to remove unwanted characters.
     */
    private function sanitizeHeaders(array $header_row): array
    {
        return array_map(function ($header) {
            return preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $header);
        }, $header_row);
    }

    /**
     * Insert or update data in the specified table.
     */
    private function insertOrUpdateData(array $data, string $table): void
    {
        foreach ($data as $row) {
            match ($table) {
                'philippine_regions' => DB::table('philippine_regions')->updateOrInsert(
                    ['psgc' => $row['psgc']],
                    ['name' => $row['name'], 'code' => $row['code']]
                ),
                'philippine_provinces' => DB::table('philippine_provinces')->updateOrInsert(
                    ['psgc' => $row['psgc']],
                    ['name' => $row['name'], 'code' => $row['code'], 'region_code' => $row['region_code']]
                ),
                'philippine_cities' => DB::table('philippine_cities')->updateOrInsert(
                    ['psgc' => $row['psgc']],
                    ['name' => $row['name'], 'code' => $row['code'], 'province_code' => $row['province_code'], 'region_code' => $row['region_code']]
                ),
                'philippine_barangays' => DB::table('philippine_barangays')->updateOrInsert(
                    ['psgc' => $row['psgc']],
                    ['name' => $row['name'], 'city_code' => $row['city_code'], 'province_code' => $row['province_code'], 'region_code' => $row['region_code']]
                ),
            };
        }
    }
}
