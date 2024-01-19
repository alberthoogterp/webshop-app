<?php

namespace Database\Seeders;

use App\Models\brand;
use App\Models\product;
use App\Models\subcategory;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Fake();

        for($i = 0; $i < 250; $i++){
            $product = product::create([
                "name"=>$faker->unique()->sentence(4, true),
                "brand_id"=>$faker->numberBetween(1,count(brand::all())),
                "description"=>$faker->text(),
                "price"=>$faker->randomFloat(2,0.50,2000),
                "stock"=>$faker->numberBetween(0,100)
            ]);

            $subIds = [];
            $faker->unique(true);
            for($j = 1; $j<$faker->numberBetween(2,6); $j++){
                array_push($subIds, $faker->unique()->numberBetween(1,count(subcategory::all())));
            }
            $product->subcategories()->attach($subIds);
        }
    }
}
