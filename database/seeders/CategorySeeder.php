<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([[
            'name' => 'Sandbox'
        ],
        [
            'name' => 'RTS'
        ],
        [
            'name' => 'Shooter'
        ],
        [
            'name' => 'Sports'
        ],
        [
            'name' => 'RPG'
        ]]);
    }
}
