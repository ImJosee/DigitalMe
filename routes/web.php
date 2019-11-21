<?php

Route::get('/', 'PostController@index');

Route::get('/index', 'PostController@index');

Route::get('/faq', function() {
    return view('faq');
});

Route::post('/register', 'UserController@create');

Route::get('/posts', 'PostController@index');

Route::get('/posts/new', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/profile', 'UserController@index');

Route::get('/posts/{id}', 'PostController@show');

Route::get('/posts/{id}/edit', 'PostController@edit');

Route::patch('/posts/{id}', 'PostController@update');

Route::delete('/posts/{id}', 'PostController@destroy');

Route::get('/profile/{id}', 'UserController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
