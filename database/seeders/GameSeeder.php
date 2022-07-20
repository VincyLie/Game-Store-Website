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
       
        Game::create([
            'title' => 'Counter-Strike: Global Offensive',
            'category_id' => 3,
            'price' => 119000,
            'thumbnail' => 'csgo.jpg',
            'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Dungeons of Edera',
            'category_id' => 5,
            'price' => 78000,
            'thumbnail' => 'dungeon.jpg',
            'description' => 'Dungeons of Edera is a rogue-lite action RPG dungeon crawler featuring procedurally generated levels where you will battle through hordes of monsters.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Raft',
            'category_id' => 1,
            'price' => 115599,
            'thumbnail' => 'raft.jpg',
            'description' => 'Raft throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea!',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Age of Empires IV',
            'category_id' => 2,
            'price' => 249999,
            'thumbnail' => 'age-of-empire.jpg',
            'description' => 'One of the most beloved real-time strategy games returns to glory with Age of Empires IV, putting you at the center of epic historical battles that shaped the world.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'FIFA 22',
            'category_id' => 4,
            'price' => 999000,
            'thumbnail' => 'fifa22.jpg',
            'description' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'NBA 2K22',
            'category_id' => 4,
            'price' => 100000,
            'thumbnail' => 'NBA-2k22.jpg',
            'description' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'WWE 2K22',
            'category_id' => 4,
            'price' => 72000,
            'thumbnail' => 'WWE-2k22.jpg',
            'description' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Football Manager 2022',
            'category_id' => 4,
            'price' => 189000,
            'thumbnail' => 'Football-Manager-2022.jpg',
            'description' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Pro Soccer Online',
            'category_id' => 4,
            'price' => 340000,
            'thumbnail' => 'Pro-Soccer-Online.jpg',
            'description' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',
            'positive' => 0
        ]);
        //Sandbox
        Game::create([
            'title' => 'Arma 3',
            'category_id' => 1,
            'price' => 68000,
            'thumbnail' => 'Arma3.jpg',
            'description' => 'Experience true combat gameplay in a massive military sandbox. Deploying a wide variety of single- and multiplayer content, over 20 vehicles and 40 weapons, and limitless opportunities for content creation, this is the PC’s premier military game. Authentic, diverse, open - Arma 3 sends you to war.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Planet Zoo',
            'category_id' => 1,
            'price' => 108900,
            'thumbnail' => 'Planet-Zoo.jpg',
            'description' => 'Build a world for wildlife in Planet Zoo. From the developers of Planet Coaster and Zoo Tycoon comes the ultimate zoo sim. Construct detailed habitats, manage your zoo, and meet authentic living animals who think, feel and explore the world you create around them.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Terraria',
            'category_id' => 1,
            'price' => 173090,
            'thumbnail' => 'Terraria.jpg',
            'description' => 'Dig, fight, explore, build! Nothing is impossible in this action-packed adventure game. Four Pack also available!',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Stardew',
            'category_id' => 1,
            'price' => 427000,
            'thumbnail' => 'Stardew-Valley.jpg',
            'description' => 'Stardew Valley is a simulation role-playing video game developed by Eric "ConcernedApe" Barone. Players take the role of a character who takes over their deceased grandfather.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Warpips',
            'category_id' => 1,
            'price' => 112999,
            'thumbnail' => 'Warpips.jpg',
            'description' => 'Warpips is the ultimate quick to learn but amazingly deep tug-of-war strategy game. Deploy the right composition of soldiers, tanks, helicopters and planes in this tight, streamlined strategy-focused war game. Compose the best army, research the right tech; overwhelm your enemy!',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Spidersaurs',
            'category_id' => 3,
            'price' => 108999,
            'thumbnail' => 'Spidersaurs.jpg',
            'description' => 'The nightmarish dinosaur-spider hybrids known as Spidersaurs have run amok! Armed with an arsenal of awesome weapons, it’s up to you (and a friend in co-op mode) to shoot your way through six levels of ferocious run-’n’-gun mayhem and send these mutant ',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Aliens Vs. Ghosts',
            'category_id' => 3,
            'price' => 56899,
            'thumbnail' => 'AliensVsGhosts.jpg',
            'description' => 'Use Nukes, Electricity, Freeze Rays, Heat Rays and powerful Minions to defeat all the Ghosts in this wave-based first person shooter! Only Ghosts stand in the way of your invasion of Earth.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'POSTAL: Brain Damaged',
            'category_id' => 3,
            'price' => 154999,
            'thumbnail' => 'POSTAL.jpg',
            'description' => 'POSTAL: Brain Damaged is a new, action-oriented take on the Running With Scissors’ cult game series with throwback graphics, and fast-paced, modern gameplay. Take a wild roller coaster ride through the twisted wonderland encased in the POSTAL DUDE’S messed-up mind.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Ace Breakout',
            'category_id' => 3,
            'price' => 74300,
            'thumbnail' => 'AceBreakout.jpg',
            'description' => 'A top down shooter game fighting against large swarms of insects alone, or recruit friends to fight along side you! Buy and craft new equipment to help you rid the world of the swarm!',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Hearts of Iron IV',
            'category_id' => 2,
            'price' => 350999,
            'thumbnail' => 'HeartsofIronIV.jpg',
            'description' => 'Victory is at your fingertips! Your ability to lead your nation is your supreme weapon, the strategy game Hearts of Iron IV lets you take command of any nation in World War II; the most engaging conflict in world history.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Dune: Spice Wars',
            'category_id' => 2,
            'price' => 299999,
            'thumbnail' => 'dune-spice-wars.jpg',
            'description' => 'A 4X real-time strategy game from the developers of the critically acclaimed Northgard. Set in Frank Herbert’s groundbreaking Dune universe, you must lead your faction and battle for control and dominance over the harsh desert planet of Arrakis.',
            'positive' => 0
        ]);
        Game::create([
            'title' => 'Valheim',
            'category_id' => 5,
            'price' => 108999,
            'thumbnail' => 'Valheim.jpg',
            'description' => 'A brutal exploration and survival game for 1-10 players, set in a procedurally-generated purgatory inspired by viking culture. Battle, build, and conquer your way to a saga worthy of Odin’s patronage!',
            'positive' => 0
        ]);
    }
}
