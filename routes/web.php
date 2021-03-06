<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('/blog', [PostsController::class, 'index']);

Route::post('/blog', [PostsController::class,'store']);

Route::get('/blog/{slug}/edit', [PostsController::class, 'edit']);

Route::post('/blog/{slug}/update', [PostsController::class, 'update']);

Route::post('/blog/{slug}', [PostsController::class, 'destroy']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search/query', [SearchController::class, 'query']);
Route::get('/search/add', [SearchController::class, 'add']);
