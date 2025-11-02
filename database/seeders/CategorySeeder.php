<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Fiction'],
            ['name' => 'Non-Fiction'],
            ['name' => 'Fantasy'],
            ['name' => 'Mystery'],
            ['name' => 'History'],
            ['name' => 'Science & Technology'],
            ['name' => 'Business & Economics'],
            ['name' => "Children"],
            ['name' => 'Poetry'],
            ['name' => 'Arts'],
            ['name' => 'Cooking'],
            ['name' => 'Others'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }
    }
}