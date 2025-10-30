<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ExpositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $expositions = [
            ['title' => 'Industriële Revolutie', 'category' => 'geschiedenis', 'year' => '1760'],
            ['title' => 'Val van het Romeinse Rijk', 'category' => 'geschiedenis', 'year' => '476'],
            ['title' => 'Ottomaanse Rijk', 'category' => 'geschiedenis', 'year' => '1453'],
            ['title' => 'Napoleon Bonaparte', 'category' => 'figuren', 'year' => '1804'],
            ['title' => 'Winston Churchill', 'category' => 'figuren', 'year' => '1940'],
            ['title' => 'Faith Sultan Mehmet', 'category' => 'figuren', 'year' => '1453'],
            ['title' => 'Battle of Nicopolis', 'category' => 'gevechten', 'year' => '1396'],
            ['title' => 'Battle of Agincourt', 'category' => 'gevechten', 'year' => '1415'],
            ['title' => 'Battle of Hastings', 'category' => 'gevechten', 'year' => '1066'],
        ];

        foreach ($expositions as $expo) {
            DB::table('expositions')->insert([
                'title' => $expo['title'],
                'category' => $expo['category'],
                'description' => $faker->paragraph(5),
                'image' => $faker->imageUrl(640, 480, 'museum', true),
                'year' => $expo['year'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
