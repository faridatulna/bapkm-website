<?php

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
use App\Article;

Route::get('/', function () {
	$article = Article::all();
    return view('welcome',compact('article'));
})->name('welcome');

Route::get('/article/{id}', 'ArticleController@articlepage')->name('article-page');

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

// Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware(['auth','auth.admin']);

Route::get('/admin', 'AdminController@index')->name('admin.article')->middleware(['auth','auth.admin']);

//resources
Route::resource('article','ArticleController');

Auth::routes();