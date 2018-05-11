# PRPCMBLMTS
Philippines region, province, cities/municipalities and barangays Laravel migration and table seeder.

## Requirements
- Laravel 5.*

Note: I only tested it on **Laravel 5.6** but it should work fine on lower versions.

## What's inside
- [x] Regions
- [x] Provinces
- [x] Cities/Municipalities
- [ ] Barangays*

*I'm still working on seeder for barangays table.

## Future plans
- [ ] Eloquent relationship*
- [ ] Composer installer

*This would really take time to do and finish, if you'd like to help, I would gladly appreciate. Let's help our fellow Filipino programmers to ease their development.

## Instructions (Migration and seeding)
1. First, [Download](https://github.com/woenel/prpcmblmts/archive/master.zip), extract and paste the `database` folder inside your Laravel project.
2. Run the following migrate artisan command: `php artisan migrate --path=database/migrations/prpcmblmts`
3. Finally, seed the data using the following seed artisan commands below:
```
php artisan db:seed --class=PhilippineRegionsTableSeeder
php artisan db:seed --class=PhilippineProvincesTableSeeder
php artisan db:seed --class=PhilippineCitiesTableSeeder
```

## Contribution
Contribute by updating the data of regions, provinces, cities/municipalities or barangays, or by squashing bugs and errors.

## Credits
[National Statistical Coordination Board](http://www.nscb.gov.ph/)
