<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //make dummy data for my pictures table
        $pictures = [
            [
            'name' => 'picture1',
            'description' => 'Description for picture1',
            'url' => 'https://cdn.tatlerasia.com/tatlerasia/i/2022/05/17093301-111_cover_900x600.jpg',
            ],
            [
            'name' => 'picture2',
            'description' => 'Description for picture2',
            'url' => 'https://cdn.tatlerasia.com/tatlerasia/i/2022/05/17093301-111_cover_900x600.jpg',
            ],
            [
            'name' => 'picture3',
            'description' => 'Description for picture3',
            'url' => 'https://cdn.tatlerasia.com/tatlerasia/i/2022/05/17093301-111_cover_900x600.jpg',
            ],
            [
            'name' => 'picture4',
            'description' => 'Description for picture4',
            'url' => 'https://cdn.tatlerasia.com/tatlerasia/i/2022/05/17093301-111_cover_900x600.jpg',
            ],
            [
            'name' => 'picture5',
            'description' => 'Description for picture5',
            'url' => 'https://cdn.tatlerasia.com/tatlerasia/i/2022/05/17093301-111_cover_900x600.jpg',
            ],
        ];

        foreach ($pictures as $picture) {
            \DB::table('pictures')->insert($picture);
        }
    }
}
for ($i = 6; $i <= 30; $i++) {
    \DB::table('pictures')->insert([
        'name' => 'picture' . $i,
        'description' => 'Description for picture' . $i,
        'url' => 'https://cdn.tatlerasia.com/tatlerasia/i/2022/05/17093301-111_cover_900x600.jpg'
    ]);
}