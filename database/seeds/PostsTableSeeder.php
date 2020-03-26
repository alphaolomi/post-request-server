<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = "Post 1";
        $post->description = "This is post 1";
        $post->save();

        $post = new Post();
        $post->title = "Post 2";
        $post->description = "This is post 2";
        $post->save();

        $post = new Post();
        $post->title = "Post 3";
        $post->description = "This is post 3";
        $post->save();

        $post = new Post();
        $post->title = "Post 4";
        $post->description = "This is post 4";
        $post->save();

        $post = new Post();
        $post->title = "Post 5";
        $post->description = "This is post 5";
        $post->save();

        $post = new Post();
        $post->title = "Post 6";
        $post->description = "This is post 6";
        $post->save();
    }
}
