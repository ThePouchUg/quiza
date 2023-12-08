<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
