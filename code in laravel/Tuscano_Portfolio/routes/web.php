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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('home');
Route::get('/skills', 'HomeController@skills')->name('home');	
Route::get('/resume', 'HomeController@resume')->name('home');
Route::get('/reference', 'HomeController@reference')->name('home');
Route::get('/portfolio', 'HomeController@portfolio')->name('home');
Route::get('/hireme', 'HomeController@hireme')->name('home');
Route::get('/contactme', 'HomeController@contactme')->name('home');
Route::get('/blog', 'HomeController@blog')->name('home');
Route::get('/admin', 'HomeController@admin')->name('home');

Route::post('/admin', 'HomeController@destroy')->name('delete');

Route::get('/add', 'HomeController@add')->name('add');
Route::get('/edit', 'HomeController@edit')->name('edit');

