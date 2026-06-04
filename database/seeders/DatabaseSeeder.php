<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    { 
        \Log::info('Seeding 10,000 users into the database.');
        User::factory(10000)->create();
       
        User::create([
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => 'adminadmin',
        ]);

        $this->call([CategorySeeder::class]);
        $this->call([CarSeeder::class]);
    }
}
