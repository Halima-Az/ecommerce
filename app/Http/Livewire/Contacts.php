<?php

namespace App\Http\Livewire;

use App\Models\produt;
use Livewire\Component;

class contacts extends Component
{
    public $name="ahlam";
    public $products=[];
    public function changeName(){
        $this->name="halima";
    }
    public function mount(){
       
        $this->products= produt::all();
    }
    public function render()
    {
        return view('livewire.contacts')->with([
            'name'=>$this->name
        ]);
    }

}
