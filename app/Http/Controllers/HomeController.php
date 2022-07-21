<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $comics = \App\Comic::all();
        return view('home', compact('comics'));
    }
    public function list(){
        return view('list');
    }
    public function about(){
        return view('about');
    }
}
