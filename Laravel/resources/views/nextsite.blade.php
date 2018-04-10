@extends('master')

@section('content')
    <?php
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $pageNumber = basename($actual_link);
        $postParsingValue = (($pageNumber*10)-10);
    ?>
    <ul style="list-style-type:none;padding:0px;">
    @for ($i = $postParsingValue; $i < $postParsingValue+10; $i++)
        <li>
            <a href="<?php echo "/laravel/public/post/".$i ?>"><h2>{{$post[$i]->title}}</h2></a>
            <p>Submitted by a15admsa on {{$post[$i]->created_at}}</p>
            <p>{{$post[$i]->body}}</p>
            <a href="<?php echo "/laravel/public/post/".$i ?>" style="padding-left: 15px;">Read more</a>
        </li>
    @endfor
    <h1>Klar</h1>
    <?php
        $amount = count($post);
        $pages = intval($amount/10);
    ?>
    @if ($pages > 0)
        <nav>
            @for ($j = 1; $j < $pages+2; $j++)
                @if ($j == 1)
                    <a href="{{ url('/') }}">{{$j}}</a>
                @else
                    <a href="<?php echo "/laravel/public/".$j ?>">{{$j}}</a>
                @endif
            @endfor
        </nav>
    @endif
@stop