<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $title="";
    public $desc="";
    public $notes =[];

    public function addTodo(){
        $this->notes[]=['title'=>$this->title,'desc'=>$this->desc];

        $this->title='';
        $this->desc='';
    }
    public function render()
    {
        return view('livewire.todos');
    }
}