<?php

use App\Http\Controllers\CreadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InstitucionController;

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

//Route::middleware(['auth:sanctum', 'verified'])->get('/', [HomeController::class, 'index'])->name('index');

//Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId)
Route::resource('curso', CursoController::class);

Route::get('curso/{curso}/modify', [CursoController::class, 'modify'])->name('curso.modify');

Route::resource('institucion', InstitucionController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('home', [HomeController::class, 'home'])->name('home');
