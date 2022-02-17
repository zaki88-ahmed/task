<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use modules\DataProviderY\Models\DataProviderY;

class DataProviderYSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DataProviderY::create([
            'balance' => 354.5,
            'currency' => 'AED',
            'email' => 'parent100@parent.eu',
            'status' => 100,
            'created_at' => 22/12/2018,
            'id' => '3fc2-a8d1',
        ]);

        DataProviderY::create([
            'balance' => 1000,
            'currency' => 'USD',
            'email' => 'parent200@parent.eu',
            'status' => 100,
            'created_at' => 22/12/2018,
            'id' => '4fc2-a8d1',
        ]);

        DataProviderY::create([
            'balance' => 560,
            'currency' => 'AED',
            'email' => 'parent300@parent.eu',
            'status' => 200,
            'created_at' => 22/12/2018,
            'id' => '4fc2-a8d1',
        ]);

        DataProviderY::create([
            'balance' => 222,
            'currency' => 'USD',
            'email' => 'parent400@parent.eu',
            'status' => 300,
            'created_at' => 11/11/2018,
            'id' => 'sfc2-e8d1',
        ]);

        DataProviderY::create([
            'balance' => 130,
            'currency' => 'EUR',
            'email' => 'parent500@parent.eu',
            'status' => 200,
            'created_at' => 02/8/2019,
            'id' => '4fc3-a8d2',
        ]);
    }
}
