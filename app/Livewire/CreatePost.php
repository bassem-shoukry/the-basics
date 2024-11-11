<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.create-post');
    }

    public function createPost(): void
    {
        $this->validate();

        // Create post
        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirect('posts', Navigate:true);
    }
}
