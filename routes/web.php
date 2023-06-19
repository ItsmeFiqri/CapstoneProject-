<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
// Request kehalaman yang dituju dengan method get panggil controller dengan class yang di tuju
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Request kehalaman yang dituju dengan method post panggil controller dengan class yang di tuju
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticade']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
