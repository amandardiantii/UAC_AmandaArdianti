<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Hobby;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Hobby::create([
            'name' => 'Reading'
        ]);
        Hobby::create([
            'name' => 'Travelling'
        ]);
        Hobby::create([
            'name' => 'Gardening'
        ]);
        Hobby::create([
            'name' => 'Cooking'
        ]);
        Hobby::create([
            'name' => 'Painting'
        ]);
    }
}
