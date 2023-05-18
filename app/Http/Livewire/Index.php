<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //public $all_contacts;
    public $current_id;
    public $contact;
    public $input_value;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.index', ['all_contacts' => Contact::where('name','like', '%'.$this->input_value.'%')->paginate(10)]);
    }

    public function create_contact(){
        return redirect('/dodaj-kontakt');
    }

    public function destroy_contact($contact_id){
        $this->contact = Contact::find($contact_id);
        $isDeleted = $this->contact->delete();

        if ($isDeleted) {
            return redirect('/');
        } else {
            throw new Exception('Coś poszło nie tak...');
        }
    }

    public function edit_contact($id){
        return redirect("/$id/edytuj-kontakt");
    }

    public function search(){
        $this->resetPage();
    }
}
