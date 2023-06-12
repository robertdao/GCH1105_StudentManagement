<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MajorController;

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
Route::get('/index', function(){
    return view('layout.index');
});
Route::get('login', [AuthenticationController::class, 'loginIndex']);
Route::post('login', [AuthenticationController::class, 'login']);
Route::get('register', [AuthenticationController::class, 'registerIndex']);
Route::post('register', [AuthenticationController::class, 'register']);
Route::resource('major',MajorController::class);