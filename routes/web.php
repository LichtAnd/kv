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
    return view('pages/front');
})->name('front');

Route::get('/katja-veit', function () {
    return view('pages/ueber');
})->name('about');

Route::get('/yoga', function () {
    return view('pages/yoga');
})->name('yoga');

Route::get('/familiencoaching', function () {
    return view('pages/familiencoaching');
})->name('coaching');

Route::get('/kontakt', function () {
    return view('pages/kontakt');
})->name('contact');

Route::get('/buchen', function () {
    return redirect('https://kikudoo.com/katja-veit/courses');
})->name('booking');

Route::get('/styleguide', function () {
    return view('pages/styleguide');
})->name('styleguide');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
