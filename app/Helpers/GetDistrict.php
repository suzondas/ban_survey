<?php

namespace App\Helpers;
use App\Models\Districts;
class GetDistrict {
   public static function GetDistrictDtl($districtId){
        $district = Districts::where('DISTRICT_ID',$districtId)->get();
        return $district;
    }
}

?>
