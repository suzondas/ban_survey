<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminViewInstController extends Controller
{
    public function index(Request $request)
    {
        $instType = $request->get('instTypeId');
        $instId = $request->get('instId');
        $user = Auth::user();
        $user->institute_type = $instType;
        $user->institute_id = $instId;
        $user->save();
//        Auth::user()->institute_type = $instType;
//        Auth::user()->institute_id = $instId;
        if ($instType == 1) {
            //    if (Auth::user()->institute_type == 1) {
            return redirect ('common/firstPage');
        }
        if ($instType == 3) {
            //    if (Auth::user()->institute_type == 1) {
            return redirect ('common/firstPage');
        }
        if ($instType == 4) {
            //    if (Auth::user()->institute_type == 1) {
            return redirect ('common/firstPage');
        }
        if ($instType == 2) {
            //    if (Auth::user()->institute_type == 1) {
            return redirect ('common/madFirstPage');
        }
        if ($instType == 5) {
            return redirect ('technical/tecFirstPage');
        }
        if ($instType == 9) {
            return redirect ('english/engComFirstPage');
        }
        if ($instType == 12) {
            return redirect ('privateUni/privateComFirstPage');
        }
        if ($instType == 8) {
            return redirect ('publicUni/publicComFirstPage');
        }

    }
}
