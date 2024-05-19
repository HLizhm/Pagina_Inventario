<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Loginvef;

Route::get('/', [Loginvef::class, 'auth']);
Route::prefix('auth')->group(function() {
    Route::get('/login', [Loginvef::class, 'verify'])->name('Auth.Login'); //Ruta = http://127.0.0.1:8000/auth/login
    Route::post('/login/verify', [Loginvef::class, 'LoginVerify'])->name('Auth.LoginVerify');
});
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', function() {
        return view('administrator.panel');
    })->name('Admin.Dashboard');
});





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
