<?php

namespace App\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{

    public function adminLogin() 
    {
        return $this->redirect('/admin', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
