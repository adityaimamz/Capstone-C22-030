<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/sukses', function () {
    return view('sukses');
});
Route::get('/error', function () {
    return view('gagal');
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
Route::get('/logout', function () {
    return redirect('/')->with(Auth::logout());
});
Route::post('/daftar', [UserController::class, 'register_action']);
Route::post('/login', [UserController::class, 'login_action']);
Route::post('/konsultasi/store', [KonsultasiController::class, 'store']);
Route::post('/konsultasi/store', [KonsultasiController::class, 'store']);

Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {
    Route::get('/admin', [KonsultasiController::class, 'dashboardadmin']);
});
Route::get('/blog', [ArticleController::class, 'getAllArticles']);
Route::get('/detail/{id}', [ArticleController::class, 'getArticles']);
Route::get('/blog/{id}', [ArticleController::class, 'getArticlesByCategory']);


Route::group(['middleware' => ['auth', 'CekLevel:user']], function () {
    Route::get('/user', [UserController::class, 'dashboarduser']);
});
Route::get('/blog-user', function () {
    return view('user.blog-user');
});
Route::get('/home-user', function () {
    return view('user.dashboard-user');
});
Route::get('/konsultasi-user', [KonsultasiController::class, 'index']);
Route::get('/acc/{kode}', [KonsultasiController::class, 'acc']);
Route::get('/blog-user', [ArticleController::class, 'getAllArticlesUser']);
Route::get('/blog-user/{id}', [ArticleController::class, 'getArticlesByCategoryUser']);
Route::get('/detail-user/{id}', [ArticleController::class, 'getArticlesUser']);
