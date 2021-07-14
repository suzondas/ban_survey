<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BANBEISController extends Controller
{
    public function index(){
        return view('admin_panel/adminPanelBANBEIS');
    }
}
