<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhilippineBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('philippine_barangays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('psgc_code')->index();
            $table->string('name');
            $table->string('region_code')->index();
            $table->string('province_code')->index();
            $table->string('city_code')->index();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('philippine_barangays');
    }
}
