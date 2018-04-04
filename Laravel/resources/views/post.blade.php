@extends('master')

@section('content')
  <h1>All the names: </h1>

  @if (count($people))
    @foreach($people as $person)
      <ul>{{$person}}</ul>
    @endforeach
  @endif
@stop
