<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class QuizScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $i) {
            DB::table('quiz_scores')->insert([
                'exposition_id' => $faker->numberBetween(1, 9),
                'user_name' => $faker->userName(),
                'score' => $faker->numberBetween(0, 10),
                'created_at' => now(),
            ]);
        }
    }
}
