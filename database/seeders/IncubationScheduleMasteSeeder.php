<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IncubationScheduleMasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('incubation_schedule_masters')->truncate();
        \DB::table('incubation_schedule_masters')->insert([
            ['name' => 'NO. OF NEW STARTUPS TO BE ADMITTED FOR INCUBATION'],
            ['name' => 'NO. OF START-UPS TO BE GRADUATED FROM THE INCUBATOR'],
            ['name' => 'NO. OF TRAINING / INCUBATION / ACCELERATION PROGRAMMES TO BE CONDUCTED'],
            ['name' => 'NO. OF INCUBATEE RESOURCES TO BE TRAINED'],
            ['name' => 'NO. OF CONFERENCES / SEMINARS / WORKSHOPS TO BE ORGANISED'],
        ]);
    }
}
