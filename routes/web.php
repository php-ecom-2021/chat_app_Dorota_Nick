<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserMessagesController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', [RegisterController::class, 'index'])
->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])
->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])
->name('logout');

Route::get('/messages', [MessagesController::class, 'index'])
->name('messages');
Route::get('/messages/{user}', [MessagesController::class, 'show'])
->name('messages.show');


Route::get('/search/{name?}', [SearchController::class, 'search'])
->name('search');