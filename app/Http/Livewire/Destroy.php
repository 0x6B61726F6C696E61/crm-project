<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\Contact;

class Destroy extends Component
{
    public Contact $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.destroy');
    }
}
