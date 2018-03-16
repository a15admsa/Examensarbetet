<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
  </head>
  <body>
    <a href="/newspage/public">
      <img src="{{asset('logo.png')}}" alt="logo" id="logo">
    </a>
    <div class="form">
      <input type="text" id="searchBox" name="searchBox" size="40" maxlength="128">
      <input type="submit" name="search" value="Search">
    </div>
    <h1>@yield('content')</h1>

  </body>
</html>
