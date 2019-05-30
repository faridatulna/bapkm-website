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
use App\Links;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    //$article = Article::all();
    $article = Article::orderBy('tgl_post', 'desc')->take(2)->get(); //sort by desc
    $articleBeasiswa = Article::orderBy('tgl_post', 'desc')->where('jenis','=',1)->take(2)->get();
    $articleUKM = Article::orderBy('tgl_post', 'desc')->where('jenis','=',2)->get();
    return view('welcome1',compact('article','articleBeasiswa'));
});

Route::any ( '/search-result', function () {
    
    $q = Input::get ( 'q' );
    $data = Article::where ( 'title', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'description', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'tgl_post', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'url', 'LIKE', '%' . $q . '%' )->get ();
    //$link = Links::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $data ) > 0)
        return view ( 'search' )->withDetails ( $data )->withQuery ( $q );
    else
        return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );


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


//admin authorities
Auth::routes();

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
    	Route::get('/','AdminController@index');
        Route::resource('article','ArticleController');
        Route::get('/article/posts/{id}', 'ArticleController@posts')->name('article.posts');
        Route::prefix('article')->name('article.')->group(function () {

        });
        
        Route::resource('link','LinksController');
        Route::resource('user','UserController');
    });

Auth::routes();
