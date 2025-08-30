<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentLifeItem;
use App\Models\StudentLifeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentLifeItemController extends Controller
{
    /**
     * Afficher la liste des éléments
     */
    public function index()
    {
        $items = StudentLifeItem::with(['category.educationLevel'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('admin.student-life-items.index', compact('items'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        $categories = StudentLifeCategory::with('educationLevel')->orderBy('name', 'asc')->get();
        return view('admin.student-life-items.create', compact('categories'));
    }

    /**
     * Enregistrer un nouvel élément
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:student_life_categories,id',
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'order' => 'nullable|integer|min:0'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('student-life-items', 'public');
        }

        StudentLifeItem::create($data);

        return redirect()->route('admin.student-life-items.index')
            ->with('success', 'Élément créé avec succès.');
    }

    /**
     * Afficher un élément spécifique
     */
    public function show(StudentLifeItem $studentLifeItem)
    {
        $item = $studentLifeItem->load(['category.educationLevel']);
        return view('admin.student-life-items.show', compact('item'));
    }

    /**
     * Afficher le formulaire d'édition
     */
    public function edit(StudentLifeItem $studentLifeItem)
    {
        $item = $studentLifeItem;
        $categories = StudentLifeCategory::with('educationLevel')->orderBy('name', 'asc')->get();
        return view('admin.student-life-items.edit', compact('item', 'categories'));
    }

    /**
     * Mettre à jour un élément
     */
    public function update(Request $request, StudentLifeItem $studentLifeItem)
    {
        $request->validate([
            'category_id' => 'required|exists:student_life_categories,id',
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'order' => 'nullable|integer|min:0'
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($studentLifeItem->image) {
                Storage::disk('public')->delete($studentLifeItem->image);
            }
            $data['image'] = $request->file('image')->store('student-life-items', 'public');
        }

        $studentLifeItem->update($data);

        return redirect()->route('admin.student-life-items.index')
            ->with('success', 'Élément mis à jour avec succès.');
    }

    /**
     * Supprimer un élément
     */
    public function destroy(StudentLifeItem $studentLifeItem)
    {
        // Supprimer l'image associée
        if ($studentLifeItem->image) {
            Storage::disk('public')->delete($studentLifeItem->image);
        }

        $studentLifeItem->delete();

        return redirect()->route('admin.student-life-items.index')
            ->with('success', 'Élément supprimé avec succès.');
    }

    /**
     * Toggle featured status
     */
    public function toggleFeatured(StudentLifeItem $studentLifeItem)
    {
        $studentLifeItem->update(['is_featured' => !$studentLifeItem->is_featured]);

        return redirect()->back()
            ->with('success', 'Statut mis en avant modifié avec succès.');
    }
}
