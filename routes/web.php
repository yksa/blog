<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

// Route::get('articles/detail/{id}', 'App\Http\Controllers\ArticleController@detail');
Route::get('articles/detail/{id}', [ArticleController::class, 'detail']);

Route::get('articles/more', function(){
    return redirect()->route('article.detail');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/add', [App\Http\Controllers\ArticleController::class, 'add']);
Route::post('/articles/add', [App\Http\Controllers\ArticleController::class, 'create']);
Route::delete('/articles/delete/{id}', [App\Http\Controllers\ArticleController::class, 'delete']);
