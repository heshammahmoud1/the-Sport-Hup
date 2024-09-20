<?php

use App\Http\Controllers\formController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome2');
})->name('welcome2');

Route::controller(formController::class)->group(function(){
Route::get('welcome','index')->name('form_page');
Route::post('/welcome','insert')->name('insert');
Route::get('/welcome','show')->name('insert');
Route::get('/justview','show_data')->name('show_data');
Route::get('justview/{id}','delete_fun')->name('delete_name');
Route::get('updata/{id}','up')->name('update_name');
Route::post('update/{id}','down')->name('oop');
Route::get('dashboard','up2')->name('dashboard');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
