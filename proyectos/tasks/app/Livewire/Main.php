<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $welcome = "CRUD Tasks";
    public function render()
    {
        return view('livewire.main');
    }
}
