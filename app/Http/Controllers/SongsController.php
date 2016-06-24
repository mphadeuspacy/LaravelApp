<?php

namespace App\Http\Controllers;

use App\Song;

class SongsController extends Controller
{
    public function index()
    {
        $songs = Song::get();

        return view('songs.index', compact('songs'));
    }

    public function show($id)
    {
        $song = Song::find($id);

        return view('songs.show', compact('song'));
    }
}
