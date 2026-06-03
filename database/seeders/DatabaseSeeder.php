<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed kategori
        $this->call(CategorySeeder::class);

        // Seed user (admin + user)
        $this->call(UserSeeder::class);

        // Dummy product (50 data)
        Product::factory(50)->create();

        // User test tambahan (opsional)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}