<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class ShowPosts extends Component
{
    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(),
        ]);
    }

    public function deletePost(Post $post): void
    {
        $post->delete();
    }
}
