<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/favorite', function () {
    return view('favorite');
});
Route::get('/konsultasi', function () {
    return view('konsultasi');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::post('/daftar', [UserController::class, 'register_action']);
Route::post('/login', [UserController::class, 'login_action']);
Route::get('/blog', [ArticleController::class,'getAllArticles']);
Route::get('/detail/{id}', [ArticleController::class,'getArticles']);
Route::get('/detail/{id}/fav', [ArticleController::class,'getArticles']);
Route::get('/blog/{id}', [ArticleController::class, 'getArticlesByCategory']);
