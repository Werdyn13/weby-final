<?php

namespace App\Http\Controllers;

use App\Models\Kategorie;
use App\Models\Produkt;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Kategorie::all();
        $produkty = Produkt::inRandomOrder()->paginate(15);
        return view('homepage', ['categories' => $categories, 'produkty' => $produkty]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $produkty = Produkt::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(10);

        return view('homepage', compact('produkty'));
    }
}
