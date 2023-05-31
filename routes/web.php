<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;
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
    return view('customers.home');
});

Route::get('choose', function(){
    return view('choose');
});

Route::get('login', function(){
    return view('users.login');
});

Route::get('register', [UserController::class, 'create']);

Route::post('register', [UserController::class, 'store']);

Route::get('vacancies', [JobController::class, 'index']);

Route::get('resume', [ResumeController::class, 'index']);

Route::get('resume/create', [ResumeController::class, 'create']);
