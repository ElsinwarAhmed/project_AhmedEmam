<?php

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
// لا يفضل كتابة اكواد داخل الراوت .. لكن يفض كتابتها في الكونترولار


// Multi Lang to all touts
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {


        // Import Welcome Page and passing data to view From Route
        Route::get('/', function () {
            return view('pages.welcome', [
                'name' => "Ahmed",
                'age' => 22
            ]);
        });

        // Import Welcome Page and passing data to view From Controller
        Route::get('/index', 'Front\FirstController@getWelcomePage');

        Route::get('/add', function () {
            return view('pages.addDestination');
        })->name('addDestination');

        Route::get('/edit', function () {
            return view('pages.editDestination');
        })->name('editDestination');

        Route::get('test/{id}', function ($id) {
            return "Welcome" . $id;
        })->name("test");

        Route::get('test1/{id?}', function () {  //{id?} >> تنفذ في حال تمرير باراميتر او بدون تمرير
            return "Hello";
        })->name("test1");

        // Route::prefix("users")->group(function () {
        //     Route::get('show', 'UserController@showUsername');
        //     Route::delete('delete', 'UserController@showUsername');
        //     Route::get('edit', 'UserController@showUsername');
        //     Route::put('update', 'UserController@showUsername');
        // });

        // another syntax for group

        // Route::group(['prefix' => 'users'], function () {
        //     Route::get('/', function () {
        //         return "Hello, Users";
        //     })->name("users");
        //     Route::get('show', 'UserController@showUsername');
        //     Route::delete('delete', 'UserController@showUsername');
        //     Route::get('edit', 'UserController@showUsername');
        //     Route::put('update', 'UserController@showUsername');
        // });

        // ============= namespace ===========
        // folder that contain files of controller.
        // use to ignor name file 'Front\SecondController@showString'  >>  'SecondController@showString'

        // route::namespace('Front')->group(function () {
        //     // name space is spesiall for controller
        //     Route::get('second', 'SecondController@showString');
        //     // UserController : controller name that exist in fronف folder
        //     // showUsername :function that exist in UserController file
        // });

        // Route::get('second', 'Front\SecondController@showString');

        // Use Group , name space rather than get
        Route::group(['namespace' => 'Front'], function () {
            Route::get('second', 'SecondController@showString');
        });

        // route resource
        // import all function in controllerName in one line code
        Route::resource('news', 'NewsController');
        // in case i need import one func use
        // Route::get('news', 'NewsController@index');

        Auth::routes(['verify' => true]);

        Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

        Route::get('/redirect/{service}', 'SocialController@redirect')->name('redirect');
        Route::get('/callback/{service}', 'SocialController@callback');

        Route::get('fillabel', 'CrudController@getOffers');


        Route::group(['prefix' => 'offers'], function () {
            // Route::get('store', 'CrudController@store');
            Route::get('create', 'CrudController@create')->name("create");
            Route::Post('store', 'CrudController@store')->name('store');
            Route::get('all', 'CrudController@index')->name('all');
        });
    }
);
