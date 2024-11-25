<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalorieCalculatorController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CoachDataController;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/calorie-calculator', [CalorieCalculatorController::class, 'index'])->name('calorie_calculator.index');
    Route::post('/calorie-calculator', [CalorieCalculatorController::class, 'calculate'])->name('calorie_calculator.calculate');
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::post('/coachdata', [CoachDataController::class, 'store'])->name('coach.store');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::put('/admin/update/{user}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/destroy/{user}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/exercice', [ExerciceController::class, 'index'])->name('exercice');
    Route::post('/exercice/store', [ExerciceController::class, 'store'])->name('exercice.store');
    Route::get('/exercice/create', [ExerciceController::class, 'create'])->name('exercice.create');



});

require __DIR__.'/auth.php';
