<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\CategorySeeder; 

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        
        $this->call(CategorySeeder::class);

       
        Product::factory(50)->create();

        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
