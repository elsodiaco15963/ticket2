<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create_user', [UserController::class, 'create'])->name('create_user')->middleware('auth');
Route::post('/create_user', [UserController::class, 'store'])->middleware('auth');
Route::get('/list_user', [UserController::class, 'index'])->name('list_user');
Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('edit_user');
Route::put('/user/{id}', [UserController::class, 'update'])->name('update_user');


