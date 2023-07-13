<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class scheduleMaster extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('recruitment_schedule_masters')->truncate();
        \DB::table('recruitment_schedule_masters')->insert([
            ['name' => 'Investment (In Rs.)'],
            ['name' => 'Turnover (In Rs.)'],
            ['name' => 'Domestic (In Rs.)'],
            ['name' => 'Exports (In Rs.)'],
            ['name' => 'Employees (In No.)'],
        ]);
    }
}
