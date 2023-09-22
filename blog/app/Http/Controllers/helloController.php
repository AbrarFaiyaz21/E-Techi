<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function helloView(){
        $names = ['sakib', 'halim', 'gazi', 'sabit'];
        return view('hello',['users'=>$names]);
    }
}
