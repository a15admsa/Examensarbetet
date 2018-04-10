@extends('master')

@section('content')
    @if (count($post))
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
    @endif
@stop

@section('login')

@stop