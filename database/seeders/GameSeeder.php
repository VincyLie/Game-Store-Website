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
            'thumbnail' => '1-thumbnail.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.'
        ],
        [
            'title' => 'Dungeons of Edera',
            'category_id' => 5,
            'price' => 78000,
            'thumbnail' => 'dungeon.jpeg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Dungeons of Edera is a rogue-lite action RPG dungeon crawler featuring procedurally generated levels where you will battle through hordes of monsters to restore Edera to its former glory.'
        ],
        [
            'title' => 'Raft',
            'category_id' => 1,
            'price' => 115599,
            'thumbnail' => 'raft.jpeg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Raft throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea! Gather debris, scavenge reefs and build your own floating home, but be wary of the man-eating sharks!'
        ],
        [
            'title' => 'Counter-Strike: Global Offensive',
            'category_id' => 3,
            'price' => 119000,
            'thumbnail' => '1-thumbnail.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.'
        ],
        [
            'title' => 'Counter-Strike: Global Offensive',
            'category_id' => 3,
            'price' => 119000,
            'thumbnail' => '1-thumbnail.jpg',
            'slides' => '1-image1.jpg,1-image2,1-image3',
            'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.'
        ]
    
    ]);
        
    }
}
