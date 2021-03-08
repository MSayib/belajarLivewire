<?php

namespace App\Http\Livewire;
use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $statusUpdate = false;

    // public $data;
    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdate' => 'handleUpdate'
    ];

    public function render()
    {
        // $this->data = Contact::latest()->get();
        // return view('livewire.contact-index');
        
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function handleStored($data)
    {
        // dd($data);
        session()->flash('success', 'Kontak '.$data['name'].' berhasil disimpan!');
    }
    
    public function handleUpdate($data)
    {
        // dd($data);
        session()->flash('success', 'Kontak '.$data['name'].' berhasil diupdate!');
    }
}
