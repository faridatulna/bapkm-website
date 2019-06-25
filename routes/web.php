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
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

//ui user
Route::get('/', function () {

    $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
    $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
    $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
    $links = Quicklinks::all();
    $article = Article::orderBy('updated_at', 'desc')->take(4)->get(); 
    $gal_active = Galleries::first();
    $gal = Galleries::all();
    return view('welcome',compact('article','cal','cal_lastest','agenda','links','gal','gal_active') );
});

Route::any ( '/search-result', function () {
    $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
    $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
    $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
    $links = Quicklinks::all();

    $q = Input::get ( 'q' );
    $data = Article::where ( 'title', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'description', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'updated_at', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'url', 'LIKE', '%' . $q . '%' )->orWhere ( 'type', 'LIKE', '%' . $q . '%' )->get();
    $data = Article::where ( 'title', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'description', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'updated_at', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'url', 'LIKE', '%' . $q . '%' )->orWhere ( 'type', 'LIKE', '%' . $q . '%' )->paginate(5);
    // $data = Article::paginate(5);
    //$link = Links::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
    if (count($data) > 0)
        return view ( 'search', compact('cal','cal_lastest','agenda','links'))->withDetails ( $data )->withQuery ( $q );
    else
        return view ( 'search', compact('cal','cal_lastest','agenda','links') )->withQuery ( $q )->withMessage ( 'ami tidak dapat menemukan pencarian anda , Mohon coba lagi.' );
} );


Route::prefix('article')
    ->name('article.')
    ->group(function () {
        
        Route::get('/', function () {
            $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
            $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
            $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();

            $news = Article::orderBy('updated_at', 'desc')->take(4)->get();
            $article = Article::orderBy('updated_at', 'desc')->get();
            $article = Article::orderBy('updated_at', 'desc')->paginate(6);
            return view('article',compact('article','news','cal','cal_lastest','agenda'));
        });
        Route::get('/umum', function () {
            $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
            $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
            $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();

            $news = Article::orderBy('updated_at', 'desc')->where('type','=',4)->take(4)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',4)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',4)->paginate(6);
            return view('article',compact('article','news','cal','cal_lastest','agenda'));
        })->name('umum');
        Route::get('/camaba', function () {
            $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
            $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
            $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();

            $news = Article::orderBy('updated_at', 'desc')->where('type','=',3)->take(4)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',3)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',3)->paginate(6);
            return view('article',compact('article','news','cal','cal_lastest','agenda'));
        })->name('camaba');
        Route::get('/beasiswa', function () {
            $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
            $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
            $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();

            $news = Article::orderBy('updated_at', 'desc')->where('type','=',2)->take(4)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',2)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',2)->paginate(6);
            return view('article',compact('article','news','cal','cal_lastest','agenda'));
        })->name('beasiswa');
        Route::get('/akademik', function () {
            $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
            $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
            $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();

            $news = Article::orderBy('updated_at', 'desc')->take(4)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',1)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',1)->paginate(6);
            return view('article',compact('article','news','cal','cal_lastest','agenda'));
        })->name('akademik');
        Route::get('/wisuda', function () {
            $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
            $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
            $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();

            $news = Article::orderBy('updated_at', 'desc')->take(4)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',5)->get();
            $article = Article::orderBy('updated_at', 'desc')->where('type','=',5)->paginate(6);
            return view('article',compact('article','news','cal','cal_lastest','agenda'));
        })->name('wisuda');

    });

Route::get('/article-page/{id}', 'HomeController@articlepage')->name('article-single-page');
// download files

Route::get('download/{id}', function ($filename) {
    $file= public_path('Uploaded/Article/').$filename;
    return response()->download($file, $filename);
});


Route::prefix('aboutus')
    ->name('aboutus.')
    ->group(function () {
        Route::get('/history', function () {
           return view('aboutus.history');
        })->name('history');
        Route::get('/organigram', function () {
           return view('aboutus.organigram');
        })->name('organigram');
        Route::get('/services', function () {
           return view('aboutus.services');
        })->name('services');

    });

Route::prefix('help')
    ->name('help.')
    ->group(function () {
        Route::get('/', function () {
           return view('help');
        });
        Route::get('/regdat', function () {
            $sop = Helps::where('type','=',1)->get();
            return view('SOP.regdat', compact('sop'));
        })->name('regdat');

        Route::get('/pep', function () {
            $sop = Helps::where('type','=',2)->get();
            return view('SOP.PEP', compact('sop'));
        })->name('pep');

        Route::get('/beasiswa', function () {
            $sop = Helps::where('type','=',3)->get();
            return view('SOP.beasiswa', compact('sop'));
        })->name('beasiswa');

        Route::get('/datkeg', function () {
            $sop = Helps::where('type','=',4)->get();
            return view('SOP.datkeg', compact('sop'));
        })->name('datkeg');
    });


//admin authorities
Auth::routes();

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
    	Route::get('/','AdminController@index');

        Route::get('/article','AdminController@index');
        Route::resource('article','ArticleController');
        Route::get('/calendar','CalendarController@index');
        Route::resource('calendar','CalendarController');
        Route::get('/event','EventController@index');
        Route::resource('event','EventController');
        Route::get('/quicklink','QuicklinkController@index');
        Route::resource('link','QuicklinkController');

        Route::prefix('product')->name('product.')->group(function () {
            Route::get('/create', function () {
               return view('admin.help.create');
            })->name('create');
            Route::get('/sop','SopController@index')->name('sop');
            Route::resource('sop','SopController');
            Route::get('/service','ServiceController@index')->name('service');
            Route::resource('service','ServiceController');
        });

        Route::prefix('home')->name('home.')->group(function () {
            Route::get('/carousel','GalleryController@index')->name('carousel');
            Route::resource('carousel','GalleryController');

        });


        Route::resource('gallery','GalleryController');
        Route::resource('user','UserController');

        Route::prefix('aboutus')
            ->name('aboutus.')
            ->group(function () {
                Route::get('/history', function () {
                   return view('admin.aboutus.history');
                })->name('history');
                Route::get('/organigram', function () {
                   return view('admin.aboutus.organigram');
                })->name('organigram');
                Route::get('/profile', function () {
                   return view('admin.aboutus.profile');
                })->name('profile');
                Route::resource('','AboutusController');
            });


    });

Auth::routes();
