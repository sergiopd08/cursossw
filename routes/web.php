<?php

use App\Http\Controllers\CreadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/', HomeController::class);

Route::get('cursos',[CursoController::class, 'index']);

Route::get('cursos/create',[CursoController::class, 'create']);

Route::get('cursos/show',[CursoController::class, 'show']);

Route::get('cursos/edit', [CursoController::class, 'edit']);

Route::get('creador/create',[CreadorController::class, 'create']);

Route::get('/', HomeController::class);

Route::resource('cursos', CursoController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
