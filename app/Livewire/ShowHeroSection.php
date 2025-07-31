<?php

namespace App\Livewire;


use App\Models\HeroSection;
use Livewire\Component;

class ShowHeroSection extends Component
{
    public function render()
    {
        $heroes = HeroSection::orderBy('id', 'asc')->get();
        return view('livewire.show-hero-section', [
            'heroes' => $heroes,
        ]);
    }
}
