@extends('master')

@section('content')
  @if (count($post))
      <p>Submitted by a15admsa on {{printf($post[0])}}</p>
      <p>{{printf($post[1])}}</p>
  @endif
@stop
