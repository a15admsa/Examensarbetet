@extends('master')

@section('content')
    <h1>Add Post</h1>
    <form method="post" action="/laravel/public/addpost">
        {{ csrf_field() }}
        <input type="text" maxlength="255" id="TitleForPost" name="titlePost" placeholder="Title"><br><br>
        <input type="text" id="BodyForPost" style="height: 150px;" name="bodyPost" placeholder="Body"><br><br>
        <input type="submit" value="Submit" id="submitPost">
    </form>
@stop