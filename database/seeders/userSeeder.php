<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            "username"=>"admin",
            "password"=>Hash::make("adminpass"),
            "email"=>"albert_dino@live.nl"
        ]);

        $faker = fake();
        for($i = 0; $i < 20; $i++){
            user::create([
                "username"=>$faker->unique()->name(),
                "password"=>Hash::make("userpass"),
                "email"=>$faker->unique->email()
            ]);
        }
    }
}
