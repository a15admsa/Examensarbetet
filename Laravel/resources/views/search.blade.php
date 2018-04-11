@extends('master')

@section('content')
    @if (count($post))
        <h1>You got <b id="hits">{{count($post)}}</b> hits for the search of <b id="searchWordUsed"><?php echo $_POST['searchBox']?></b></h1>
        <?php $i = 0 ?>
        <ul style="list-style-type:none;padding:0px;">
            @foreach ($post as $p)
                @if ($i < 10)
                    <li>
                        <a href="<?php echo "/laravel/public/post/".$i ?>"><h3 style="width: 500px;">{{$p->title}}</h3></a>
                        <p>Submitted by a15admsa on {{$p->created_at}}</p>
                        <p style="width: 500px;">{{substr($p->body,0,250)}}</p>
                        <a href="<?php echo "/laravel/public/post/".$i ?>" style="padding-left: 15px;">Read more</a>
                    </li>
                    <?php $i++ ?>
                @endif
            @endforeach
        </ul>
    @else
        <h1>You got <b id="hits">0</b> hits for the search of <b id="searchWordUsed"><?php echo $_POST['searchBox']?></b></h1>
    @endif
@stop

@section('navbar')
    <?php
    $amount = count($post);
    $pages = intval(($amount-1)/10);
    ?>
    @if ($pages > 0)
        <div id="navlist">
            <nav>
                {{ csrf_field() }}
                @for ($j = 0; $j < $pages+1; $j++)
                    @if ($j == 0)
                        <a href="{{ url('/search') }}">{{$j+1}}</a>
                    @else
                        <a href="<?php echo "/laravel/public/search/".$_POST['searchBox']."/".($j+1) ?>">{{$j+1}}</a>
                    @endif
                @endfor
            </nav>
        </div>
    @endif
@stop