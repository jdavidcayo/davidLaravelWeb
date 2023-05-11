<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index')->name('index');
Route::view('/contacto', 'contact')->name('contact');
Route::view('/servicios', 'services')->name('services');
Route::view('/acercademi', 'about')->name('about');

