<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Create extends Component
{
    public $contact_name;
    public $contact_address = '';
    public $contact_website = '';
    public $contact_phone='';
    public $contact_email = '';

    protected $rules = [
        'contact_name' => 'required',
        'contact_phone' => 'digits_between:9,20|nullable',
        'contact_email' => 'email:rfc,dns|nullable',
        'contact_website' => 'url|nullable'
    ];

    public function submit(){
        $this->validate();
        $new_category = Contact::create([
            'name' => $this->contact_name,
            'address' => $this->contact_address,
            'website'=>$this->contact_website,
            'phone'=>$this->contact_phone,
            'email'=>$this->contact_email]);

        return redirect('/');
        }

    public function go_back(){
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.create');
    }
}
