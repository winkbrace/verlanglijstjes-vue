<?php

// web routes
Route::group(['middleware' => 'set-view-variables'], function () {

    Route::get('/', 'WebController@index');
    Route::get('/list/{name}', 'WebController@wishList');

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout');

});

// ajax routes
Route::group(['middleware' => 'auth'], function () {

    Route::get('/toggle-claim/{wish}', 'AjaxController@toggleClaim');

});
