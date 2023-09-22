<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\User;

class userRegistrationController extends Controller
{
    public function userRegView(){
        return view('userRegistration');
        // return User::all();
    }

    // public function addUser(Request $request) {
    //     $user = new User();
    //     $user->Name = $request->Name;
    //     $user->Email = $request->Email;
    //     $user->Username = $request->Username;
    //     $user->Password = $request->Password;
    //     $user->save();
    
    //     return redirect('userRegistration');
    // }
    
}
