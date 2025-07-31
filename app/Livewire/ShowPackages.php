<?php

namespace App\Livewire;


use App\Models\Package;
use Livewire\Component;

class ShowPackages extends Component
{
    public function render()
    {
        return view('livewire.show-packages', [
            'packages' => Package::all()
        ]);
    }
}
