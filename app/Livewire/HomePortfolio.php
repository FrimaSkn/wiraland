<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class HomePortfolio extends Component
{
    public $categories;

    public $selectedCategory = null;

    public $portfolios;

    public function mount()
    {
        $this->portfolios = Portfolio::with('category')->get();
        $this->categories = PortfolioCategory::with('portfolios')->get();
    }

    public function setCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->portfolios = Portfolio::with('category')->when($this->selectedCategory, function ($query) {
            $query->whereHas('category', function ($q) {
                $q->where('id', $this->selectedCategory);
            });
        })->get();

        $this->dispatch('reinitSlider');
    }

    public function render()
    {
        return view('livewire.home-portfolio', [
            'portfolios' => $this->portfolios
        ]);
    }
}
