<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class portfolio_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        use Illuminate\Database\Seeder;
        use Faker\Factory as Faker;
        
        class nome_seeder extends Seeder
        {
            public function run()
            {
                $faker = Faker::create();
                
                for($i = 0; $i < 10; $i++) {
                    User::create([
                        'name' => $faker->name(),
                        'email' => $faker->email(),
                        'password' => Hash::make('password'),
                    ]);
                }
            }
        }
    }
}
