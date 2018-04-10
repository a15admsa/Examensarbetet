<?php

Route::get('/', 'WelcomeController@index');

Route::get('/page/{pagenr}', 'WelcomeController@nextSite');

Route::get('/post/{id}', 'PostController@index');

Route::post('/search', 'SearchController@index');

Route::group(['middleware' => ['web']],  function(){});