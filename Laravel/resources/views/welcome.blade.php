@extends('master')

@section('content')
    @if (count($post))
        <?php $i = 0 ?>
        <ul style="list-style-type:none;padding:0px;">
        @foreach ($post as $p)
            @if ($i < 10)
                <li>
                    <a href="<?php echo "/laravel/public/post/".$i ?>"><h2>{{$p->title}}</h2></a>
                    <p>Submitted by a15admsa on {{$p->created_at}}</p>
                    <p>{{$p->body}}</p>
                    <a href="<?php echo "/laravel/public/post/".$i ?>" style="padding-left: 15px;">Read more</a>
                </li>
                <?php $i++ ?>
            @endif
        @endforeach
        </ul>
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
    @endif
@stop

@section('login')

@stop