<?php

// web routes
Route::group(['middleware' => 'set-view-variables'], function () {

    Route::get('/', 'WebController@index');
    Route::get('/list/{name}', 'WebController@wishList');

    Route::get('/wish/add', 'WebController@addWish');
    Route::get('/wish/edit/{wish}', 'WebController@editWish');


    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout');

});

// auth routes
Route::group(['middleware' => 'auth'], function () {

    Route::post('/wish/update/{wish}', 'WebController@updateWish');
    Route::post('/wish/create', 'WebController@createWish');

    Route::get('/toggle-claim/{wish}', 'AjaxController@toggleClaim');
    Route::get('/wish/delete/{wish}', 'AjaxController@deleteWish');

});
