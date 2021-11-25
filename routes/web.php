<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;

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
    return view('home', [
        'title' => 'Home',
        'msg' => 'Hallo ini halaman home!'
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
