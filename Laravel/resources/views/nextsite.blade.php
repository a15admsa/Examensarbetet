@extends('master')

@section('content')
    @if (count($post))
        <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $pageNumber = basename($actual_link);
            $postParsingValue = (($pageNumber*10)-10);
        ?>
        <ul style="list-style-type:none;padding:0px;">
        @for ($i = $postParsingValue; $i < $postParsingValue+10; $i++)
            <li>
                <a href="<?php echo "/laravel/public/post/".$i ?>"><h3 style="width: 500px;">{{$post[$i]->title}}</h3></a>
                <p>Submitted by a15admsa on {{$post[$i]->created_at}}</p>
                <p style="width: 500px;">{{substr($post[$i]->body,0,250)}}</p>
                <a href="<?php echo "/laravel/public/post/".$i ?>" style="padding-left: 15px;">Read more</a>
            </li>
        @endfor
        </ul>
    @endif
@stop

@section('navbar')
    <?php
    $amount = count($post);
    $pages = intval($amount/10);
    ?>
    @if ($pages > 0)
        <div id="navlist">
            <nav>
                @for ($j = 1; $j < $pages+1; $j++)
                    @if ($j == 1)
                        <a href="{{ url('/') }}">{{$j}}</a>
                    @else
                        <a href="<?php echo "/laravel/public/page/".$j ?>">{{$j}}</a>
                    @endif
                @endfor
            </nav>
        </div>
    @endif
@stop