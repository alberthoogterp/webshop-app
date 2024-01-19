<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create([
            "name" => "Electronics"
        ]);
        category::create([
            "name" => "Media"
        ]);
        category::create([
            "name" => "Health & Beauty"
        ]);
        category::create([
            "name" => "Clothing & Accessories"
        ]);
        category::create([
            "name" => "Home & Cleaning"
        ]);
        category::create([
            "name" => "Office & School"
        ]);
        category::create([
            "name" => "Garden & Outdoors"
        ]);
        category::create([
            "name" => "Books"
        ]);
        category::create([
            "name" => "Toys"
        ]);
    }
}
