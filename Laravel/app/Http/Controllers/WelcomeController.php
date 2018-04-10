<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{
    public function index()
    {
        $results = DB::select("select * from posts");
        return view('welcome')->with('post',$results);
    }

    public function nextSite($pagenr)
    {
        $results = DB::select("select * from posts");
        if ($pagenr > 1){
            return view('nextsite')->with('post',$results);
        } else return view('welcome')->with('post',$results);
    }
}