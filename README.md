# PRPCMBLMTS
Philippines region, province, cities/municipalities and barangays Laravel migration and table seeder.

## Requirements
- Laravel 5.5 and up

## What's inside
- [x] Regions
- [x] Provinces
- [x] Cities/Municipalities
- [x] Barangays

## Installation
1. Install using Composer
```
composer require woenel/prpcmblmts
```
2. Publish migration and seed files
```
php artisan vendor:publish --provider="Woenel\Prpcmblmts\ServiceProvider"
```
3. Run the following migrate artisan command
```
php artisan migrate --path="database/migrations/prpcmblmts"
```
4. Dump autoload using Composer
```
composer dump-autoload
```
5. Lastly, seed the data using the following seed artisan commands below
```
php artisan db:seed --class=PhilippineRegionsTableSeeder
php artisan db:seed --class=PhilippineProvincesTableSeeder
php artisan db:seed --class=PhilippineCitiesTableSeeder
php artisan db:seed --class=PhilippineBarangaysTableSeeder
```

## Credit
[National Statistical Coordination Board](http://www.nscb.gov.ph/)
