@extends('master')

@section('content')
    @if (count($post[0]))
        <h1>You got <b id="hits">{{count($post[0])}}</b> hits for the search of <b id="searchWordUsed"><?php echo $post[2]?></b></h1>
        <?php
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $pageNumber = basename($actual_link);
        $postParsingValue = (($pageNumber*10)-10);
        ?>
        <ul style="list-style-type:none;padding:0px;">
            @for ($i = $postParsingValue; $i < count($post[0]); $i++)
                <li>
                    <a href="<?php echo "/laravel/public/post/".$i ?>"><h3 style="width: 500px;">{{$post[0][$i]->title}}</h3></a>
                    <p>Submitted by a15admsa on {{$post[0][$i]->created_at}}</p>
                    <p style="width: 500px;">{{substr($post[0][$i]->body,0,250)}}</p>
                    <a href="<?php echo "/laravel/public/post/".$i ?>" style="padding-left: 15px;">Read more</a>
                </li>
            @endfor
        </ul>
    @endif
@stop

@section('navbar')
    <?php
    $amount = count($post[0]);
    $pages = intval(($amount-1)/10);
    ?>
    <div id="navlist">
        <nav>
            {{ csrf_field() }}
            @for ($j = 0; $j < $pages+1; $j++)
                @if ($j == 1)
                    <a href="{{ url('/search') }}">{{$j+1}}</a>
                @else
                    <a href="<?php echo "/laravel/public/search/".($j+1) ?>">{{$j+1}}</a>
                @endif
            @endfor
        </nav>
    </div>
@stop