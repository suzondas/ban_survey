<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Districts;
class BANBEISController extends Controller
{
    public function index(){
        $districts = Districts::where('division_id', '!=', 99)->get();
        return view('admin_panel/adminPanelBANBEIS')->with('districts',$districts);
    }
}
