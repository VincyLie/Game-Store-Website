<?php

namespace Database\Seeders;

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
    }
}
