@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="madStdThirdPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১</span>
                </div>
                <div class="form-control bg-number-label">বিভিন্ন ক্যাটাগরিভিত্তিক শিক্ষার্থীর তথ্য
                    ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped ">

                    <tr>
                        <td rowspan="2" class="text-center">ক্র. নং</td>
                        <td rowspan="2" class="text-center">ক্যাটাগরি (শিক্ষার্থী)</td>
                        <td colspan="2" class="text-center"> ৯ম শ্রেণি</td>
                        <td colspan="2" class="text-center">১০ম শ্রেণি</td>
                        <td colspan="2" class="text-center">১১শ শ্রেণি</td>
                        <td colspan="2" class="text-center">১২শ শ্রেণি</td>
                        <td colspan="2" class="text-center">১৩শ শ্রেণি</td>
                        <td colspan="2" class="text-center">১৪শ শ্রেণি</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catStdName(item.category_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.২</span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন ইঞ্জি/ডিপ্লোমা সমমান - এর বিভিন্ন ক্যাটাগরিভিত্তিক শিক্ষার্থীর সংখ্যা
                    ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped ">

                    <tr>
                        <td rowspan="2" class="text-center">ক্র. নং</td>
                        <td rowspan="2" class="text-center">ক্যাটাগরি (শিক্ষার্থী)</td>
                        <td colspan="2" class="text-center"> ১ম পর্ব</td>
                        <td colspan="2" class="text-center"> ২য় পর্ব</td>
                        <td colspan="2" class="text-center"> ৩য় পর্ব</td>
                        <td colspan="2" class="text-center"> ৪র্থ পর্ব</td>
                        <td colspan="2" class="text-center"> ৫ম পর্ব</td>
                        <td colspan="2" class="text-center"> ৬ষ্ঠ পর্ব</td>
                        <td colspan="2" class="text-center"> ৭ম পর্ব</td>
                        <td colspan="2" class="text-center"> ৮ম পর্ব</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catStdName(item.category_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১৩</span>
                </div>
                <div class="form-control bg-number-label"> বিশেষ চাহিদাসম্পন্ন শিক্ষক ও শিক্ষার্থীর
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <td class="font-weight-bold">২.১৩.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?
                        <select ng-model="data.instituteSpecialStudents.special_std_yn">
                            <option>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select></td>
                    <td class="font-weight-bold">২.১৩.২ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?<br>
                        <input type="checkbox" ng-checked="data.instituteSpecialStudents.disable_facility_audio==1"
                               ng-model="data.instituteSpecialStudents.disable_facility_audio" ng-value="data.instituteSpecialStudents.disable_facility_audio" ng-true-value="'1'" ng-false-value="'0'" >&nbsp; অডিও-১
                        &nbsp;
                        <input type="checkbox"  ng-checked="data.instituteSpecialStudents.disable_facility_braille==1"
                               ng-model="data.instituteSpecialStudents.disable_facility_braille" ng-true-value="'1'" ng-false-value="'0'" >&nbsp;
                        ব্রেইল-২ &nbsp;
                        <input type="checkbox" ng-checked="data.instituteSpecialStudents.disable_facility_signlan==1"
                               ng-model="data.instituteSpecialStudents.disable_facility_signlan" ng-true-value="'1'" ng-false-value="'0'" > &nbsp;সাইন
                        ভাষা-৩ &nbsp;
                        <input type="checkbox" ng-checked="data.instituteSpecialStudents.disable_facility_others==1"
                               ng-model="data.instituteSpecialStudents.disable_facility_others" ng-true-value="'1'" ng-false-value="'0'"> &nbsp;অন্যান্য-৪
                    </td>
                    <td class="font-weight-bold">২.১৩.৩ বিল্ডিং এ Ramp এর ব্যবস্থা আছে কি?
                        <select ng-model="data.instituteSpecialStudents.ramp_access_yn">
                            <option>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select></td>
                </tr>
            </table>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৫</span>
                </div>
                <div class="form-control bg-number-label">বিশেষ চাহিদাসম্পন্ন শিক্ষক ও শিক্ষার্থীর
                    সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">৯ম শ্রেণি</td>
                        <td colspan="2">১০ম শ্রেণি</td>
                        <td colspan="2">১১শ শ্রেণি</td>
                        <td colspan="2">১২শ শ্রেণি</td>
                        <td colspan="2">১৩শ শ্রেণি</td>
                        <td colspan="2">১৪শ শ্রেণি</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseDisableStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catDisStdName(item.disable_type)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৫</span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন ইঞ্জি/ডিপ্লোমা সমমান -এর প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষক ও শিক্ষার্থীর
                    সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">১ম পর্ব</td>
                        <td colspan="2">২য় পর্ব</td>
                        <td colspan="2">৩য় পর্ব</td>
                        <td colspan="2">৪র্থ পর্ব</td>
                        <td colspan="2">৫ম পর্ব</td>
                        <td colspan="2">৬ষ্ঠ পর্ব</td>
                        <td colspan="2">৭ম পর্ব</td>
                        <td colspan="2">৮ম পর্ব</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseDisableStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catDisStdName(item.disable_type)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৬</span>
                </div>
                <div class="form-control bg-number-label">ক্ষুদ্র নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও
                    শিক্ষার্থীর সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        <td>ক্র. নং</td>
                        <td>ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">৯ম শ্রেণি</td>
                        <td colspan="2">১০ম শ্রেণি</td>
                        <td colspan="2">১১শ শ্রেণি</td>
                        <td colspan="2">১২শ শ্রেণি</td>
                        <td colspan="2">১৩শ শ্রেণি</td>
                        <td colspan="2">১৪শ শ্রেণি</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseUpajati">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="findUpajaitName(item.upajati_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৭</span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন ইঞ্জি/ডিপ্লোমা সমমান- এর প্রতিষ্ঠানে ক্ষুদ্র নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও
                    শিক্ষার্থীর সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        <td>ক্র. নং</td>
                        <td>ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">১ম পর্ব </td>
                        <td colspan="2">২য় পর্ব </td>
                        <td colspan="2">৩য় পর্ব </td>
                        <td colspan="2">৪র্থ পর্ব </td>
                        <td colspan="2">৫ম পর্ব </td>
                        <td colspan="2">৬ষ্ঠ  পর্ব </td>
                        <td colspan="2">৭ম পর্ব </td>
                        <td colspan="2">৮ম পর্ব </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseUpajati">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="findUpajaitName(item.upajati_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_girls"/> </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    {{--
        <script src="{{ asset('js/madStdThirdPage.js') }}" type="module" defer></script>
    --}}
@stop
