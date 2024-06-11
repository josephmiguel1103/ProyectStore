<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory(5)->create();

        foreach ($categories as $category) {
            Image::factory(1)->forCategory( $category)->create([
                // 'imageable_id' => $category->id,
                // 'imageable_type' => Category::class,
            ]);

        }
}
}
