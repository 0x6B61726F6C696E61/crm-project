<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Index extends Component
{
    public $all_contacts;

    public function render()
    {
        $this->all_contacts = Contact::all();
        return view('livewire.index');
    }
}
