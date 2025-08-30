<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educationLevels = EducationLevel::orderBy('order')->get();
        return view('admin.education-levels.index', compact('educationLevels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education-levels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0'
        ]);

        $data = $validated;

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('education-levels', 'public');
            $data['image'] = $imagePath;
        }

        // Génération automatique du slug
        $data['slug'] = Str::slug($validated['name']);

        EducationLevel::create($data);

        return redirect()->route('admin.education-levels.index')
            ->with('success', 'Niveau d\'éducation créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $educationLevel = EducationLevel::findOrFail($id);
        return view('admin.education-levels.show', compact('educationLevel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $educationLevel = EducationLevel::findOrFail($id);
        return view('admin.education-levels.edit', compact('educationLevel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $educationLevel = EducationLevel::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0'
        ]);

        $data = $validated;

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($educationLevel->image) {
                Storage::disk('public')->delete($educationLevel->image);
            }

            $imagePath = $request->file('image')->store('education-levels', 'public');
            $data['image'] = $imagePath;
        }

        // Mise à jour du slug si le nom a changé
        if ($educationLevel->name !== $validated['name']) {
            $data['slug'] = Str::slug($validated['name']);
        }

        $educationLevel->update($data);

        return redirect()->route('admin.education-levels.index')
            ->with('success', 'Niveau d\'éducation mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $educationLevel = EducationLevel::findOrFail($id);

        // Supprimer l'image associée
        if ($educationLevel->image) {
            Storage::disk('public')->delete($educationLevel->image);
        }

        $educationLevel->delete();

        return redirect()->route('admin.education-levels.index')
            ->with('success', 'Niveau d\'éducation supprimé avec succès.');
    }
}
