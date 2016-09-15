<?php

Route::group(['middleware' => 'set-view-variables'], function () {

    Route::get('/', 'WebController@index');
    Route::get('/list/{name}', 'WebController@wishList');

    Route::get('test', 'WebController@test');

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout');

});
