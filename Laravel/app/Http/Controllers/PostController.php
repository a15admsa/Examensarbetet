<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller{
    public function index($id){
        $results = DB::select("select * from posts");
        $result = [$results[$id]->created_at,$results[$id]->body];
        return view('post')->with('post',$result);
    }
}
?>
