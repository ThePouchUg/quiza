<?php

namespace App\Livewire;

use Livewire\Component;

class CreateQuiz extends Component
{
    public function render()
    {
        return view('livewire.create-quiz');
    }

    public function addCategory() 
    {
        return $this->redirect('/admin/create-quiz/add-category', navigate: true);
    }
}
