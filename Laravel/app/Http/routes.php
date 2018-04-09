<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/add', function (){
    DB::insert('insert into posts(title, body) values (?,?)', ['2 with Laravel', 'PHP IS THE BEST THING EVER AND LARAVEL MAKES IT AWESOME']);
});



Route::get('/read/{id}', function ($id){
   $results = DB::select('select * from posts where id = ?', [$id]);
   if (!empty($results)){
       foreach ($results as $post){
           return $post->title;
       }
   } else return "No results found";
});



Route::get('/post', 'PostController@index');



Route::get('/search', function () {
    return view('search');
});



Route::group(['middleware' => ['web']],  function(){

});
?>
