<?php

namespace Database\Seeders;

use App\Models\brand;
use Illuminate\Database\Seeder;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = fake();

        for($i=0; $i<182; $i++){
            brand::create([
                "name"=>$faker->unique()->word()
            ]);
        }
    }
}
