<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Homecontroller extends Controller
{

    public function index(){
        return view('home.user');
    }

    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.Home');
        }
        else{
            return view('home.user');
        }
    }
}
