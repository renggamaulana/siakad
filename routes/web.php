<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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

// Load The Pages
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/login', [PagesController::class, 'login'])->name('login')->middleware('guest');
Route::get('/students', [PagesController::class, 'students']);
Route::get('/admission', [PagesController::class, 'admission']);
Route::get('/register', [PagesController::class, 'register'])->middleware('guest');
Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');

// Method
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);
