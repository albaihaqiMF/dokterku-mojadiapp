<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DoctorList extends Component
{
    public function mount()
    {
        $this->data = User::all();
    }
    public function render()
    {
        return view('livewire.doctor-list');
    }
}
