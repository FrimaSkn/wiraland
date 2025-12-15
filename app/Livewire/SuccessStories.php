<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SuccessStory;

class SuccessStories extends Component
{
    public $stories;
    public $perPage = 2;
    Public $total;

    public function mount()
    {
        $this->stories = SuccessStory::take($this->perPage)->get();
        $this->total = SuccessStory::count();
    }

    public function loadMore()
    {
        $this->perPage += 2;
        $this->stories = SuccessStory::take($this->perPage)->get();
    }


    public function render()
    {
        return view('livewire.success-stories', [
            'stories' => $this->stories
        ]);
    }
}
