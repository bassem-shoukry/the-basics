<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [
        'Go to the market',
        'Buy some food',
        'Prepare dinner',
        'Go to the gym',
        'Read a book',
    ];
    public function render()
    {
        return view('livewire.todos');
    }

    public function add()
    {
      $this->todos[] = $this->todo;

      $this->reset('todo');
    }
}
