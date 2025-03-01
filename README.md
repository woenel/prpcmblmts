# PRPCMBLMTS
A Laravel package for Philippine addresses, including regions, provinces, cities/municipalities, and barangays, complete with migration and seeding functionality. Includes built-in Eloquent relationship support for seamless querying of related data.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Packagist](https://img.shields.io/packagist/dt/woenel/prpcmblmts.svg)](https://packagist.org/packages/woenel/prpcmblmts)
[![GitHub stars](https://img.shields.io/github/stars/woenel/prpcmblmts.svg)](https://github.com/woenel/prpcmblmts)

> [!WARNING]
> This is a pre-release version and is still experimental. It may not be fully stable, so please use it with caution and report any issues you encounter.

## Requirements
-   Laravel 8.x to 12.x
-   PHP 8.x or higher

## Features
-   [x] Regions
-   [x] Provinces
-   [x] Cities/Municipalities
-   [x] Barangays
-   [x] NEW: Relationships between Regions, Provinces, Cities, and Barangays
-   [x] NEW: Compatible [with all databases supported by Laravel](https://laravel.com/docs/database#introduction)

## Installation

### Step 1: Install the Package via Composer
Run the following command to install the package:
```
composer require woenel/prpcmblmts "^2.x-dev"
```

### Step 2: Run the Migrations and Seed the Database
After installing the package, you can run the migrations and seed the database with the following Artisan command:
```
php artisan philippines:run
```
The `philippines:run` command will:
1.  Publish the migration and seeder files.
2.  Run the migrations to create the necessary tables.
3.  Seed the database with the Philippine region, province, city, and barangay data.

## Usage
Once the package is installed and the database is populated, you can query the data using the `Philippines` class. The queries work just like Laravel Eloquent, so you can use all of Laravel’s query builder methods.

### Basic Usage Example

To start using the data, instantiate the `Philippines` class:
```
use Woenel\Prpcmblmts\Philippines;

$philippines = new Philippines;
```

### Query Regions, Provinces, Cities, and Barangays
You can access regions, provinces, cities, and barangays with the following methods:
```
// Query all regions
$regions = $philippines->regions()->get();
```
```
// Query a specific region by ID
$region = $philippines->regions()->where('id', 1)->first();
```
```
// Query all provinces
$provinces = $philippines->provinces()->get();
```
```
// Query a specific province by ID
$province = $philippines->provinces()->where('id', 1)->first();
```
```
// Query all cities/municipalities
$cities = $philippines->cities()->get();
```
```
// Query a specific city by ID
$city = $philippines->cities()->where('id', 1)->first();
```
```
// Query all barangays
$barangays = $philippines->barangays()->get();
```
```
// Query a specific barangay by ID
$barangay = $philippines->barangays()->where('id', 1)->first();
```
These queries use Laravel’s Eloquent ORM methods. You can filter, sort, paginate, and perform relationships just like you would with any Eloquent model.

### Relationships Between Regions, Provinces, Cities, and Barangays
The package supports relationships between regions, provinces, cities, and barangays, allowing you to easily query related data.
- **Region -> Provinces**: Retrieve provinces within a specific region.
- **Province -> Cities**: Retrieve cities within a specific province.
- **City -> Barangays**: Retrieve barangays within a specific city.
- **Province -> Region**: Retrieve the region of a specific province.
- **City -> Province**: Retrieve the province of a specific city.
- **Barangay -> City**: Retrieve the city of a specific barangay.


### Example 1: Query Provinces within a Region
To get all provinces in a specific region (e.g., Region ID 1):
```
$provinces_in_region = $philippines->regions()->where('id', 1)->first()->provinces;
```
This query first finds the region by its ID and then retrieves all related provinces under that region.

### Example 2: Query Cities within a Province
To retrieve all cities within a specific province (e.g., Province ID 1):
```
$cities_in_province = $philippines->provinces()->where('id', 1)->first()->cities;
```
This retrieves all cities under the province by querying the `cities()` relationship.

### Example 3: Get Barangays in a Specific City
To get all barangays within a specific city (e.g., City ID 1):
```
`$barangays_in_city = $philippines->cities()->where('id', 1)->first()->barangays;
```
This allows you to query the barangays within a specific city using the `barangays()` relationship.

### Example 4: Paginate Results
You can paginate results just like with any other Eloquent query:
```
// Paginate regions (10 per page)
$paginated_regions = $philippines->regions()->paginate(10);
```

### Example 5: Eager Load Relationships
You can also eager load relationships to reduce the number of queries. For example, to get all provinces with their cities:
```
$provinces_with_cities = $philippines->provinces()->with('cities')->get();
```
This will retrieve all provinces along with their cities in a single query, improving performance.

## **Important Warning: Handling Barangays Data**
The barangay dataset contains over **40,000 records**. Running a query such as `->get()` on the `barangays()` method might result in a significant performance hit, especially for large datasets. It’s recommended to avoid loading all barangays at once.

Instead, you can paginate or filter results to improve performance:
```
// Paginate barangays (10 per page)
$paginated_barangays = $philippines->barangays()->paginate(10);
```
Alternatively, query specific barangays with filters:
```
// Query barangays with a specific filter
$barangays = $philippines->barangays()->where('city_code', 1)->get();
``` 
This approach will help you manage memory and performance effectively.

## Extending Models
If you want to customize or extend the functionality of the existing models (such as `PhilippineRegion`, `PhilippineProvince`, `PhilippineCity`, or `PhilippineBarangay`), you can easily extend any of these models by creating your own model and adding additional logic or attributes as needed.

For example, to extend the `PhilippineRegion` model:

```
namespace App\Models;

use Woenel\Prpcmblmts\Models\PhilippineRegion;

class CustomRegion extends PhilippineRegion {
    // Add custom functionality or properties here
}
```

You can then use your custom model throughout your application instead of the default model:
```
$regions = CustomRegion::get();
```
This allows you to tailor the models to fit your specific application needs.

## Using Facades
For a more convenient approach, you can utilize Laravel’s facade for `Philippines`:
```
use Woenel\Prpcmblmts\Facades\Philippines;

$regions = Philippines::regions()->get();
$region = Philippines::regions()->where('id', 1)->first();
$provinces_in_region = Philippines::regions()->where('id', 1)->first()->provinces;
```
This eliminates the need to instantiate the `Philippines` class manually and allows you to call the methods directly via the facade.

## Credit
This package is based on the [Philippine Standard Geographic Code (PSGC)](https://psa.gov.ph/classification/psgc) dataset, which provides a structured classification of geographical regions, provinces, cities, and barangays in the Philippines.

Made with ♥ by [Ronnel R. Martinez (@woenel)](https://github.com/woenel)
