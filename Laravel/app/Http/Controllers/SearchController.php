<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        $results = DB::select("select * from posts where title LIKE '%".$_POST['searchBox']."%' OR body LIKE '%".$_POST['searchBox']."%'");
        return view('search')->with('post',$results);
    }

    public function nextSite($searchword, $pagenr)
    {
        $results = DB::select("select * from posts where title LIKE '%".$searchword."%' OR body LIKE '%".$searchword."%'");
        $valueToSend = [$results,$pagenr,$searchword];
        if ($pagenr > 1){
            return view('nextsitesearch')->with('post',$valueToSend);
        } else return view('search')->with('post',$results);
    }
}