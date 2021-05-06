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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/camere', function () {
    return view('camere');
});

Route::get('/servizi', function () {

    $data = [
        "messaggio" => 'Questi sono i nostri servizi:',
        "lista_servizi" => [
            "bagno privato interno",
            "set cortesia premium",
            "smart tv 4k",
            "servizio in camera",
            "noleggio biciclette"
        ]
    ];
    return view('servizi', $data);
});

Route::get('/prenota', function () {
    return view('prenota');
});

Route::get('/dove+siamo', function () {
    return view('dove+siamo');
});