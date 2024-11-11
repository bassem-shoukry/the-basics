<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Livewire\Livewire;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    #[Test]
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    #[Test]
    public function create_post()
    {
        $post = Post::whereTitle('My first post')->first();

        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'My first post')
            ->set('content', 'This is my first post content')
            ->call('createPost')
            ->assertRedirect('posts');

        $post = Post::whereTitle('My first post')->first();

        $this->assertNotNull($post);
        $this->assertEquals('My first post', $post->title);
        $this->assertEquals('This is my first post content', $post->content);
    }

    #[Test]
    public function title_is_required(): void
    {
        Livewire::test(CreatePost::class)
            ->set('content', 'This is my first post content')
            ->call('createPost')
            ->assertHasErrors(['title' => 'required']);
    }

}
