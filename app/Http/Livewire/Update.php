<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Update extends Component
{
    public $contact;
    public $new_name, $new_address, $new_website, $new_phone, $new_email;

    protected $rules = [
        'new_name' => 'required',
        'new_phone' => 'digits_between:9,20|nullable',
        'new_email' => 'email:rfc,dns|nullable',
        'new_website' => 'url|nullable'
    ];

    public function mount($id)
    {
        $this->contact = Contact::find($id);
        $this->new_name = $this->contact->name;
        $this->new_address = $this->contact->address;
        $this->new_website = $this->contact->website;
        $this->new_email = $this->contact->email;
        $this->new_phone = $this->contact->phone;
        
    }

    public function update(){
        $this->validate();
        $this->contact->name=$this->new_name;
        $this->contact->address=$this->new_address;
        $this->contact->website=$this->new_website;
        $this->contact->phone=$this->new_phone;
        $this->contact->email=$this->new_email;

        $this->contact->save();
        return redirect('/');
    }


    public function go_back(){
        return redirect('/');
    }


    public function render()
    {
        return view('livewire.update');
    }
}
