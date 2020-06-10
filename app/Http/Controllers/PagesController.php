<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='welcome to Krusty Krab';
       return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title ='welcome to about';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',  
             'services' => ['Food ordering', 'Food delivery']
         );
         return view('pages.services')->with($data);
    }

    public function create(){
        return view('pages.createOrder');
    }

    public function store(request $req){
        //$todo = new Post();
        //$todo->** = $req->mail;
        //$todo->** = $req->num;
        //$todo->** = $req->addr_1;
        //$todo->** = $req->addr_2;
        //$todo->** = $req->ord;

        $todo->save();

        return redirect('/pizza/public/createOrder');
    }
    public function menu_view(){
        return view('pages.menu');
    }

}
