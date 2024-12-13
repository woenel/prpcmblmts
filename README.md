# PRPCMBLMTS
Philippines region, province, cities/municipalities and barangays Laravel migration and table seeder.

![MIT License](https://img.shields.io/badge/license-MIT-blue)

## Requirements
- Laravel 5.5 to 11.x

## What's inside
- [x] Regions
- [x] Provinces
- [x] Cities/Municipalities
- [x] Barangays

## Installation
1. Install using Composer
```
composer require woenel/prpcmblmts "^1.1"
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
5. Lastly, seed the data using the following seed artisan command below
```
php artisan db:seed --class=PhilippineSeeder
```

## Credit
[Philippine Standard Geographic Code (PSGC)](https://psa.gov.ph/classification/psgc)
