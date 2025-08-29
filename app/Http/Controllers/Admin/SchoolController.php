<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('admin.schools.index', compact('schools'));
    }

    public function create()
    {
        return view('admin.schools.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'adresse' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_links.facebook' => 'nullable|url',
            'social_links.instagram' => 'nullable|url',
            'social_links.linkedin' => 'nullable|url',
            'social_links.tiktok' => 'nullable|url',
        ]);

        // Gestion du logo
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('schools/logos', 'public');
            $validated['logo'] = $logoPath;
        }

        // Préparation des liens sociaux
        $socialLinks = [];
        if ($request->filled('social_links.facebook')) {
            $socialLinks['facebook'] = $request->social_links['facebook'];
        }
        if ($request->filled('social_links.instagram')) {
            $socialLinks['instagram'] = $request->social_links['instagram'];
        }
        if ($request->filled('social_links.linkedin')) {
            $socialLinks['linkedin'] = $request->social_links['linkedin'];
        }
        if ($request->filled('social_links.tiktok')) {
            $socialLinks['tiktok'] = $request->social_links['tiktok'];
        }

        $validated['social_links'] = $socialLinks;

        School::create($validated);

        return redirect()->route('admin.schools.index')
            ->with('success', 'Informations de l\'école créées avec succès.');
    }

    public function show(School $school)
    {
        return view('admin.schools.show', compact('school'));
    }

    public function edit(School $school)
    {
        return view('admin.schools.edit', compact('school'));
    }

    public function update(Request $request, School $school)
    {
        $validated = $request->validate([
            'adresse' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_links.facebook' => 'nullable|url',
            'social_links.instagram' => 'nullable|url',
            'social_links.linkedin' => 'nullable|url',
            'social_links.tiktok' => 'nullable|url',
        ]);

        // Gestion du logo
        if ($request->hasFile('logo')) {
            // Supprimer l'ancien logo s'il existe
            if ($school->logo && Storage::disk('public')->exists($school->logo)) {
                Storage::disk('public')->delete($school->logo);
            }
            $logoPath = $request->file('logo')->store('schools/logos', 'public');
            $validated['logo'] = $logoPath;
        }

        // Préparation des liens sociaux
        $socialLinks = [];
        if ($request->filled('social_links.facebook')) {
            $socialLinks['facebook'] = $request->social_links['facebook'];
        }
        if ($request->filled('social_links.instagram')) {
            $socialLinks['instagram'] = $request->social_links['instagram'];
        }
        if ($request->filled('social_links.linkedin')) {
            $socialLinks['linkedin'] = $request->social_links['linkedin'];
        }
        if ($request->filled('social_links.tiktok')) {
            $socialLinks['tiktok'] = $request->social_links['tiktok'];
        }

        $validated['social_links'] = $socialLinks;

        $school->update($validated);

        return redirect()->route('admin.schools.index')
            ->with('success', 'Informations de l\'école mises à jour avec succès.');
    }

    public function destroy(School $school)
    {
        // Supprimer le logo s'il existe
        if ($school->logo && Storage::disk('public')->exists($school->logo)) {
            Storage::disk('public')->delete($school->logo);
        }

        $school->delete();

        return redirect()->route('admin.schools.index')
            ->with('success', 'Informations de l\'école supprimées avec succès.');
    }
}
