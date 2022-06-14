<?php

use App\Http\Controllers\MovieController;
// use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\ReviewController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class)->names('users');
Auth::routes(); //Login logout and register
Route::resource('roles', RoleController::class)->names('roles');

//Movie Routes
//Get 1 movie
Route::get('movies/{id}', [MovieController::class, 'showFromWatchlist'])->name('show.from.watchlist');


//Watchlist
Route::get('add-to-watchlist/{movieid}', [WatchlistController::class, 'addToWatchlist'])->name('addToWatchlist');
Route::get('/watchlist/{id}', [WatchlistController::class, 'show'])->name('displayWatchlist');
Route::get('/delete-watchlist-item/{id}', [WatchlistController::class, 'destroy'])->name('delete.watchlist.item');


//Reviews
Route::resource('reviews', ReviewController::class);
//Route::resource('movies.reviews', ReviewController::class)->shallow();

//Route for searchbar
Route::get('/search/query', [SearchController::class, 'query']);
