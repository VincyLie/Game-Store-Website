<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::insert([[
            'title' => 'Counter-Strike: Global Offensive',
            'category_id' => 3,
            'price' => 119000,
            'thumbnail' => 'csgo.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.'
        ],
        [
            'title' => 'Dungeons of Edera',
            'category_id' => 5,
            'price' => 78000,
            'thumbnail' => 'dungeon.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Dungeons of Edera is a rogue-lite action RPG dungeon crawler featuring procedurally generated levels where you will battle through hordes of monsters.'
        ],
        [
            'title' => 'Raft',
            'category_id' => 1,
            'price' => 115599,
            'thumbnail' => 'raft.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Raft throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea!'
        ],
        [
            'title' => 'Age of Empires IV',
            'category_id' => 2,
            'price' => 249999,
            'thumbnail' => 'age-of-empire.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'One of the most beloved real-time strategy games returns to glory with Age of Empires IV, putting you at the center of epic historical battles that shaped the world.'
        ],
        [
            'title' => 'FIFA 22',
            'category_id' => 4,
            'price' => 999000,
            'thumbnail' => 'fifa22.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.'
        ]
    
    ]);
        
    }
}
