<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use modules\DataProviderX\Models\DataProviderX;

class DataProviderXSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DataProviderX::create([
            'parentAmount' => 280,
            'currency' => 'EUR',
            'parentEmail' => 'parent1@parent.eu',
            'statusCode' => 1,
            'registerationDate' => '2018-11-30',
            'parentIdentification' => 'd3d29d70-1d25-11e3-8591-034165a3a613',
        ]);

        DataProviderX::create([
            'parentAmount' => 200.5,
            'currency' => 'USD',
            'parentEmail' => 'parent2@parent.eu',
            'statusCode' => 2,
            'registerationDate' => '2018-01-01',
            'parentIdentification' => 'd3d29d70-1d25-11e3-8591-034165a3a613',
        ]);

        DataProviderX::create([
            'parentAmount' => 500,
            'currency' => 'EGP',
            'parentEmail' => 'parent3@parent.eu',
            'statusCode' => 1,
            'registerationDate' => '2018-02-27',
            'parentIdentification' => '4erert4e-2www-wddc-8591-034165a3a613',
        ]);

        DataProviderX::create([
            'parentAmount' => 400,
            'currency' => 'AED',
            'parentEmail' => 'parent4@parent.eu',
            'statusCode' => 1,
            'registerationDate' => '2019-09-07',
            'parentIdentification' => 'd3dwwd70-1d25-11e3-8591-034165a3a613',
        ]);

        DataProviderX::create([
            'parentAmount' => 200,
            'currency' => 'EUR',
            'parentEmail' => 'parent5@parent.eu',
            'statusCode' => 1,
            'registerationDate' => '2018-10-30',
            'parentIdentification' => 'd3d29d40-1d25-11e3-8591-034165a3a6133',
        ]);


    }
}
