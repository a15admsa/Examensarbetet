<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller{
    public function index($id)
    {
        $results = DB::select("select * from posts");
        $result = [$results[$id]->created_at,$results[$id]->body];
        return view('post')->with('post',$result);
    }
}
