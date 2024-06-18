<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', [LoginController::class, 'auth']);
Route::prefix('auth')->group(function() {
    Route::get('/login', [LoginController::class, 'verify'])->name('Auth.Login'); //Ruta = http://127.0.0.1:8000/auth/login
    Route::post('/login/verify', [LoginController::class, 'LoginVerify'])->name('Auth.LoginVerify');
});
Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [AdminController::class, 'Panel'])->name('Admin.Dashboard'); //Ruta = http://127.0.0.1:8000/admin/dashboard
    Route::get('/add_bales', [AdminController::class, 'AddBales'])->name('Admin.AddBales');
});
Route::prefix('user')->group(function() {
    Route::get('/history', [UserController::class, 'History'])->name('Admin.History'); //Ruta = http://127.0.0.1:8000/user/history
    Route::get('/sales', [UserController::class, 'Sales'])->name('Admin.Sales');
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
