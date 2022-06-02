<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\show;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/calculater', function () {
    return view('calculater');
});

Route::post('/calculater',[show::class,'add'])->name('value');
//Route::post('/calculater',[show::class,'subtract'])->name('value1');

