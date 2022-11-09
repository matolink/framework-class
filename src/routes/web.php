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

Route::get('/', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\EntryController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\EntryController::class, 'add'])->name('add');
Route::post('/save', [App\Http\Controllers\EntryController::class, 'store'])->name('save');
Route::get('/edit/{id}', [App\Http\Controllers\EntryController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [App\Http\Controllers\EntryController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\EntryController::class, 'destroy']);
