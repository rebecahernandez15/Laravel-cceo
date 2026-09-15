<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {


        for ($i = 0; $i < 20; $i++) {
            Category::create(
                [
                    'title' => "Categoria $i",
                    'slug' => "categoria-$i"
                ]
            );
        }
    }
}
