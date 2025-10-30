<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 9) as $expoId) {
            foreach (range(1, 6) as $i) {
                DB::table('quiz_questions')->insert([
                    'exposition_id' => $expoId,
                    'question' => $faker->sentence(),
                    'option_a' => $faker->word(),
                    'option_b' => $faker->word(),
                    'option_c' => $faker->word(),
                    'option_d' => $faker->word(),
                    'correct_option' => $faker->randomElement(['A','B','C','D']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
