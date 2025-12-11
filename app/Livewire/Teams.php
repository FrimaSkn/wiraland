<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;

class Teams extends Component
{
    public $teams;
    public $count;
    public $perPage = 4;

    public function mount()
    {
        $this->count = Team::count();
        $this->teams = Team::take($this->perPage)->get();
    }

    public function loadMore()
    {
        $this->perPage += 4;
        $this->teams = Team::take($this->perPage)->get();
    }

    public function render()
    {
        return view('livewire.teams', [
            'teams' => $this->teams
        ]);
    }
}
