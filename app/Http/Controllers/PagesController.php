<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        $lessons = ['first lesson', 'second lesson', 'third lesson'];

        $name = "Mpha Kheswa";

        return view('pages.index', ['name' => $name], ['lessons' => $lessons] );
    }
}
