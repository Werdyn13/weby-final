<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkt;

class ShopController extends Controller
{
    public function index()
    {
        $cart = session('cart', []); // Ensure cart is always an array

        return view('shop', compact('cart'));
    }

    public function add($id)
    {
        $produkt = Produkt::findOrFail($id);

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            $cart[$id] = [
                'name' => $produkt->name,
                'cena' => $produkt->cena,
                'description' => $produkt->description,
            ];
        }

        session(['cart' => $cart]);

        return redirect()->route('cart.index')->with('success', 'Produkt byl přidán do košíku.');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
        }

        return redirect()->route('cart.index')->with('success', 'Produkt byl odstraněn z košíku.');
    }
}
