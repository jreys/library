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

Route::get('/', 'BooksController@list');

// Author related routes
Route::get('/authors', 'AuthorsController@list');
Route::get('/authors/add', 'AuthorsController@add');
Route::get('/authors/update/{id}', 'AuthorsController@update');
Route::get('/authors/delete/{id}', 'AuthorsController@delete');
Route::post('/authors/store', 'AuthorsController@store');

// Book types related routes
Route::get('/booktypes', 'BookTypesController@list');
Route::get('/booktypes/add', 'BookTypesController@add');
Route::get('/booktypes/update/{id}', 'BookTypesController@update');
Route::get('/booktypes/delete/{id}', 'BookTypesController@delete');
Route::post('/booktypes/store', 'BookTypesController@store');

// Books related routes
Route::get('/books', 'BooksController@list');
Route::get('/books/add', 'BooksController@add');
Route::get('/books/update/{id}', 'BooksController@update');
Route::get('/books/delete/{id}', 'BooksController@delete');
Route::post('/books/store', 'BooksController@store');

Auth::routes();
