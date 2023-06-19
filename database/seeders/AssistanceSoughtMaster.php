<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssistanceSoughtMaster extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('assistance_sought_masters')->truncate();
        \DB::table('assistance_sought_masters')->insert([
            ['type' => 'CAPITAL SUBSIDY / ASSISTANCE'],
            ['type' => 'REIMBURSEMENT OF STAMP DUTY/REGISTRATION FEE/LANDCONVERSION PREMIUM'],
            ['type' => 'REIMBURSEMENT OF POWER TARIFF SUBSIDY AND ELECTRICITY DUTY'],
            ['type' => 'PATENT ASSISTANCE'],
            ['type' => 'ASSISTANCE FOR COLLEGES/UNIVERSITIES/ R&D INSTITUTE / FINISHING SCHOOL'],
            ['type' => 'CO-FINANCING FOR INDUSTRY SPONSORED RESEARCH/RESEARCH GRANTS/BIO-INNOVATION FELLOWSHIP'],
            ['type' => 'SKILL CERTIFICATION GRANT'],
            ['type' => 'MARKET DEVELOPMENT'],
        ]);
    }
}
