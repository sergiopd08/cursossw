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

Route::get('/', HomeController::class);

//Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId)
Route::resource('curso', CursoController::class);
Route::get('curso/{curso}/modify', [CursoController::class, 'modify'])->name('curso.modify');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
