<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Database\Seeder;

class subcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = fake();
        $faker->unique(true);
        for($i=1; $i<=count(category::all()); $i++){
            for($j=0; $j<$faker->numberBetween(3,8); $j++){
                subcategory::create([
                    "category_id"=>$i,
                    "name"=>$faker->unique()->word()
                ]);
            }
        }
    }
}
