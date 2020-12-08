<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

//administrateur

Auth::routes();
Auth::routes();
Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/crud-article', [UserController::class, 'create'])->name('crud-article');
Route::get('/list-article', [UserController::class, 'index2'])->name('list-article');
Route::get('/show-article/{id}', [UserController::class, 'show']);
Route::get('/edit-article/{id}', [UserController::class, 'edit']);

//function

Route::post('/create-article', [UserController::class, 'store']);
Route::post('/delete-article/{id}', [UserController::class, 'destroy']);

//Visiteur

Route::get('/', function () {
    return view('welcome');
});

//Membre

Route::get('/article', [HomeController::class,'index']);


