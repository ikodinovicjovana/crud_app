<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('items', ItemController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');

Route::get('/', function () {
    return view('sessions.create');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');


Route::post('categories/{category:id}', [CategoryController::class, 'store'])->middleware('auth');
Route::get('categories/{category:id}', [CategoryController::class, 'edit'])->middleware('auth');
Route::patch('categories/{category:id}', [CategoryController::class, 'update'])->middleware('auth');
Route::delete('categories/{category:id}', [CategoryController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('new-item', [ItemController::class, 'create'])->middleware('auth');
Route::post('items', [ItemController::class, 'store'])->middleware('auth');
Route::get('items/{item:name}', [ItemController::class, 'edit'])->middleware('auth');
Route::patch('items/{item:name}', [ItemController::class, 'update'])->middleware('auth');
Route::delete('items/{item:name}', [ItemController::class, 'destroy'])->middleware('auth');


Route::get('new-user', [UserController::class, 'create'])->middleware('auth');
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user:name}', [UserController::class, 'edit'])->middleware('auth');
Route::patch('users/{user:name}', [UserController::class, 'update'])->middleware('auth');
Route::delete('users/{user:name}', [UserController::class, 'destroy'])->middleware('auth');
