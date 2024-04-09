<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vineyards;
use App\Models\Wines;
use App\Models\Winetypes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Vineyards::factory(10)->create();
        Winetypes::factory(10)->create();
        Wines::factory(20)->create();
    }
}
