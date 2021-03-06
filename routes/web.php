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
Route::get('/blog', 'IndexController@index')->name('home');

Route::get('/blog/about/', 'IndexController@about')->name('about');


Route::get('/blog/details/{id}','IndexController@articles' )->name('details{id}');
