<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
<<<<<<< HEAD
use App\Http\Controllers\ProfesorController;

/* Route::view("main", "main"); */
=======

Route::view("main", "main");
/* Route::get("main", function () {
    return view("main");
});
Route::get("main", [MainController::class => "index"]);

 */
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
Route::view("about", "about");
/* Route::view("saludo", "saludo"); */
Route::get("main", \App\Http\Controllers\MainController::class);

Route::resource("alumnos", AlumnoController::class);
Route::resource("profesores", ProfesorController::class);

Route::resource("alumnos", AlumnoController::class);

Route::get('/', function () {
    return view('main');
})->name("index");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
