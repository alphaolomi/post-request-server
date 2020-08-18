<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {

            factory(App\Post::class)->create([
                'title' => "Post ${i}",
                'description' => "This is post ${i}",
                'imagePath' => 'image.jpg'
            ]);
        }
    }
}
