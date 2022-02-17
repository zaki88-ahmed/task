<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use modules\Customers\Models\Customer;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make("123456"),
        ]);


    }
}
