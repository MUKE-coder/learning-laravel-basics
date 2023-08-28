<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $qty= 0;

    public function increment(){
        $this->qty++;
    }
    public function decrement(){
        $this->qty--;
    }
    public function render()
    {
       $title ="Livewire is Miraculaous";
       $desc="This is a description";

        return view('livewire.counter',[
            'title'=>$title,
            "description"=>$desc
        ]);
    }
}
