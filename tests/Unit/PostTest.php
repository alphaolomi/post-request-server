<?php

namespace Tests\Unit;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PostTest extends TestCase
{
    use RefreshDatabase;

    /**     .
     * @return void
     */
    public function testInsertingPost()
    {

        $post = Post::create([
            'title' => 'cool post',
            'description' => "very nice one",
            'imagePath' => 'pic.jpg'
        ]);

        $this->assertDatabaseHas('posts', [
            'title' => $post->title,
        ]);
    }
}
