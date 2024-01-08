<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['name' => 'Hair Accessories']);
        Category::create(['name' => 'Stationaries']);
        Category::create(['name' => 'Clothing']);
        Category::create(['name' => 'Kids Accessories']);
        Category::create(['name' => 'Jwellery']);
        Category::create(['name' => 'Scrunchies']);
        Category::create(['name' => 'Cosmetics']);
        Category::create(['name' => 'Lifestyle Products']);
        Category::create(['name' => 'Bags']);
        Category::create(['name' => 'General']);
        Category::create(['name' => 'Gifts&Combo Offers']);
    }
}
