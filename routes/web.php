<?php


Route::get('/', 'UserController@index');

Route::get('/add', 'UserController@getAdd');
Route::post('/add', 'UserController@postAdd');

Route::get('/edit/{id}', 'UserController@getEdit');
Route::post('/edit/{id}', 'UserController@postEdit');
