<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
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




Auth::routes();

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('admin/home', [HomeController::class, 'adminhome'])->name('admin.home')->middleware('is_admin');
Route::get('/course', [HomeController::class, 'course'])->name('course');
