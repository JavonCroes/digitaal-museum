<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exposition;
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
            //  Geschiedenis
            [
                'title' => 'Industriële Revolutie',
                'category' => 'geschiedenis',
                'year' => 1760,
                'image' => 'images/industrial-revolution-block.jpg',
                'description' => $faker->paragraph(5),
            ],
            [
                'title' => 'Val van het Romeinse Rijk',
                'category' => 'geschiedenis',
                'year' => 476,
                'image' => 'images/romeinse-rijk-block-2.jpg',
                'description' => $faker->paragraph(5),
            ],
            [
                'title' => 'Ottomaanse Rijk',
                'category' => 'geschiedenis',
                'year' => 1299,
                'image' => 'images/ottoman-empire-block.png',
                'description' => $faker->paragraph(5),
            ],

            //  Figuren
            [
                'title' => 'Napoleon Bonaparte',
                'category' => 'figuren',
                'year' => 1769,
                'image' => 'images/napoleon.jpg',
                'description' => $faker->paragraph(5),
            ],
            [
                'title' => 'Winston Churchill',
                'category' => 'figuren',
                'year' => 1874,
                'image' => 'images/churchill.jpg',
                'description' => $faker->paragraph(5),
            ],
            [
                'title' => 'Fatih Sultan Mehmet',
                'category' => 'figuren',
                'year' => 1432,
                'image' => 'images/fatih-sultan-mehmet.jpg',
                'description' => $faker->paragraph(5),
            ],

            //  Gevechten 
            [
                'title' => 'Slag bij Hastings',
                'category' => 'gevechten',
                'year' => 1066,
                'image' => 'images/hastings.jpg',
                'description' => $faker->paragraph(5),
            ],
            [
                'title' => 'Slag bij Agincourt',
                'category' => 'gevechten',
                'year' => 1415,
                'image' => 'images/agincourt.jpg',
                'description' => $faker->paragraph(5),
            ],
            [
                'title' => 'Slag bij Nicopolis',
                'category' => 'gevechten',
                'year' => 1396,
                'image' => 'images/nicopolis.jpg',
                'description' => $faker->paragraph(5),
            ],
        ];

        foreach ($expositions as $expo) {
            Exposition::create($expo);
        }
    }
}
