<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function lista() {
        $movie = \App\Movie::all();
        dd($movie);
    }
}
