<?php

namespace App\Http\Controllers;

use App\Models\Produkt;
use Illuminate\Http\Request;

class ProduktController extends Controller
{
    public function show($id)
    {
        $produkt = Produkt::with('kategorie')->findOrFail($id);
        return view('produkty.detailProduktu', compact('produkt'));
    }
}
