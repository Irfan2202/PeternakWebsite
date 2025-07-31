<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PricingSection;

class ShowPricingSection extends Component
{
    public function render()
    {
        $pricing = PricingSection::first();
        return view('livewire.show-pricing-section', compact('pricing'));
    }
}
