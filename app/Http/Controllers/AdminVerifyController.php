<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institutes;

class AdminVerifyController extends Controller
{
    public function index(Request $request)
    {
        $instId = $request->get('instId');
        $inst = Institutes::where('institute_id', $instId);
        if (Auth::user()->user_type == 'USEO') {
            $inst->update(['verified_useo' => 'yes']);
            return redirect('admin/USEO');
        } elseif (Auth::user()->user_type == 'DEO') {
            $inst->update(['verified_deo' => 'yes']);
            return redirect('admin/DEO');
        } elseif (Auth::user()->user_type == 'BANBEIS') {
            $inst->update(['verified_status' => 'yes']);
            return redirect('admin/BANBEIS');
        }
    }
}
