# PRPCMBLMTS
Philippines region, province, cities/municipalities and barangays Laravel migration and table seeder.

> Version 2 is coming soon, featuring relationship capabilities and a host of other improvements.
>
> [YOU CAN CHECK THE DEV VERSION 2 HERE TO SEE WHAT'S NEW](https://github.com/woenel/prpcmblmts/tree/v2)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Packagist](https://img.shields.io/packagist/dt/woenel/prpcmblmts.svg)](https://packagist.org/packages/woenel/prpcmblmts)
[![GitHub stars](https://img.shields.io/github/stars/woenel/prpcmblmts.svg)](https://github.com/woenel/prpcmblmts)

## Requirements
- Laravel 5.5 to 11.x

## What's inside
- [x] Regions
- [x] Provinces
- [x] Cities/Municipalities
- [x] Barangays
- [ ] Relationships ([Moved to version 2.x](https://github.com/woenel/prpcmblmts/tree/v2))
- [ ] Supports every databases supported by Laravel ([Moved to version 2.x](https://github.com/woenel/prpcmblmts/tree/v2))

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
