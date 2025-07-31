<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ServiceSection;

class ShowServiceSection extends Component
{
    public function render()
    {
        $serviceSection = ServiceSection::first();
        return view('livewire.show-service-section', compact('serviceSection'));
    }
}
