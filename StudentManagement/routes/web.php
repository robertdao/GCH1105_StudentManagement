<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\ClassController;


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
Route::resource('/class', ClassController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function(){
    return view('layout.index');
});
Route::get('login', [AuthenticationController::class, 'loginIndex']);
Route::get('register', [AuthenticationController::class, 'registerIndex']);
Route::post('register', [AuthenticationController::class, 'register']);