<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i = 0; $i < 30; $i++) {
            $c = Category::first();
        }

        $title=Str::random(20);

        Post::create([
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aperiam</p>",
            'category_id' => $c->id,
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae ",
            'posted' => 'not',
            'image' => "image_$i.jpg",
        ]);


    }
}
