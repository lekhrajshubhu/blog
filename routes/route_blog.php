<?php
//blog page route
Route::get('/blog', 'BlogController@index');
Route::get('/blog-dashboard', 'BlogController@dashboard');

Route::post('/blog-store', 'BlogController@store');
