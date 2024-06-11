<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory(10)->create();

        foreach ($products as $product) {
            Image::factory(1)->forProduct($product)->create([
                // 'imageable_id' => $product->id,
                // 'imageable_type' => Product::class,
            ]);

        }
    }
}




