<?php

namespace App\Livewire;

use Livewire\Component;

class GameCode extends Component
{
    public function enterQuiz()
    {
        return $this->redirect('/welcome', navigate: true);
    }

    public function render()
    {
        return view('livewire.game-code');
    }
}
