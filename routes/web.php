<?php

use Inertia\Inertia;
use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebsiteController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('home');
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about.index');
Route::get('/service', [WebsiteController::class, 'service'])->name('service.index');
Route::get('/pricing', [WebsiteController::class, 'pricing'])->name('pricing.index');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact.index');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
