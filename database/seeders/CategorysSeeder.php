<?php

namespace Database\Seeders;

use App\Models\categorys;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        categorys::factory(20)->create();
     }
}
