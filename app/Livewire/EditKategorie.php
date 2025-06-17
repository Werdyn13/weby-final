<?php

namespace App\Livewire;

use App\Models\Kategorie;
use Livewire\Component;

class EditKategorie extends Component
{
    public $idkategorie;
    public $nazev;
    public $parent;
    public $text;
    public $obrazek_url;

    protected $rules = [
        'nazev' => 'required|string|max:255',
        'parent' => 'nullable|integer|exists:kategorie,idkategorie',
        'text' => 'nullable|string',
        'obrazek_url' => 'nullable|url',
    ];

    protected $listeners = ['loadKategorie'];

    public function loadKategorie($idkategorie)
    {
        $kategorie = Kategorie::find($idkategorie);
        if ($kategorie) {
            $this->idkategorie = $kategorie->idkategorie;
            $this->nazev = $kategorie->nazev;
            $this->parent = $kategorie->parent;
            $this->text = $kategorie->text;
            $this->obrazek_url = $kategorie->obrazek_url;
        }
    }

    public function save()
    {
        $this->validate();

        $kategorie = Kategorie::find($this->idkategorie);
        if (!$kategorie) {
            session()->flash('error', 'Kategorie nenalezena.');
            return;
        }

        $kategorie->nazev = $this->nazev;
        $kategorie->parent = $this->parent;
        $kategorie->text = $this->text;
        $kategorie->obrazek_url = $this->obrazek_url;
        $kategorie->save();

        session()->flash('message', 'Kategorie úspěšně aktualizována.');
        $this->emit('kategorieUpdated');

        $this->dispatchBrowserEvent('closeEditModal');
    }

    public function render()
    {
        return view('livewire.edit-kategorie', [
            'allKategorie' => Kategorie::all(),
        ]);
    }
}
