<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::insert([[
                'game_id' => '1',
                'name' => '1-image1.jpg',
            ],
            [
                'game_id' => '1',
                'name' => '1-image2.jpg',
            ],
            [
                'game_id' => '1',
                'name' => '1-image3.jpg',
            ],
            [
                'game_id' => '2',
                'name' => '2-image1.jpg',
            ],
            [
                'game_id' => '2',
                'name' => '2-image2.jpg',
            ],
            [
                'game_id' => '2',
                'name' => '2-image3.jpg',
            ],
            [
                'game_id' => '3',
                'name' => '3-image1.jpg',
            ],
            [
                'game_id' => '3',
                'name' => '3-image2.jpg',
            ],
            [
                'game_id' => '3',
                'name' => '3-image3.jpg',
            ],
            [
                'game_id' => '4',
                'name' => '4-image1.jpg',
            ],
            [
                'game_id' => '4',
                'name' => '4-image2.jpg',
            ],
            [
                'game_id' => '4',
                'name' => '4-image3.jpg',
            ],
            [
                'game_id' => '5',
                'name' => '5-image1.jpg',
            ],
            [
                'game_id' => '5',
                'name' => '5-image2.jpg',
            ],
            [
                'game_id' => '5',
                'name' => '5-image3.jpg',
            ],
           
        ]);
    }
}
