# PRPCMBLMTS
Philippines region, province, cities/municipalities and barangays Laravel migration and table seeder.

## Requirements
- Laravel 5.*

Note: I didn't test it on lower version of Laravel but you can give it a try.

## Migration and seeding
1. First, [Download](https://github.com/woenel/prpcmblmts/archive/master.zip) and extract it to your project.
2. After you extract, paste this code to your `DatabaseSeeder.php` file (under `database > seeds` folder):
```
public function run()
{
    $this->call(PhilippineRegionsTableSeeder::class);
    $this->call(PhilippineProvincesTableSeeder::class);
    $this->call(PhilippineCitiesTableSeeder::class);
}
```
3. If you have existing data on your database, you must backup first before you do the next step.
4. Run the migrate and seed artisan command:
```
php artisan migrate:refresh --seed

// Note: The command above will refresh the tables of your database and the stored data will be lost.
```
