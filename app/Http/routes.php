<?php

Route::get('/', 'Dashboard@index');

Route::get('shows/', 'Shows@index');
Route::get('add-show/', 'Shows@addShow');

// Route::get('promoters/', 'Promoters@index');
// Route::get('add-promoter/', 'Promoters@addPromoter');

Route::resource('promoters', 'Promoters');


Route::auth();
Route::get('/home', 'HomeController@index');
