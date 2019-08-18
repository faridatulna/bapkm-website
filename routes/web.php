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

Route::post('/storeFeedback','HomeController@storeFeedback')->name('storeFeedback');

Route::prefix('aboutus')
    ->name('aboutus.')
    ->group(function () {
        Route::get('/history', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');
           return view('aboutus.history',compact('announce','cdatetime','sumVisits','visitor'));
        })->name('history');

        Route::get('/organigram', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');
           return view('aboutus.history',compact('announce','cdatetime','sumVisits','visitor'));
        })->name('organigram');

        Route::get('/profile', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');
           return view('aboutus.history',compact('announce','cdatetime','sumVisits','visitor'));
        })->name('profile');

    });

Route::prefix('help')
    ->name('help.')
    ->group(function () {
        Route::get('/', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors','sumVisits');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');
           return view('help', compact('announce','cdatetime','visitor'));
        });
        Route::get('/regdat', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

            $sop = Helps::where('type','=',1)->get();
            return view('SOP.regdat', compact('sop','announce','cdatetime','sumVisits','visitor'));
        })->name('regdat');

        Route::get('/pep', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

            $sop = Helps::where('type','=',2)->get();
            return view('SOP.PEP', compact('sop','announce','cdatetime','sumVisits','visitor'));
        })->name('pep');

        Route::get('/beasiswa', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

            $sop = Helps::where('type','=',3)->get();
            return view('SOP.beasiswa', compact('sop','announce','cdatetime','sumVisits','visitor'));
        })->name('beasiswa');

        Route::get('/datkeg', function () {
            //runnint-text
            $announce = Announce::all();
            $cdatetime = \Carbon\Carbon::now();
            //visitor-counter
            $sumVisits = DB::table('counters')->sum('today_visitors');
            $now_date = date("Y-m-d");
            $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');
            
            $sop = Helps::where('type','=',4)->get();
            return view('SOP.datkeg', compact('sop','announce','cdatetime','sumVisits','visitor'));
        })->name('datkeg');
    });

//ADMIN AUTHORITIES
Auth::routes();

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
    	Route::get('/','HomeAdminController@index');
        Route::post('/add-running-text', 'HomeAdminController@storeRunningText')->name('addrunningtext');
        Route::post('/del-running-text', 'HomeAdminController@destroyRunningText')->name('delrunningtext');
        Route::get('/customers/{id}', 'HomeAdminController@customersRate')->name('customersRate');

        Route::get('/article','HomeAdminController@index');
        Route::get('/articleCategory/{id}','ArticleController@showCategory')->name('ArticleCategory');
        
        Route::resource('article','ArticleController'); 
        Route::get('/event','EventController@index');
        Route::resource('event','EventController');
        Route::get('/quicklink','QuicklinkController@index');
        Route::resource('link','QuicklinkController');
        Route::resource('filter','FilterController');

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

    });

Auth::routes();
