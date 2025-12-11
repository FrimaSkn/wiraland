<?php

namespace App\Livewire;

use App\Models\Partner;
use Livewire\Component;

class Clients extends Component
{
    public $clients;
    public $perPage = 5;
    public $totalClients;

    public function mount()
    {
        $this->clients = Partner::take($this->perPage)->get();
        $this->totalClients = Partner::count();
    }

    public function loadMore()
    {
        $this->perPage += 5;
        $this->clients = Partner::take($this->perPage)->get();
    }

    public function render()
    {
        return view('livewire.clients', [
            'clients' => $this->clients
        ]);
    }
}
