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
    
    // Route::get('/', 'AuthorsController@index');
    // Route::post('/authors/update', 'AuthorsController@update');
    // Route::get('/post/create/{author}', 'PostController@create');
    // Route::post('/post/add', 'PostController@storeNew');
    // Route::get('/post/delete/{id}', 'PostController@delete');
    // Route::get('/post/update/{id}', 'PostController@update');
    // Route::post('/post/store', 'PostController@store');
    Route::resource('authors', 'AuthorsController');
    Route::resource('posts', 'PostsController');
    
    
    // Route::get('/authors/create', 'AuthorsController@create');

    // Route::get('/authors/delete/{id}', 'AuthorsController@delete');

    // Route::get('/authors/{id}', 'AuthorsController@show');

    // Route::post('/authors', 'AuthorsController@store');

    // Route::get('/post/{id}', 'PostsController@show');
