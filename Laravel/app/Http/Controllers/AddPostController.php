<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AddPostController extends Controller
{
    public function index()
    {
        return view('addpost');
    }

    public function addtodatabase(){
        $title = $_POST['titlePost'];
        $body = $_POST['bodyPost'];
        $date = date("Y-m-d h:i:s");
        DB::insert('insert into posts (title,body,created_at) values (?,?,?)',[$title,$body,$date]);
        return view('addpost');
    }
}