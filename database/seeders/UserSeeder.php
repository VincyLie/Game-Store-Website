<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Andi',
            'email' => 'admin1@gmail.com',
            'password' => '$2a$12$YIv5DBMBqu64jq1Db1pTo.hvMq7YXgqr/cFpQvpWyMkwg3IKZvpR2',
            'role_id' => '1'
        ]);
        User::insert([
            'name' => 'Bagus',
            'email' => 'user1@gmail.com',
            'password' => '$2a$12$TZ7hdADwmtzqe7a043QFQ.FakJnHDzgTOzqyKCQsLchvcVY7PZR5W',
            'role_id' => '2'
        ]);
    }
}
