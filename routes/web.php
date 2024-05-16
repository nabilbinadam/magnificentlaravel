<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SpotifyFetchController;
use App\Http\Controllers\ArtistController;
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
    return view('welcome to magnifecent');
});

Route::get('/home',[HomeController::class,'index']);
Route::resource('/song',SongController::class);
Route::get('/artistInfo',[SpotifyFetchController::class,'fetch']);
Route::get ('/StoreInfo',[ArtistController::class ,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/SpotifyToken',[SpotifyFetchController::class,'fetch']);