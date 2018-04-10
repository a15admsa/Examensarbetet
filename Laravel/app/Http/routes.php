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
use App\Post;

Route::get('/', 'WelcomeController@index');

Route::get('/{pagenr}', 'WelcomeController@nextSite');

Route::get('/post/{id}', 'PostController@index');

Route::get('/add', function (){
    $post = new Post;
    $post->title = 'New Admir';
    $post->body = 'New Body';
    $post->save();
});



Route::get('/read/{id}', function ($id){
   $results = DB::select("select * from posts where title LIKE '%".$id."%' OR body LIKE '%".$id."%' ORDER BY title");
   if (!empty($results)){
       foreach ($results as $post){
           print_r($post->title."<br>");
           print_r($post->body."<br>");
       }
   } else return "No results found";
});



Route::get('/search', function () {
    return view('search');
});



Route::group(['middleware' => ['web']],  function(){

});


Route::get('/find', function (){
   $posts = Post::all();
   foreach ($posts as $post){
       return $post->title;
   }
});


Route::get('/create', function (){
    Post::create(['title'=>'the Create  Method','body'=>'I am learning fast!']);
});
?>
