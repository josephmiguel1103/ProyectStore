<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Jose Migue Condo Huamani',
            'email' => 'miguel@gmail.com',
            'password'=> bcrypt(12345678)
        ]);

        User::create([
            'name'=>'Harry Jack Ascuña Mamani',
            'email'=>'harry.ascuna@upeu.edu.pe',
            'password'=>bcrypt('12345678')
        ]);


    }
}
