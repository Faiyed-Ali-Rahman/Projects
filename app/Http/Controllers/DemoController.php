<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index($name=null){
        $data=compact('name');
        return view('about')->with($data);
    }
    public function home($name=null){
        $data=compact('name');
        return view('home')->with($data);
    }
}
