<?php

namespace App\Livewire;

use Livewire\Component;

class EditProdukt extends Component
{
    public $produktId;
    public $nazev;
    public $popis;
    public $cena;
    public $cislo_kategorie;

    protected $rules = [
        'nazev' => 'required|string|max:255',
        'popis' => 'nullable|string',
        'cena' => 'required|numeric|min:0',
        'cislo_kategorie' => 'required|integer',
    ];

    public function mount($produkt)
    {
        $this->produktId = $produkt->idprodukt;
        $this->nazev = $produkt->name;
        $this->popis = $produkt->description;
        $this->cena = $produkt->cena;
        $this->cislo_kategorie = $produkt->cislo_kategorie;
    }

    public function updateProdukt()
    {
        $this->validate();

        $produkt = \App\Models\Produkt::find($this->produktId);
        $produkt->update([
            'name' => $this->nazev,
            'description' => $this->popis,
            'cena' => $this->cena,
            'cislo_kategorie' => $this->cislo_kategorie,
        ]);

        session()->flash('success', 'Produkt byl úspěšně aktualizován.');
        return redirect()->route('homepage');
    }

    public function render()
    {
        return view('livewire.edit-produkt');
    }
}
