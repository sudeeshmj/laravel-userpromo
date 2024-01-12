<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('userdashboard');
    }
    public function userProfile(){
        $user = Auth::user();
        return view('userprofile',compact('user'));
    }

    public function modifyProfile(Request $request){
        try {
    
         
            $input = [
                'user_id'=>request('user_id'),
                'name'=>request('name'),
                'email'=>request('email'), 
            ];
                  
          
            $user_profile = User::find(request('user_id'));
        
            $user_profile ->update($input);
            return response()->json(['success' => true, 'message' => 'User Details Updated successfully']); 
        }
        catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Update Operation failed', 'error' => $e->getMessage()]);
        }  
    }


}
