<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

/* Route::view("main", "main"); */


Route::view("main", "main");
/* Route::get("main", function () {
    return view("main");
});
Route::get("main", [MainController::class => "index"]);

 */

Route::view("main", "main");

Route::view("about", "about");
Route::view("saludo", "saludo");

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
