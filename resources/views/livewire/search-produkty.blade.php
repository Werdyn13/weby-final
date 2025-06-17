<?php

namespace App\Livewire;

use Livewire\Component;

class SearchProdukty extends Component
{
    public $query = '';
    public $produkty = [];

    public function updatedQuery()
    {
        $this->produkty = \App\Models\Produkt::where('name', 'LIKE', "%{$this->query}%")
            ->orWhere('description', 'LIKE', "%{$this->query}%")
            ->get();
    }

    public function render()
    {
        return view('livewire.search-produkty', [
            'produkty' => $this->produkty,
        ]);
    }
}
