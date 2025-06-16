<?php

namespace App\Http\Controllers;

use App\Models\Kategorie;
use App\Models\Produkt;
use Illuminate\Http\Request;

class KategorieController extends Controller
{
    public function index()
    {
        $kategorie = Kategorie::all();
        return view('dashboard', compact('kategorie'));
    }

    public function showProdukty($idkategorie, $idprodukt = null)
    {
        $kategorie = Kategorie::findOrFail($idkategorie);
        $produkty = Produkt::where('cislo_kategorie', $idkategorie)->paginate(10);
        $produkt = $idprodukt ? Produkt::find($idprodukt) : null;
        return view('produkty.produktyKategorie', compact('kategorie', 'produkty', 'produkt'));
    }
}
