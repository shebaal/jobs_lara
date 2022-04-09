<?php

namespace App\Http\Controllers;

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

Route::get('/', [homeController::class, 'index'])->name('index');
Route::get('/about', [homeController::class, 'about']);
Route::get('/contact', [contactController::class, 'contact']);
Route::get('/jobdetails', [jobDetailsController::class, 'jobdetails']);
Route::get('/joblisting', [jobListingController::class, 'joblisting']);
Route::get('/service', [ServicesController::class, 'service']);
Route::get('/team', [teamController::class, 'team']);
Route::get('/makecv', [makeCvController::class, 'makecv']);


// Dashboard

Route::get('/showlogin', [AuthController::class, 'showlogin'])->name('showlogin');
Route::post('/login', [AuthController::class, 'login'])->name('do_login');


Route::get('/signup', [AuthController::class, 'signup'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');


Route::get('/save_customer', [teamController::class, 'addCustomer']);
Route::get('/show_customer/{id}', [teamController::class, 'selectCustomer']);
Route::get('/allcustomers', [teamController::class, 'listAll']);
