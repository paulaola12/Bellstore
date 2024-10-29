<?php

namespace Database\Seeders;

use App\Models\products;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        products::factory(20)->create();
    }
}
