<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function () { 
    return view('home'); 
})->name('home');

Route::get('/blog', [App\Http\Controllers\PostController::class, 'show'])->name('blog');
Route::get('/posts/{slug}', [App\Http\Controllers\PostController::class, 'single'])->name('single');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Authentication Routes...
    Route::get('/dashboard', [App\Http\Controllers\PostController::class, 'index'])->name('dashboard');
    Route::post('/posts', [App\Http\Controllers\PostController::class, 'save'])->name('save');
    Route::get('/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
    Route::put('/posts/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('update');
    Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('destroy');
});
