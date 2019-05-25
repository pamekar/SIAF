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

Route::get('/redisflush', function () {
    Redis::flushall();
});
Route::get('/redistest', function () {
    // check if redis has posts.all key exits
    // if posts found then it will return all post without touching the database
    if ($posts = Redis::get('posts.all')) {
        echo "<br> from redis" . json_encode($posts) . "<br> from redis";
        return json_encode($posts);
    }

    // get all post
    $posts = \App\User::all();

    // store data into redis for next 24 hours
    Redis::setex('posts.all', 60 * 60 * 24, $posts);

    // return all posts
    echo "<br>not from redis" . json_encode($posts) . "<br> not from redis";
    return $posts;
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

if (!config('app.isDemo')) {
    Route::group(['namespace' => 'Home'],
        function () {
            Route::get('/', 'HomeController@index');
            Route::get('/home', 'HomeController@index')->name('home');
            Route::post('/contact', 'HomeController@contact')->name('contact');
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

Route::get('/users/{soon}', function () {
    return view('comingSoon');
})->where(['soon' => '.*'])->name('coming_soon');
Route::get('/user/{all?}', function () {
    return view('dashboard');
})->where(['all' => '.*'])->name('user')->middleware('auth');