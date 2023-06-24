<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function register()
    {
        return view ('register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }
    public function login()
    {
        return view ('login');
    }
    public function loginPost(Request $request)
    {
        $creditials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($creditials)){
            return redirect('/layout.home')->with('success','Login Berhasil');
        }
           
        return back ()->with('error', 'Error email or password');
        
    }
}
