@extends('master')

@section('content')
  @if (count($post))
      <p>Submitted by a15admsa on {{printf($post[0])}}</p>
      <p>{{printf($post[1])}}</p> <br>
      <b style="border: 1px solid black">All text is generated from Stack Exchange under the CC 3.0 licence.</b>
  @endif
@stop