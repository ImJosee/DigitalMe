<?php

Route::get('/', 'PostController@index');

Route::get('/index', 'PostController@index');

Route::get('/faq', 'QuestionController@index');

Route::get('/contact', 'ContactController@create')->middleware('auth');

Route::post('/register', 'UserController@create');

Route::get('/posts', 'PostController@index');

Route::get('/posts/new', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/profile', 'UserController@profile')->middleware('auth');

Route::get('/users', 'UserController@index');

Route::get('/follows/{id}', 'FollowersController@show');

Route::get('/followers/{id}', 'FollowersController@show');

Route::get('/users/{id}/edit', 'UserController@edit')->middleware('auth')->middleware('user.verifyid');

Route::patch('/users/{id}', 'UserController@update')->middleware('auth');

Route::get('/posts/{id}', 'PostController@show');

Route::get('/posts/{id}/edit', 'PostController@edit')->middleware('user.verifyid');

Route::post('/posts/{id}/like', 'PostController@like')->middleware('auth');

Route::patch('/posts/{id}', 'PostController@update');

Route::delete('/posts/{id}', 'PostController@destroy');

Route::get('/profile/{id}', 'UserController@show')->middleware('auth');

Route::post('/follow/{id}', 'FollowersController@store')->middleware('auth');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');

Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
