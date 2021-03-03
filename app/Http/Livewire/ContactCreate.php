<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    public $data;

    public function mount($kontak) //mengambil data dari variabel $kontak di dalam blade
    {
        $this->data = $kontak;
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
