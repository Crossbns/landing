<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;



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

Route::post('/user', [SignupController::class, 'regist']);

Route::get('/form', function () {
    return view('form');
});





Route::post('/add/crear', 'App\Http\Controllers\AddController@crear');
use App\Http\Controllers\DeleteController;

Route::delete('/delete/eliminar', [DeleteController::class, 'eliminar']);

use App\Http\Controllers\MailController;

Route::post('/mail/make', [MailController::class, 'make']);

use App\Http\Controllers\SigninController;

Route::post('/signin/iniciar', [SigninController::class, 'iniciar']);

Route::post('/signup/regist', 'App\Http\Controllers\SignupController@regist');

Route::put('/update/modificar', 'App\Http\Controllers\UpdateController@modificar');
