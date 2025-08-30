<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Newsletter;
use App\Models\EducationLevel;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use League\CommonMark\Node\Inline\Newline;

class FrontController extends Controller
{
    public function home()
    {
        // Récupérer les niveaux d'éducation ordonnés par ordre d'affichage
        $educationLevels = EducationLevel::orderBy('order')->get();

        return view('front.home', [
            'title' => 'Accueil - Messiah Christian College',
            'educationLevels' => $educationLevels
        ]);
    }

    public function about()
    {
        return view('front.about', ['title' => 'À propos']);
    }
    public function studentLife()
    {
        return view('front.students-life', ['title' => 'Vie scolaire']);
    }
    public function event()
    {
        return view('front.event', ['title' => 'Événements']);
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
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        Mail::to('info@messiahchristiancollege.com')->send(new ContactMail($validated));

        return back()->with('success', 'Votre message a bien été envoyé !');


    }
    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);

        Newsletter::create(['email' => $request->email]);

        return back()->with('success', 'Merci pour votre abonnement à notre newsletter !');
    }


}
