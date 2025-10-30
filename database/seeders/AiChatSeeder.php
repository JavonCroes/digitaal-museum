<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AiChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 9) as $expoId) {
            foreach (range(1, 3) as $i) {
                DB::table('ai_chats')->insert([
                    'exposition_id' => $expoId,
                    'question' => $faker->sentence(),
                    'answer' => $faker->paragraph(),
                    'created_at' => now(),
                ]);
            }
        }
    }
}
