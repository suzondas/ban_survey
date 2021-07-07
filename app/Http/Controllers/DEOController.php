<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GetDistrict;
use App\Helpers\GetThanas;
use Illuminate\Support\Facades\Auth;
use App\Models\Institutes;
class DEOController extends Controller
{
    public function index()
    {
        $district_id = str_replace(" ","",Auth::user()->user_location);
        $institutes = Institutes::where('district_id', $district_id)->get();
        $countData = new \stdClass();
        $countData->total = $institutes->count();
        $countData->submitted = $institutes->where('submitted',1)->count();
        $countData->verified_useo = $institutes->where('verified_useo','yes')->count();
        return view('admin_panel/adminPanelDEO')->with(['districtDtl'=>GetDistrict::GetDistrictDtl($district_id), 'institutes'=> $institutes, 'countData'=> $countData]);
    }
}
