<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class userDataController extends Controller
{
    public function userDataView(){
        // return view('userData');
        $data = User::all();
        return view('userData',['users'=>$data]);
    }

    public function delete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('userData');
    }
}
