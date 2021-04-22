@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="sncThirdPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২</span>
                </div>
                <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে বিভিন্ন ক্যাটাগরিভিত্তিক
                    শিক্ষার্থীর তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">ক্যাটাগরি (শিক্ষার্থী)</td>
                        <td colspan="2">১১শ শ্রেণি</td>
                        <td colspan="2">১২শ শ্রেণি</td>
                        <td colspan="2">ডিগ্রি ১ম বর্ষ</td>
                        <td colspan="2">ডিগ্রি ২য় বর্ষ</td>
                        <td colspan="2">ডিগ্রি ৩য় বর্ষ</td>
                        <td colspan="2">স্নাতক (সম্মান)</td>
                        <td colspan="2">স্নাতকোত্তর</td>
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

                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catStdName(item.category_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree1st_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree1st_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree2nd_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree2nd_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree3rd_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree3rd_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honors_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honors_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৪</span>
                </div>
                <div class="form-control bg-number-label">মাধ্যমিক স্তরে বিশেষ চাহিদাসম্পন্ন শিক্ষক ও শিক্ষার্থীর
                    সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>২.২.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?
                            <select ng-model="data.instituteSpecialStudents.special_std_yn">
                                <option>Select</option>
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select></td>
                        <td>২.২.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?<br>
                            <input type="checkbox"
                                   ng-model="data.instituteSpecialStudents.disable_facility_audio">&nbsp; অডিও-১
                            &nbsp;
                            <input type="checkbox"
                                   ng-model="data.instituteSpecialStudents.disable_facility_braille">&nbsp;
                            ব্রেইল-২ &nbsp;
                            <input type="checkbox"
                                   ng-model="data.instituteSpecialStudents.disable_facility_signlan"> &nbsp;সাইন
                            ভাষা-৩ &nbsp;
                            <input type="checkbox"
                                   ng-model="data.instituteSpecialStudents.disable_facility_others"> &nbsp;অন্যান্য-৪
                        </td>
                        <td>২.২.৩ বিল্ডিং এ Ramp এর ব্যবস্থা আছে কি?
                            <select ng-model="data.instituteSpecialStudents.ramp_access_yn">
                                <option>Select</option>
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select></td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                        <td colspan="2">৭ম শ্রেণি</td>
                        <td colspan="2">৮ম শ্রেণি</td>
                        <td colspan="2">৯ম শ্রেণি</td>
                        <td colspan="2">১০ম শ্রেণি</td>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৫</span>
                </div>
                <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে বিশেষ চাহিদাসম্পন্ন
                    শিক্ষার্থীর সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                        <td colspan="2">একাদশ শ্রেণি</td>
                        <td colspan="2">দ্বাদশ শ্রেণি</td>
                        <td colspan="2">ডিগ্রি ১ম বর্ষ</td>
                        <td colspan="2">ডিগ্রি ২য় বর্ষ</td>
                        <td colspan="2">ডিগ্রি ৩য় বর্ষ</td>
                        <td colspan="2">স্নাতক (সম্মান)</td>
                        <td colspan="2">স্নাতকোত্তর</td>
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
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseDisableStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catDisStdName(item.disable_type)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree1st_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree1st_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree2nd_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree2nd_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree3rd_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree3rd_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honors_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honors_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_girls"/> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৬</span>
                </div>
                <div class="form-control bg-number-label">মাধ্যমিক স্তরে ক্ষুদ্র নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও
                    শিক্ষার্থীর সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        <td>ক্র. নং</td>
                        <td>ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                        <td colspan="2">৭ম শ্রেণি</td>
                        <td colspan="2">৮ম শ্রেণি</td>
                        <td colspan="2">৯ম শ্রেণি</td>
                        <td colspan="2">১০ম শ্রেণি</td>
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
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৭</span>
                </div>
                <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে ক্ষুদ্র নৃ-গোষ্ঠীর ধরন
                    অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
                        <td colspan="2">একাদশ শ্রেণি</td>
                        <td colspan="2">দ্বাদশ শ্রেণি</td>
                        <td colspan="2">ডিগ্রি ১ম বর্ষ</td>
                        <td colspan="2">ডিগ্রি ২য় বর্ষ</td>
                        <td colspan="2">ডিগ্রি ৩য় বর্ষ</td>
                        <td colspan="2">স্নাতক (সম্মান)</td>
                        <td colspan="2">স্নাতকোত্তর</td>
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
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseUpajati">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="findUpajaitName(item.upajati_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree1st_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree1st_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree2nd_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree2nd_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree3rd_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.degree3rd_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honors_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honors_girls"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_girls"/> </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩</span>
                </div>
                <div class="form-control bg-number-label">মাধ্যমিক স্তরে বয়সভিত্তিক শিক্ষার্থীর সংখ্যা (০১/০১/২০২১
                    তারিখে বয়স)
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <td>শ্রেণি</td>
                        <td colspan="2">১০ বছর</td>
                        <td colspan="2">১১ বছর</td>
                        <td colspan="2">১২ বছর</td>
                        <td colspan="2">১৩ বছর</td>
                        <td colspan="2">১৪ বছর</td>
                        <td colspan="2">১৫ বছর</td>
                        <td colspan="2">১৬ বছর</td>
                        <td colspan="2">১৭ বছর</td>
                        <td colspan="2">মোট</td>
                    </tr>
                    <tr>
                        <th></th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="item in data.ageWiseSecStudentData">
                        <td ng-bind="findColClassName(item.class_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-50"  ng-model="item.ten_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.thirteen_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.thirteen_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.fourteen_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.fourteen_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.fifteen_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.fifteen_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.sixteen_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.sixteen_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seventeen_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seventeen_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBoxBody">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.১</span>
                </div>
                <div class="form-control bg-number-label">উচ্চ মাধ্যমিক- সর্বোচ্চ স্তরে বয়সভিত্তিক শিক্ষার্থীর সংখ্যা
                    (০১/০১/২০২১)
                </div>
            </div>
            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th>শ্রেণি</th>
                    <th colspan="2">১৫ বছরের নীচে</th>
                    <th colspan="2">১৬ বছর</th>
                    <th colspan="2">১৭ বছর</th>
                    <th colspan="2">১৮ বছর</th>
                    <th colspan="2">১৯ বছর</th>
                    <th colspan="2">২০ বছরের উপরে</th>
                    <th colspan="2">২১ বছরের উপরে</th>
                    <th colspan="2">মোট</th>
                </tr>
                <tr>
                    <th></th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                    <th>মোট</th>
                    <th>ছাত্রী</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="item in data.ageWiseStudent">
                    <td ng-bind="findColClassName(item.class_id)"></td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.under_fifteen_total"/> </td>
                    <td><input type="number" number-converter class="w-50"  ng-model="item.under_fifteen_female"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.sixteen_total"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.sixteen_female"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.seventeen_total"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.seventeen_female"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.eighteen_total"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.eighteen_female"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.nineteen_total"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.nineteen_female"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.twenty_total"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.twenty_female"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.upper_twentyone_total"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.upper_twentyone_female"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.total_student"/> </td>
                    <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="contentBox col-8">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.২</span>
                </div>
                <div class="form-control bg-number-label">অভিভাবকের পেশা অনুযায়ী মাধ্যমিক স্তরে শিক্ষার্থী সংখ্যা
                    (৬ষ্ঠ-১০ম):
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">

                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">অভিভাবকের পেশা</td>
                        <td colspan="5">শিক্ষার্থীর সংখ্যা</td>
                    </tr>
                    <tr>

                        <td>৬ষ্ঠ শ্রেণি</td>
                        <td>৭ম শ্রেণি</td>
                        <td>৮ম শ্রেণি</td>
                        <td>৯ম শ্রেণি</td>
                        <td>১০ম শ্রেণি</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.guardianOccupation">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="occupationName(item.occupation_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox col-8">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৩</span>
                </div>
                <div class="form-control bg-number-label">অভিভাবকের পেশা অনুযায়ী উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে
                    শিক্ষার্থীর সংখ্যা:
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">

                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">অভিভাবকের পেশা</td>
                        <td colspan="5">শিক্ষার্থীর সংখ্যা</td>
                    </tr>
                    <tr>

                        <td>উচ্চ মাধ্যমিক</td>
                        <td>স্নাতক (পাস)</td>
                        <td>স্নাতক (সম্মান)</td>
                        <td>স্নাতকোত্তর</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.guardianOccupation">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="occupationName(item.occupation_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.hsc"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_somman"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox col-9">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৪</span>
                </div>
                <div class="form-control bg-number-label">মাধ্যমিক স্তরে শ্রেণি, বিভাগভিত্তিক শিক্ষার্থী, উত্তীর্ণ ও
                    অনুত্তীর্ণ সম্পর্কিত তথ্য, ডিসেম্বর ২০২০ (বার্ষিক পরীক্ষার ফলাফল)
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <td rowspan="2">শ্রেণি</td>
                        <td rowspan="2">বিভাগ</td>
                        <td colspan="2">মোট শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উত্তীর্ণ</td>
                        <td colspan="2">অনুত্তীর্ণ</td>
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
                    </tr>
                    </thead>
                    <tbody ng-repeat="item in data.schClasses">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <td ng-if="item.groups.length==0">-</td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].total_candidate"/></td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].female_candidate"/></td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].total_promoted"/></td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].female_promoted"/></td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].total_failed"/></td>
                    <td ng-if="item.groups.length==0"><input class="w-50" type="number" number-converter ng-init="idy = findExIndex(item.class_id,item.education_level_id)" ng-model="studentSummeryPrevYr[idy].female_failed"/></td>
                    <tr ng-repeat="i in item.groups" ng-if="item.groups.length!=0">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input class="w-50" type="number" number-converter ng-init="idx = findExSumIndex(i.group_id,item.class_id)" ng-model="studentSummeryPrevYr[idx].total_student"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="studentSummeryPrevYr[idx].female_student"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="studentSummeryPrevYr[idx].total_candidate"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="studentSummeryPrevYr[idx].female_candidate"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="studentSummeryPrevYr[idx].total_promoted"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="studentSummeryPrevYr[idx].female_promoted"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="studentSummeryPrevYr[idx].total_failed"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="studentSummeryPrevYr[idx].female_failed"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/sncThirdPage.js') }}" type="module" defer></script>
@stop
<?php
/**
 * Created by PhpStorm.
 * User: liazm
 * Date: 4/22/2021
 * Time: 12:54 PM
 */