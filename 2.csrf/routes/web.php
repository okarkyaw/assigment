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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/articles/{article}', 'ArticleController@show');
// Route::get('/articles', 'ArticleController@index');

Route::resource(
    'articles',
    'ArticleController'
)->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');
