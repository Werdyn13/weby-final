<?php

namespace App\Http\Controllers;

use App\Models\Kategorie;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Kategorie::all();
        return view('homepage', ['categories' => $categories]);
    }
}
