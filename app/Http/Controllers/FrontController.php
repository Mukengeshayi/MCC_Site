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
    public function studentLife()
    {
        return view('front.students-life', ['title' => 'Vie scolaire']);
    }
    public function preschool()
    {
        return view('front.preschool', ['title' => 'Crèche & Maternelle']);
    }
    public function primary()
    {
        return view('front.primary', ['title' => 'Primaire']);
    }
    public function highSchool()
    {
        return view('front.highSchool', ['title' => 'Humanités']);
    }

}
