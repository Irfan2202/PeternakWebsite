<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Services;

class ShowServices extends Component
{
    public function render()
    {
        $services = Services::all();
        return view('livewire.show-services', compact('services'));
    }
}
