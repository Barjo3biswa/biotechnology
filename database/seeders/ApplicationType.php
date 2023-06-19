<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('application_types')->truncate();
        \DB::table('application_types')->insert([
            ['name' => 'AnnexureIA'],
            ['name' => 'AnnexureIB'],
            ['name' => 'AnnexureIC'],
            ['name' => 'AnnexureID'],
        ]);
    }
}
