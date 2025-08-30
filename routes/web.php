<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\EducationLevelController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/a-propos', [FrontController::class, 'about'])->name('about');
Route::get('/vie-scolaire', [FrontController::class, 'studentLife'])->name('students-life');
Route::get('/evenements', [FrontController::class, 'event'])->name('event');

Route::get('niveaux-enseignement/creche-maternelle', [FrontController::class, 'preschool'])->name('education-levels.preschool');
Route::get('niveaux-enseignement/primaire', [FrontController::class, 'primary'])->name('education-levels.primary');
Route::get('niveaux-enseignement/secondaire', [FrontController::class, 'highSchool'])->name('education-levels.high-school');

Route::post('/contact', [FrontController::class, 'contact'])->name('contact.send');
Route::post('/newsletter', [FrontController::class, 'newsletter'])->name('newsletter.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Passage à l'admin
Route::get('/admin-access', function () {
    return view('admin-access');
})->name('admin.access');

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/editor', [DashboardController::class, 'editor'])->name('admin.editor');

    // Routes pour la gestion des écoles
    Route::resource('/schools', SchoolController::class)->names([
        'index' => 'admin.schools.index',
        'create' => 'admin.schools.create',
        'store' => 'admin.schools.store',
        'show' => 'admin.schools.show',
        'edit' => 'admin.schools.edit',
        'update' => 'admin.schools.update',
        'destroy' => 'admin.schools.destroy',
    ]);

    // Routes pour la gestion des niveaux d'éducation
    Route::resource('/education-levels', EducationLevelController::class)->names([
        'index' => 'admin.education-levels.index',
        'create' => 'admin.education-levels.create',
        'store' => 'admin.education-levels.store',
        'show' => 'admin.education-levels.show',
        'edit' => 'admin.education-levels.edit',
        'update' => 'admin.education-levels.update',
        'destroy' => 'admin.education-levels.destroy',
    ]);

    // Routes pour la gestion des catégories de vie étudiante
    Route::resource('/student-life-categories', \App\Http\Controllers\Admin\StudentLifeCategoryController::class)->names([
        'index' => 'admin.student-life-categories.index',
        'create' => 'admin.student-life-categories.create',
        'store' => 'admin.student-life-categories.store',
        'show' => 'admin.student-life-categories.show',
        'edit' => 'admin.student-life-categories.edit',
        'update' => 'admin.student-life-categories.update',
        'destroy' => 'admin.student-life-categories.destroy',
    ]);

    // Routes pour la gestion des éléments de vie étudiante
    Route::resource('/student-life-items', \App\Http\Controllers\Admin\StudentLifeItemController::class)->names([
        'index' => 'admin.student-life-items.index',
        'create' => 'admin.student-life-items.create',
        'store' => 'admin.student-life-items.store',
        'show' => 'admin.student-life-items.show',
        'edit' => 'admin.student-life-items.edit',
        'update' => 'admin.student-life-items.update',
        'destroy' => 'admin.student-life-items.destroy',
    ]);

    // Route pour toggle featured status
    Route::post('/student-life-items/{studentLifeItem}/toggle-featured',
        [\App\Http\Controllers\Admin\StudentLifeItemController::class, 'toggleFeatured'])
        ->name('admin.student-life-items.toggle-featured');
});

require __DIR__.'/auth.php';
