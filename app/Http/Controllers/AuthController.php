<?php

namespace App\Http\Controllers;

use App\Models\ReferralPoint;
use App\Models\ReferralUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    
    public function doLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 1){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('user.dashboard');
            }
           
        }
        return redirect()->route('login')->with('message','Email or Password is Invalid');
    }
    
    public function register(){
        return view('register');
    }
    public function doRegister(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);

        $refernce_code = $request->input('refcode');
        if (!empty($refernce_code)) {
            $referal_user = User::where('referral_code', $refernce_code)->first();
            if( !$referal_user){
                return redirect()->back()->withInput()->with('error', 'Invalid Referral Code.');
            }
        }

        $user= new User();
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->referral_code = "PM".date('YmsHis'); //own reffereal code
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Auth::login($user);

        //save refereal details
    
        $ref_user= new ReferralUser();
        $ref_user->referral_code = $refernce_code;
        $ref_user->user_id = $user->id;
        $user->save();
        
        //level and point update
            $level =  $referal_user->level+1;
            $point_row = ReferralPoint::find($level);
            $score=0;
            if($point_row){
                $score = $point_row->points;
            }
        $referal_user->level = $level;
        $referal_user->points += $score;
        $referal_user->update();


        return redirect()->route('user.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
