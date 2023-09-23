<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // adminLoginView
    public function adminLoginView(){
        return view('admin.auth.login');
    }

    // adminLoginCheck
    public function adminLoginCheck(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $check = $request->all();
        if(Auth::attempt(['email' => $check['email'],
        'password' => $check['password'],
        'is_admin' => 1,]))
        {
            return redirect()->route('admin.dashboard.index')->with('success', 'You are successfully login.');
        }
        else{
            return redirect()->back()->with('fail', 'Invalid Eamil or Password.');
        }
    }

}
