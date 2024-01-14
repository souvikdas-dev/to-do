<?php

namespace App\Livewire;

use App\Models\ToDo;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('To Do')]
class TodoList extends Component
{
    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => ToDo::all()
        ]);
    }
}
