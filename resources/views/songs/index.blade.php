@extends('master')

@section('content')
    <h1>
        Justin Bieber official fan club
    </h1>

    @foreach($songs as $index => $song)
        <li><a href='/songs/{{ $index }}'> {{ $song }} </a></li>
    @endforeach
@stop