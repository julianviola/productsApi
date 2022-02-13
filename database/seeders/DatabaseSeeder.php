<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::factory(5)->create(['name' => "MacBook Pro 13.3 Retina [MYD82] M1 Chip 256 GB - Space Gray", 
                'description' => "",
                'image' => "apple.com/v/macbook-pro/ac/images/overview/hero_13__d1tfa5zby7e6_large_2x.jpg", 
                'brand' => "Apple", 
                'price' => 2000, 
                'price_sale' => 1950, 
                'category' => "Macbook Pro", 
                'stock' => 5
            ]);
        
        Product::factory(50)->create();
    }
}
