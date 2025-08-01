<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home', ['title' => 'Accueil']);
    }

    public function about()
    {
        return view('front.about', ['title' => 'À propos']);
    }
}
