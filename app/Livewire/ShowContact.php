<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\ContactInfo;

class ShowContact extends Component
{
    public function render()
    {
        $contactinfos = ContactInfo::all();
        return view('livewire.show-contact', compact('contactinfos'));
    }
}
