<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinancialProjection extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('financial_projection_masters')->truncate();
        \DB::table('financial_projection_masters')->insert([
            ['name' => 'INVESTMENT IN PRODUCTION FACILITY '],
            ['name' => 'REVENUE FORECAST'],
            ['name' => 'EXPENDITURE FORECAST'],
            ['name' => 'NET PROFIT FORECAST'],
            ['name' => 'CASH FLOWS FROM BUSINESS OPERATIONS'],
        ]);
    }
}
