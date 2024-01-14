<?php

namespace App\Livewire;

use App\Models\ToDo;
use Livewire\Component;

class TodoItem extends Component
{
    public ToDo $todo;

    public function render()
    {
        return view('livewire.todo-item');
    }
}
