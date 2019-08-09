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
use App\Events;
use App\Helps;
use App\Services;
use App\Galleries;
use App\Quicklinks;
use App\counter;
use App\Announce;
use App\Aboutus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

//ui user

Route::get('/', 'HomeController@index')->name('welcome');

Route::any('/search-result', 'HomeController@search')->name('search');

Route::get('/feedback','HomeController@showFeedback')->name('feedback');

Route::prefix('article')
    ->name('article.')
    ->group(function () {
        Route::get('/', 'HomeController@articlePage')->name('all');
        Route::get('/category/{id}', 'HomeController@articleCategory')->name('category');
    });
Route::get('/article-page/{id}', 'HomeController@articleSinglePage')->name('article-page');

// download files
Route::get('download/{id}', function ($filename) {
    $file= public_path('Uploaded/Article/').$filename;
    return response()->download($file, $filename);
});

//comment and reply
Route::resource('comment','CommentController');
Route::post('/comment/add', 'CommentController@store')->name('comment.add');
Route::post('/reply/add', 'CommentController@replyStore')->name('reply.add');

Route::prefix('aboutus')
    ->name('aboutus.')
    ->group(function () {
        Route::get('/history', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
           return view('aboutus.history',compact('announce','cdatetime'));
        })->name('history');

        Route::get('/organigram', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
           return view('aboutus.organigram',compact('announce','cdatetime'));
        })->name('organigram');

        Route::get('/profile', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
           return view('aboutus.profile',compact('announce','cdatetime'));
        })->name('profile');

    });

Route::prefix('help')
    ->name('help.')
    ->group(function () {
        Route::get('/', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
           return view('help', compact('announce','cdatetime'));
        });
        Route::get('/regdat', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            $sop = Helps::where('type','=',1)->get();
            return view('SOP.regdat', compact('sop','announce','cdatetime'));
        })->name('regdat');

        Route::get('/pep', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            $sop = Helps::where('type','=',2)->get();
            return view('SOP.PEP', compact('sop','announce','cdatetime'));
        })->name('pep');

        Route::get('/beasiswa', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            $sop = Helps::where('type','=',3)->get();
            return view('SOP.beasiswa', compact('sop','announce','cdatetime'));
        })->name('beasiswa');

        Route::get('/datkeg', function () {
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            $sop = Helps::where('type','=',4)->get();
            return view('SOP.datkeg', compact('sop','announce','cdatetime'));
        })->name('datkeg');
    });

//ADMIN AUTHORITIES
Auth::routes();

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
    	Route::get('/','HomeAdminController@index');
        Route::post('/add-running-text', 'HomeAdminController@storeRunningText')->name('addrunningtext');

        Route::get('/article','HomeAdminController@index');
        Route::resource('article','ArticleController');
        Route::get('/calendar','CalendarController@index');
        Route::resource('calendar','CalendarController');
        Route::get('/event','EventController@index');
        Route::resource('event','EventController');
        Route::get('/quicklink','QuicklinkController@index');
        Route::resource('link','QuicklinkController');

        Route::post('/comment-add', 'CommentController@store')->name('comment-add')->middleware('auth.admin');
        Route::post('/reply-add', 'CommentController@replyStore')->name('reply-add')->middleware('auth.admin');

        Route::prefix('product')->name('product.')->group(function () {
            Route::get('/create', function () {
               return view('admin.help.create');
            })->name('create');
            Route::get('/sop','SopController@index')->name('sop');
            Route::get('/service','ServiceController@index')->name('service');

        });

        Route::resource('sop','SopController');
        Route::resource('service','ServiceController');

        Route::prefix('home')->name('home.')->group(function () {
            Route::get('/carousel','GalleryController@index')->name('carousel');
        });

        Route::resource('gallery','GalleryController');
        Route::resource('user','UserController');

        Route::prefix('aboutus')
            ->name('aboutus.') //['hist-logo','hist-name','hist-gallery','org','profile-ap','profile-km','home']
            ->group(function () {
                Route::get('/history', function () {
                    $histlogo = Aboutus::where('type','=',1)->get();
                   return view('admin.aboutus.history',compact('histlogo','histname','histgal'));
                })->name('history');
                Route::get('/organigram', function () {
                   return view('admin.aboutus.organigram');
                })->name('organigram');
                Route::get('/profile', function () {
                   $profap = Aboutus::where('type','=',5);

                   return view('admin.aboutus.profile',compact('profap'));
                })->name('profile');

            });
        Route::resource('aboutus','AboutusController');
    });

Auth::routes();
