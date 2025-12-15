<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ Super Admin Seeder
        $this->call([
            SuperAdminSeeder::class,
            SettingsSeeder::class,
        ]);

        // ✅ Future: Settings Seeder (Registration Mode, etc.)
        // $this->call(SettingsSeeder::class);

        // ❌ Removed: Test User (Not needed for production)
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
