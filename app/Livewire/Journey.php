<?php

namespace App\Livewire;

use Livewire\Component;

class Journey extends Component
{
    public $journeys;
    public $visibleJourneys;
    public $perPage = 2;

    public function mount()
    {
        $this->visibleJourneys = array_slice($this->journeys, 0, $this->perPage);
    }

    public function loadMore()
    {
        $this->perPage += 1;
        $this->visibleJourneys = array_slice($this->journeys, 0, $this->perPage);
    }

    public function render()
    {
        return view('livewire.journey', [
            'visibleJourneys' => $this->visibleJourneys
        ]);
    }
}
