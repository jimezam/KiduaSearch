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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Auth::routes();

Route::get('/', 'SearchController@index')->name('explorer');

Route::get('/search','SearchController@search')->name('search');

// Route::get('/home', 'HomeController@index')->name('home');


// DISABLE login/logout/register features of portal //
//////////////////////////////////////////////////////

Route::any('register', function(){
    return redirect('/');
});

/*
Route::any('login', function(){
    return redirect('/');
});

Route::any('logout', function(){
    return redirect('/');
});
*/
