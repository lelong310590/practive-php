<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function getlogin()
    // {
    //     $cc = 'Phuong Truong';
    //     // dd(Hash::make('234567'));
    //     return view('login', compact('cc'));
    // } 
    
    /**Dashboard */
    public function getDashboard()
    {
        return view ('dashboard');
    }
    /**End Dashboard */   

    /**Login */
    public function postLogin (Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        // $user = DB::table('users')->where('email','=',$email)->where('password','=',$password)->get();
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            //  redirect ('dashboard.get');
            return redirect()->route('dashboard.get');
        } 
        else 
        {
            dd('loged in fail');
        }
    }
    /**End Login */

    /**Logout */
    public function getLogout (Request $request)
    {
        Auth::logout();
        return view('logout');
    }
    /**End logout */
}



