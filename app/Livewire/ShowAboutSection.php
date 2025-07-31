<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AboutSection;

class ShowAboutSection extends Component
{
    public function render()
    {
        $about = AboutSection::first();
        return view('livewire.show-about-section', compact('about'));
    }
}
