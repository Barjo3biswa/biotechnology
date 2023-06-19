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
    return view('website.pages.index');
});

Route::get('/home-page', function () {
    // return view('website.pages.index');
    return redirect('/');
})->name('home-page');

Route::get('/about-us', function () {
    return view('website.pages.about');
})->name('about-us');

Route::get('/contact', function () {
    return view('website.pages.contact');
})->name('contact');

Route::get('/policy', function () {
    return view('website.pages.policy-objectives');
})->name('policy');

Route::get('/trust', function () {
    return view('website.pages.thrust-areas');
})->name('trust');

Route::get('/apex-committee', function () {
    return view('website.pages.apex-committee');
})->name('apex-committee');

Route::get('/exe-committee', function () {
    return view('website.pages.executive-committe');
})->name('exe-committee');

Route::get('/Preamble', function () {
    return view('website.pages.preamble');
})->name('Preamble');

Route::get('/screen-reader', function () {
    return view('website.pages.screen-reader');
})->name('screen-reader');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form', [App\Http\Controllers\form\annexureController::class,'index'])->name('form')->middleware('auth');
