<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EntityType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('entity_types')->truncate();
        \DB::table('entity_types')->insert([
            ['name' => 'PROPRIETORSHIP'],
            ['name' => 'PARTNERSHIP'],
            ['name' => 'COMPANY'],
        ]);
    }
}
