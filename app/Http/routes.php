<?php

Route::get('/', 'Dashboard@index');

Route::get('shows/', 'Shows@index');
Route::get('add-show/', 'Shows@addShow');

Route::resource('promoters', 'Promoters');


Route::auth();
Route::get('/home', 'HomeController@index');
