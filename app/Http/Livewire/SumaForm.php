<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SumaForm extends Component
{
    public $numberA;
    public $numberB;
    public $result;

    public function sum()
    {
        $this->result = $this->numberA + $this->numberB;
    }
    public function render()
    {
        return view('livewire.suma-form');
    }
}
