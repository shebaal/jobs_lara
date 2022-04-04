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
    return view('web/home');
});


Route::get('/about', function () {
    return view('web/about-us');
});

Route::get('/contact', function () {
    return view('web/contact');
});

Route::get('/jobDetails', function () {
    return view('web/job-details');
});

Route::get('/joblisting', function () {
    return view('web/job-listing');
});

Route::get('/login', function () {
    return view('web/login');
});

Route::get('/makecv', function () {
    return view('web/makecv');
});

Route::get('/sginup', function () {
    return view('web/sginup');
});

Route::get('/team', function () {
    return view('web/team');
});

Route::get('/services', function () {
    return view('web/testimonials');
});