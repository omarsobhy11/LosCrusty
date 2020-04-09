<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='welcome to Krusty Krab';
       return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title ='welcome to Laravel';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        return view('pages.services');
    }

}
