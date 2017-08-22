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
    
    Route::get('/', 'AuthorsController@index');
    Route::resource('authors', 'AuthorsController');
    Route::resource('post', 'PostController');
    
    //
    // Route::get('/authors/create', 'AuthorsController@create');
    //
    // Route::post('/authors/update', 'AuthorsController@update');
    //
    // Route::get('/authors/delete/{id}', 'AuthorsController@delete');
    //
    // Route::get('/authors/{id}', 'AuthorsController@show');
    //
    // Route::post('/authors', 'AuthorsController@store');
    //
    // Route::get('/post/update/{id}', 'PostsController@update');
    //
    // Route::post('/post/store', 'PostsController@store');
    //
    // Route::get('/post/create/{author}', 'PostsController@create');
    //
    // Route::post('/post/add', 'PostsController@storeNew');
    //
    // Route::get('/post/delete/{id}', 'PostsController@delete');
    //
    // Route::get('/post/{id}', 'PostsController@show');
