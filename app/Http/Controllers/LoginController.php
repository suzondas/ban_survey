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
                if (in_array(Auth::user()->institute_type, [1, 3, 4])) {
                    //    if (Auth::user()->institute_type == 1) {
                    return redirect('common/firstPage');
                }
                if (Auth::user()->institute_type == 2) {
                    //    if (Auth::user()->institute_type == 1) {
                    return redirect('common/madFirstPage');
                }
                if (Auth::user()->institute_type == 5) {
                    return redirect('technical/tecFirstPage');
                }
                if (Auth::user()->institute_type == 9) {
                    return redirect('english/engComFirstPage');
                }
                if (Auth::user()->institute_type == 12) {
                    return redirect('privateUni/privateComFirstPage');
                }
                if (Auth::user()->institute_type == 8) {
                    return redirect('publicUni/publicComFirstPage');
                }

            } elseif (Auth::user()->user_type == 'USEO') {
                return redirect('admin/USEO');
            } else {
                return redirect('/')->withErrors(['Wrong Type of Login! Contact System Administrator!']);
            }
        } else {
            return redirect('/')->withErrors(['Email or Password did not match!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
