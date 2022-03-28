<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Excel;

class HomeController extends Controller
{
    //
    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype=='1'){

            return view('admin.home');
        }
        else{
            return view('user.home');
        }

    }

    // Home Page For Users
    public function index(){

        return view('user.home');
    }

    public function upload(){
        return view('admin.upload');
    }

    // Import and Upload
    public function importUsers(){
        return view('admin.import');
    }

    public function uploadUsers(Request $request){

        Excel::import(new UsersImport, $request->file);
        return redirect()->route('users.index')->with('success', 'User Imported Successfully');
    }
}
