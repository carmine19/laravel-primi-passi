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

//home
Route::get('/', function () {

    $data = [
        'nome' => 'Zio Fester',
        'todo' => ['mangiare','bere','uscire'],
    ];

    return view('home', $data);
})->name('home');

//chi siamo
Route::get('/chi-siamo', function () {

     $data = [
        'fondatori' => ['pippo','pluto','paperino','topolino'],
    ];

    return view('chi-siamo', $data);
})->name('chi-siamo');
