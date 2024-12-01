<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home-users', function () {
    return view('home-users');
});

Route::get('/cadastro-paciente', function () {
    return view('cadastrar-paciente');
});

Route::get('/home-nutri', function () {
    return view('home-nutri');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/nutri-profile', function () {
    return view('nutri-profile');
});

Route::get('/home-reserva', function () {
    return view('home-usersReserva');
});