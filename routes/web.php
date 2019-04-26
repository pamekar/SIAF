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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

if (!config('app.isDemo')) {
    Route::group(['namespace' => 'Home'],
        function () {
            Route::get('/', 'HomeController@index');
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/donate', 'DonateController@index')->name('donate');
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


Route::get('user', function () {
    return view('dashboard');
})->name('user')->middleware('auth');
