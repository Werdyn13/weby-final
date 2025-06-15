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
}
