<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentLifeCategory;
use App\Models\EducationLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentLifeCategoryController extends Controller
{
    /**
     * Afficher la liste des catégories
     */
    public function index()
    {
        $categories = StudentLifeCategory::with('educationLevel')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.student-life-categories.index', compact('categories'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        $educationLevels = EducationLevel::orderBy('order', 'asc')->get();
        return view('admin.student-life-categories.create', compact('educationLevels'));
    }

    /**
     * Enregistrer une nouvelle catégorie
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
            'level_id' => 'required|exists:education_levels,id'
        ]);

        StudentLifeCategory::create($request->all());

        return redirect()->route('admin.student-life-categories.index')
            ->with('success', 'Catégorie créée avec succès.');
    }

    /**
     * Afficher une catégorie spécifique
     */
    public function show(StudentLifeCategory $studentLifeCategory)
    {
        $category = $studentLifeCategory->load(['educationLevel', 'items']);
        return view('admin.student-life-categories.show', compact('category'));
    }

    /**
     * Afficher le formulaire d'édition
     */
    public function edit(StudentLifeCategory $studentLifeCategory)
    {
        $category = $studentLifeCategory;
        $educationLevels = EducationLevel::orderBy('order', 'asc')->get();
        return view('admin.student-life-categories.edit', compact('category', 'educationLevels'));
    }

    /**
     * Mettre à jour une catégorie
     */
    public function update(Request $request, StudentLifeCategory $studentLifeCategory)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
            'level_id' => 'required|exists:education_levels,id'
        ]);

        $studentLifeCategory->update($request->all());

        return redirect()->route('admin.student-life-categories.index')
            ->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Supprimer une catégorie
     */
    public function destroy(StudentLifeCategory $studentLifeCategory)
    {
        $studentLifeCategory->delete();

        return redirect()->route('admin.student-life-categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
}
