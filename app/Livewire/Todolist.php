<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todolist extends Component
{
    public $todoes;
    public $todo;

    function mount(){
        $this->fetchTodoes();
    }

    function fetchTodoes(){
        $this->todoes=Todo::all()->reverse();
    }//all to does

    function addTodo(){
        if($this->todo != ''){
            $todo=new Todo();
            $todo->todo=$this->todo;
            $todo->save();
            $this->todo='';
            $this->fetchTodoes();
        }
    }

    public function remove(Todo $todo){
        $todo->delete();
        $this->fetchTodoes();

    }
public function markasdone(Todo $todo){
    $todo->status='done';
    $todo->save();
    $this->fetchTodoes();
}

    public function render()
    {
        return view('livewire.todolist');
    }
}
