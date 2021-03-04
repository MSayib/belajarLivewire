<?php

namespace App\Http\Livewire;
use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    // public $data;
    protected $listeners = [
        'contactStored' => 'handleStored'
    ];

    public function render()
    {
        // $this->data = Contact::latest()->get();
        // return view('livewire.contact-index');
        
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function handleStored($data)
    {
        // dd($data);   
    }
}
