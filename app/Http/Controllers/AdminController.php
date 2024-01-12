<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $usercnt = User::where('role', 0)->count();
        return view('admin.dashboard',compact('usercnt'));
    }
    public function userList(){
        $users=User::where('role',0)->get();
        return view('admin.userlist',compact('users'));
    }
}
