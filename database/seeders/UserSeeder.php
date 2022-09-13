<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        User::query()->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => 'user1',
        ]);
        User::query()->create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => 'user2',
        ]);
        User::query()->create([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => 'user3',
        ]);
        User::query()->create([
            'name' => 'user4',
            'email' => 'user4@gmail.com',
            'password' => 'user4',
        ]);
    }
}
