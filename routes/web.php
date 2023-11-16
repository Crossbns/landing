<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SigninController;

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
    return view('mainpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/adm', function () {
    return view('adm');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/form', function () {
    return view('form');
});

// Signin Routes
Route::post('/login', 'App\Http\Controllers\SigninController@iniciar');
Route::post('/signin/iniciar', [SigninController::class, 'iniciar']);

// Signup Routes
Route::post('/user', [SignupController::class, 'regist']);
Route::post('/signup/regist', 'App\Http\Controllers\SignupController@regist');

// Add Routes
Route::post('/add/crear', 'App\Http\Controllers\AddController@crear');

// Delete Routes
Route::delete('/delete/eliminar', [DeleteController::class, 'eliminar']);

// Mail Routes
Route::post('/mail/make', [MailController::class, 'make']);

// Update Routes
Route::put('/update/modificar', 'App\Http\Controllers\UpdateController@modificar');
