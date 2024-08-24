<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Startup',
                'slug' => 'startup'
            ], 
            [
                'name' => 'Life',
                'slug' => 'life'
            ],
            [
                'name' => 'Life Lessons',
                'slug' => 'life-lessons'
            ],
            [
                'name' => 'Politics',
                'slug' => 'politics'
            ],
            [
                'name' => 'Travel',
                'slug' => 'travel'
            ],
            [
                'name' => 'Poetry',
                'slug' => 'poetry'
            ],
            [
                'name' => 'Entrepreneurship',
                'slug' => 'entrepreneurship'
            ],
            [
                'name' => 'Education',
                'slug' => 'education'
            ],
            [
                'name' => 'Health',
                'slug' => 'health'
            ],
            [
                'name' => 'Food',
                'slug' => 'food'
            ],
            [
                'name' => 'Design',
                'slug' => 'design'
            ],
            [
                'name' => 'Music',
                'slug' => 'music'
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology'
            ],
        ]);
    }
}
