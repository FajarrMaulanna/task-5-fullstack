<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
/*
Route::get('/', function () {
    return view('landing');
});
*/
Route::get('/', [App\Http\Controllers\FrontController::class, 'landing']);
Route::get('/menuberita', [App\Http\Controllers\FrontController::class, 'menuberita']);
Route::get('/showberita/{id}', [App\Http\Controllers\FrontController::class, 'showberita']);

Route::resource('posts', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('post');
Route::post('/tinyimg', [App\Http\Controllers\PostController::class, 'tinyimg']);
