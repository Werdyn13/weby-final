<?php

namespace App\Http\Controllers;

use App\Models\Produkt;
use Illuminate\Http\Request;

class ProduktController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('q');

        $produkty = Produkt::query()
            ->when($query, function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%");
            })
            ->paginate(9); // počet produktů na stránku

        return view('produkty.index', compact('produkty'));
    }

    public function show($id)
    {
        $produkt = Produkt::with('kategorie')->findOrFail($id);
        return view('produkty.detailProduktu', compact('produkt'));
    }

    public function edit($id)
    {
        $produkt = Produkt::findOrFail($id);
        return view('produkty.edit', compact('produkt'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nazev' => 'required|string|max:255',
            'popis' => 'nullable|string',
            'cena' => 'required|numeric|min:0',
            'cislo_kategorie' => 'required|integer',
        ]);

        $produkt = Produkt::findOrFail($id);

        if (!$produkt) {
            return redirect()->route('homepage')->with('error', 'Produkt not found.');
        }

        $produkt->update([
            'nazev' => $validatedData['nazev'],
            'popis' => $validatedData['popis'],
            'cena' => $validatedData['cena'],
            'cislo_kategorie' => $validatedData['cislo_kategorie'],
        ]);

        return redirect()->route('homepage')->with('success', 'Produkt updated successfully!');
    }

    public function destroy($id)
    {
        $produkt = Produkt::findOrFail($id);
        $produkt->delete();

        return redirect()->route('homepage')->with('success', 'Produkt byl úspěšně odstraněn.');
    }
}
