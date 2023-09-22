<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class adminDataController extends Controller
{
    public function adminDataView(){
        // return view('userData');
        $data = Admin::all();
        return view('adminData',['admins'=>$data]);
    }

    public function delete($id){
        DB::table('admins')->where('id', $id)->delete();
        return redirect('adminData');
    }
}
