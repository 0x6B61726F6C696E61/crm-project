<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Index extends Component
{
    public $all_contacts;
    public $current_id;

    public function render()
    {
        $this->all_contacts = Contact::all();
        return view('livewire.index');
    }

    public function create_contact(){
        return redirect('/dodaj-kontakt');
    }

    public function destroy_contact($contact_id){
        return redirect('/dodaj-przedmiot');
    }

    public function get_id ($contact_id){
        $this->current_id = $contact_id;
    }
}
