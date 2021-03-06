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

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redis;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::get('/login/redirect/{provider}', 'Auth\SocialController@redirect')->name('login.social');
Route::get('/login/callback/{provider}', 'Auth\SocialController@callback');

if (!config('app.isDemo')) {
    Route::group(['namespace' => 'Home'],
        function () {
            Route::get('/', 'HomeController@index');
            Route::get('/home', 'HomeController@index')->name('home');
            Route::post('/contact', 'HomeController@contact')->name('contact');
            Route::get('/donate', 'DonateController@index')->name('donate');
            Route::resource('posts', 'PostsController');
        });
} else {

    Route::get('/', function () {
        return redirect('user');
    });
    Route::get('/home', function () {
        return redirect('user');
    })->name('home');
    Route::get('/donate', function () {
        return redirect('user/donate');
    })->name('donate');

}

Route::get('/users/{soon}', function () {
    return view('comingSoon');
})->where(['soon' => '.*'])->name('coming_soon');
Route::get('/user/{all?}', function () {
    return view('dashboard');
})->where(['all' => '.*'])->name('user')->middleware('auth');