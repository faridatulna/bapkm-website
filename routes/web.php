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
    return view('welcome1');
});

Route::get('/b', function () {
 $article = Article::all();
   return view('welcome',compact('article'));
})->name('welcome');

Route::get('/articles', function () {
	$article = Article::all();
    return view('article',compact('article'));
});
Route::get('/article-page/{id}', 'HomeController@articlepage')->name('article-single-page');
Route::get('/about', function () {
    return view('about');
});


Auth::routes();

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
    	Route::get('/','AdminController@index');
        Route::resource('article','ArticleController');
        Route::get('/article/posts/{id}', 'ArticleController@posts')->name('article.posts');
        Route::prefix('article')->name('article.')->group(function () {

        });
        
        Route::resource('link','linksController');
        Route::resource('user','UserController');
    });

Auth::routes();
