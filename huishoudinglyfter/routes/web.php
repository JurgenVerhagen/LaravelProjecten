<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/storage', function () {
    $storageProduct = DB::table('storage')->get();
    return view('storage', ['storageProduct' => $storageProduct]);
});

Route::view('form', 'storage');
Route::post('submit', 'App\Http\Controllers\StorageInsertController@save');
Route::get('retrieve', 'App\Http\Controllers\StorageUpdateController@edit');
Route::put('change', 'App\Http\Controllers\StorageUpdateController@update');
Route::get('delete', 'App\Http\Controllers\StorageUpdateController@delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

