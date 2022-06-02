<?php

use App\Http\Controllers\pass;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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

Route::get('/', function () {
    return view('index');
});


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/home', function () {
//     return view('home');
// });



//  Route::view('/',"login");

 //Route::view('/',"about");
//  Route::view('/',"contact");



Route::get('/viewInfo',[RegisterController::class,'getall']);

Route::get('/getId',[RegisterController::class,'getid']);

Route::get('/home',[pass::class,'home']);
Route::get('/about',[pass::class,'about']);

