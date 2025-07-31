<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Services;
use App\Models\ContactInfo;
use App\Models\SocialMedia;
use App\Models\AboutSection;
use App\Models\ServiceSection;

class Footer extends Component
{
    public function render()
    {
        $about = AboutSection::first();
        $services = Services::all();
        $contactinfos = ContactInfo::all();
        $serviceSection = ServiceSection::first();
        $socialmedias = SocialMedia::first();
        return view('livewire.footer', compact('contactinfos', 'about', 'services', 'socialmedias'));
    }
}
