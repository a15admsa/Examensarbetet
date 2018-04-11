<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
  </head>
  <body>
    <a href="/laravel/public">
      <img src="{{asset('logo.png')}}" alt="logo" id="logo">
    </a>
    <form class="form" method="post" action="/laravel/public/search">
      {{ csrf_field() }}
      <input type="text" id="searchBox" name="searchBox" size="40">
      <input type="submit" name="search" value="Search">
    </form>
    <div style="display: flex;">
      <div>@yield('content')</div>
      <div style="margin-left: 60vw; z-index: 10;">@yield('login')</div>
    </div>
    <div>@yield('navbar')</div>
  </body>
</html>