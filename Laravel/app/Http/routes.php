<?php

Route::get('/', 'WelcomeController@index');

Route::get('/page/{pagenr}', 'WelcomeController@nextSite');

Route::get('/post/{id}', 'PostController@index');

Route::post('/search', 'SearchController@index');

Route::get('/search/{searchword}/{pagenr}', 'SearchController@nextSite');

Route::get('/add', 'AddPostController@index');

Route::post('/addpost', 'AddPostController@addtodatabase');

Route::group(['middleware' => ['web']],  function(){});