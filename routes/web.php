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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/snippet/index', 'SnippetController@index')->where('id', '[0-9]+')->name('snippet.index');
Route::get('/snippet/{id}/show', 'SnippetController@show')->where('id', '[0-9]+')->name('snippet.show');
Route::get('/snippet/create', 'SnippetController@create')->name('snippet.create');
Route::get('/snippet/{id}/edit', 'SnippetController@edit')->where('id', '[0-9]+')->name('snippet.edit');
Route::post('/snippet', 'SnippetController@store')->name('snippet.store');
Route::post('/snippet/{id}', 'SnippetController@update')->where('id', '[0-9]+')->name('snippet.update');
Route::delete('/delete', 'SnippetController@destroy')->name('snippet.destroy');


