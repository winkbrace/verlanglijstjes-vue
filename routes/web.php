<?php

Route::get('/', 'WebController@index');
Route::get('/list/{name}', 'WebController@wishList');

Route::get('test', 'WebController@test');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

