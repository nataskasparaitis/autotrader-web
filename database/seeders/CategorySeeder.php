<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Sedan', 'description' => 'Comfortable 4-door cars'],
            ['name' => 'SUV', 'description' => 'Sport utility vehicles'],
            ['name' => 'Sports Car', 'description' => 'High-performance coupes'],
            ['name' => 'Truck', 'description' => 'Pickup trucks for hauling'],
            ['name' => 'Electric', 'description' => 'Battery electric vehicles'],
            ['name' => 'Luxury', 'description' => 'High-end premium vehicles'],
            ['name' => 'Hatchback', 'description' => 'Compact with rear door'],
            ['name' => 'Convertible', 'description' => 'Open-top cars'],
            ['name' => 'Minivan', 'description' => 'Family vans'],
            ['name' => 'Crossover', 'description' => 'SUV-like hatchbacks'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
