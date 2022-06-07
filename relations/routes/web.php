<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
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


Route::view("home", "home" );

Route::view('noAccess', "noAccess" );

Route::view('upload', "upload" );
Route::post('upload', [UploadController::class,'index'] );
//Route::view('user', "user" )->middleware('protectedPage');




// Route::middleware(['protectedPage'])->group(function () {
//     Route::view('user', "user" );
// });
