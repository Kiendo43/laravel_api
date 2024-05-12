<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Database\Factories;
use Illuminate\Database\factory;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // factory(customer::class, 10)->create();
        Customer::factory(10)->create();
    }
}
;
