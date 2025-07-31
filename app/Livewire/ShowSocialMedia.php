<?php

namespace App\Livewire;

use App\Models\SocialMedia;
use Livewire\Component;

class ShowSocialMedia extends Component
{
    public function render()
    {
        $socialmedias = SocialMedia::All();
        return view('livewire.show-social-media', compact('socialmedias'));
    }
}
