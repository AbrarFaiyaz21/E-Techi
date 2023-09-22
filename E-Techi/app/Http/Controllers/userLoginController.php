<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userLoginController extends Controller
{
    public function userLoginView(){
        return view('userLogin');
    }
}
