<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(){
        $results = DB::select("select * from posts where title LIKE '%".$_POST['searchBox']."%' OR body LIKE '%".$_POST['searchBox']."%'");
        return var_dump($results);
    }
}