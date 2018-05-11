<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MastersTableSeeder::class);
        $this->call(LeadSurveyorsTableSeeder::class);
        $this->call(SurveyorsTableSeeder::class);
        $this->call(SurveyorLocationsTableSeeder::class);
        $this->call(SurveysTableSeeder::class);
        $this->call(SurveyQuestionsTableSeeder::class);
        $this->call(SurveyAnswersTableSeeder::class);
        $this->call(RespondentsTableSeeder::class);
        $this->call(RespondentDengvaxiaHistoriesTableSeeder::class);
        $this->call(RespondentSurveyAnswersTableSeeder::class);
        $this->call(PhilippineRegionsTableSeeder::class);
        $this->call(PhilippineProvincesTableSeeder::class);
        $this->call(PhilippineCitiesTableSeeder::class);
        // $this->call(PhilippineBarangaysTableSeeder::class);
    }
}
