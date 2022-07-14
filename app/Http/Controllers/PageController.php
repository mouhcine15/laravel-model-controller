<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movie = \App\Movie::all();
        return view('home', compact('movie'));
    }

    // public function lista() {
    //     $movie = \App\Movie::all();
    //     return view('lista', compact('movie'));
    //     // dd($movie);
    // }
}
