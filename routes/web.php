<?php

Route::get('/welcome', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('/login', 'HomeController@login');



Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/registerUser', 'HomeController@register');
Route::post('/logout', function() {
	\Auth::guard()->logout();
	return redirect('/');
})->name('logout');

Route::get('/home', 'HomeController@index')->name('home');


