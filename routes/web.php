<?php

use App\Http\Controllers\Auth\LoginController;
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

// Route::post('/login/{id}',[LoginController::class,'login'])->name('login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form', [App\Http\Controllers\form\annexureController::class,'index'])->name('form')->middleware('auth');


Route::get('/view-application/{id}', [App\Http\Controllers\form\annexureController::class,'viewApplication'])->name('view-application')->middleware('auth');



////Admin
Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');
Route::get('/dashboard', [App\Http\Controllers\Admin\ApplicationController::class,'index'])->name('dashboard')->middleware('auth:admin');
Route::get('/applications/{id}', [App\Http\Controllers\Admin\ApplicationController::class,'applications'])->name('applications')->middleware('auth:admin');
Route::get('/view-application-admin/{id}', [App\Http\Controllers\Admin\ApplicationController::class,'viewApplication'])->name('view-application-admin')->middleware('auth:admin');
Route::get('/change-status/{id}', [App\Http\Controllers\Admin\ApplicationController::class,'changeStatus'])->name('change-status')->middleware('auth:admin');
