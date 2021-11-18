<?php

namespace App\Http\Livewire\Doctor;

use App\Models\User;
use Livewire\Component;

class Menu extends Component
{
    public function mount()
    {
         $this->data = User::where('role_id', 2)->get();
    }
    public function render()
    {
        return view('livewire.doctor.menu');
    }
}
