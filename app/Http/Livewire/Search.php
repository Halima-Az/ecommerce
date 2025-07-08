<?php

namespace App\Http\Livewire;

use App\Models\produt;
use Livewire\Component;

class Search extends Component
{
    public $search = "";


    public function render()
    {
        $produts = produt::where('libelle', 'like', '%' . $this->search . '%')->get();
        return view('livewire.search', compact('produts'));
    }
}
