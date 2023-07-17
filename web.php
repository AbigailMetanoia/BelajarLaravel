<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ArticleController;
use App\Http\Livewire\Article;
use App\Http\Livewire\LifcycleHooks;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users.index');
})->name('users.home');

Route::get('/user/{id}',[userController::class,'show'])->name('users.details');
Route::get('/user/{id}/edit',[userController::class,'edit'])->name('users.edit');

Route::get('article/{name}',Article::class)->name('article');

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('articles',ArticleController::class)->name('articles');

// // route blog
// Route::get('/blog', 'BlogController@home');
// Route::get('/blog/tentang', 'BlogController@tentang');
// Route::get('/blog/kontak', 'BlogController@kontak');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


