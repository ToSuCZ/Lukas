<?php

Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/admin', 'SessionController@create');
Route::post('/admin', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
});