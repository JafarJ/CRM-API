<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1], [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$0ORPf2YITkK4X6NgnREb1e.lmN9CQfSrkIyr5XXUj4q5xF8RnJkUu', //password
            'role' => 'admin'
        ]);
    }
}
