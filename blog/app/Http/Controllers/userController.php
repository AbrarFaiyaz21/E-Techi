<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userView(){
        return view('user',['name'=>'Funky']);
    }

    // public function userView(){
    //     return view('user');
    // }

    // public function index($user){
    //     return ['name'=>'Abrar','age'=>20];
    // }

    // public function index(){
    //     echo "Hello from controller";
    // }
}
