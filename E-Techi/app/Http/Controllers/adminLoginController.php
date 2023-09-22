<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class adminLoginController extends Controller
{
    public function adminLoginView(){
        // return view('adminLogin');
        return Admin::all();
    }
}
