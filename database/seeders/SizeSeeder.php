<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::create([
            'name' => 's'
        ]);
        Size::create([
            'name' => 'm'
        ]);
        Size::create([
            'name' => 'x'
        ]);
        Size::create([
            'name' => 'l'
        ]);
        Size::create([
            'name' => 'xl'
        ]);
    }
}
