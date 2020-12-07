<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\UserController;
/*use App\Mail\CorreoCursos;
use Illuminate\Support\Facades\Mail;*/


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',
    [HomeController::class, 'index'])->name('dashboard'); // Middleware auth

Route::get('/', function () {
    return redirect()->route('dashboard');
});

// USUARIO
Route::resource('user', UserController::class); // Middleware en Controller

Route::middleware('auth')->group( function () { // MIddleware group

    Route::get('home', [HomeController::class, 'home'])->name('home');

    //  CURSO
    Route::resource('curso', CursoController::class);

    Route::get('curso/{curso}/modify', [CursoController::class, 'modify'])->name('curso.modify');

    Route::get('cursos-list-pdf', [CursoController::class, 'exportPdf'])->name('cursos.pdf');
});

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
