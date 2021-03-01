<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'eiin' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('eiin', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->user_type == 'Institute') {
//                if (in_array(Auth::user()->institute_type, [1,3,4])) {
                if (Auth::user()->institute_type == 1) {
                    return redirect('schoolAndCollege/firstPage');
                }
            } else {
                return redirect('/')->withErrors(['Email or Password did not match!'])
                    ;
            }

        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
