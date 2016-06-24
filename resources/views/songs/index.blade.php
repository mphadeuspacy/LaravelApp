@extends('master')

@section('content')
    <h1>
        Justin Bieber official fan club
    </h1>

    @foreach($songs as $song)
        <li><a href='/songs/{{ $song->slug }}'> {{ $song->title }} </a></li>
    @endforeach
@stop