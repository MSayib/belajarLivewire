<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{
    public $name;
    public $phone;
    public $contactId;

    protected $listeners = [
        'getContact' => 'showContact'
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contact)
    {
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
        $this->contactId = $contact['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'phone' => 'required|max:15',
        ]);

        if ($this->contactId) {
            $data = Contact::find($this->contactId);
            $data->update([
                'name' => $this->name,
                'phone' => $this->phone
            ]);

            $this->resetInput();

            $this->emit('contactUpdate', $data);
        }
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}