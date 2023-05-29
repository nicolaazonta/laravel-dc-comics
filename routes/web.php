<?php


use App\Http\Controllers\Guests\ComicController;
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


Route::get('/', [ComicController::class, 'index'])->name('home');
Route::get('/comics', [ComicController::class, 'comics'])->name('comics');

Route::get('/comics/{comic}', [ComicController::class, 'comic'])->name('comic');


