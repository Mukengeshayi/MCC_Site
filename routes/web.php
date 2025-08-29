<?php

use App\Http\Controllers\Admin\DashboardController;
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

// Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/editor', [DashboardController::class, 'editor'])->name('admin.editor');
// });

require __DIR__.'/auth.php';
