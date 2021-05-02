@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="madStdFirstPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১</span>
                </div>
                <div class="form-control bg-number-label"> স্তরভিত্তিক শিক্ষার্থী সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <td colspan="2">১ম-৫ম</td>
                        <td colspan="2">৬ষ্ঠ-১০ম</td>
                        <td colspan="2">১১শ-১২শ</td>
                        <td colspan="2">ফাজিল(পাস)</td>
                        <td colspan="2">ফাজিল(সম্মান)</td>
                        <td colspan="2">কামিল</td>
                        <td colspan="2">দাখিল-আলিম ভোক.</td>
                        <td colspan="2">আলিম বি.এম.</td>
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
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.one_five_total" ></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.one_five_girl"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.six_ten_total"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.six_ten_girl"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.eleven_twelve_total"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.eleven_twelve_girl"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.fazil_pass_total"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.fazil_pass_girl"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.fazil_honors_total"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.fazil_honors_girl"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.kamil_total"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.kamil_girl"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.voc_total"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.voc_girl"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.bm_total"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.studentSummaryTotal.bm_girl"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২</span>
                </div>
                <div class="form-control bg-number-label"> শ্রেণি ও বিভাগভিত্তিক শিক্ষার্থীর সংখ্যা ২০২১ (২০২১-২০২২ শিক্ষাবর্ষের সকল শিক্ষার্থী অর্ন্তভুক্ত হবে)
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">শ্রেণি</td>
                        <td rowspan="2">বিভাগ</td>
                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">ইংরেজি ভার্সনে অধ্যয়নরত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2" >ট্রান্সফার ইন</td>
                        <td rowspan="2">ট্রান্সফার আউট</td>
                        <td rowspan="2">২০২২ এর পাঠ্য পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>ছাত্র</td>
                        <td>ছাত্রী</td>
                        <td>ছাত্র</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>

                    </tr>
                    </tdead>
                    <tbody ng-repeat="item in data.classes">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <td ng-if="item.groups.length==0">-</td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_eng"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_eng"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_in"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_out"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].nextyr_book_reg"/></td>
                    <tr ng-repeat="i in item.groups" ng-if="item.groups.length!=0">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input type="number" number-converter class="w-50" ng-init="idx = findIndex(i.group_id,item.class_id)" ng-model="studentSummery[idx].total_student"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_student"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_scholarship"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_scholarship"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].total_eng"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_eng"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].total_present"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_present"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].transfer_in"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].transfer_out"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].nextyr_book_reg"/></td>
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
                <div class="form-control bg-number-label">২০২০ ও তার পূর্বের শিক্ষার্থী ২০২১ সালে প্রাথমিক ও মাধ্যমিক স্তরে একই শ্রেণিতে
                    অধ্যয়নরত আছে এইরুপ শিক্ষার্থীর সংখ্যা (রিপিটার)
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td colspan="2">প্রাথমিক/এবতেদায়ী</td>
                        <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                        <td colspan="2">৭ম শ্রেণি</td>
                        <td colspan="2">৮ম শ্রেণি</td>
                        <td colspan="2">৯ম শ্রেণি</td>
                        <td colspan="2">১০ম শ্রেণি</td>
                        <td colspan="2">দাখিল/এসএসসি ভোক</td>

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
                    <tbody>
                    <tr>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.ebtedayee_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.ebtedayee_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.six_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.six_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.seven_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.seven_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.eight_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.eight_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.nine_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.nine_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.ten_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.ten_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.ssc_voc_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.ssc_voc_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪</span>
                </div>
                <div class="form-control bg-number-label">২০২০ সালের প্রাথমিক ও মাধ্যমিক স্তরে ঝরেপড়া (ড্রপআউট) শিক্ষার্থীর সংখ্যা</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        <td colspan="2">প্রাথমিক/এবতেদায়ী</td>
                        <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                        <td colspan="2">৭ম শ্রেণি</td>
                        <td colspan="2">৮ম শ্রেণি</td>
                        <td colspan="2">৯ম শ্রেণি</td>
                        <td colspan="2">১০ম শ্রেণি</td>
                        <td colspan="2">দাখিল/এসএসসি ভোক</td>

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
                    <tr>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.ebtedayee_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.ebtedayee_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.six_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.six_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.seven_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.seven_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.eight_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.eight_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.nine_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.nine_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.ten_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.ten_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.ssc_voc_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryDropout.ssc_voc_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৫</span>
                </div>
                <div class="form-control bg-number-label"> উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে রিপিটার </div>
            </div>
            <div class="col-md-6 contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th colspan="2">১১শ শ্রেণি</th>
                        <th colspan="2">১২শ শ্রেণি</th>
                        <th colspan="2">ফাজিল(পাস)</th>
                        <th colspan="2">ফাজিল (সম্মান)</th>
                        <th colspan="2">কামিল</th>
                        <th colspan="2">আলিম/এইচএসসি ভোক</th>
                        <th colspan="2">আলিম/এইচএসসি বি.এম</th>
                    </tr>
                    </thead>
                    <tbody>
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
                    <tr>
                        <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryRepeater.eleven_total">
                        </td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.eleven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryRepeater.twelve_total">
                        </td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.twelve_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.honours_pass_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.honours_pass_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.honours_somman_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.honours_somman_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.masters_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.masters_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.hsc_voc_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.hsc_voc_female"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.hsc_bm_total"></td>
                        <td><input type="number" number-converter class="w-50"
                                   ng-model="data.studentSummaryRepeater.hsc_bm_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৬</span>
                </div>
                <div class="form-control bg-number-label"> উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে ড্রপআউট</div>
            </div>
        <div class="col-md-6 contentBoxBody">
            <table class="table table-bordered table-striped mt-4 text-center">
                <thead>
                <tr>
                    <th colspan="2">১১শ শ্রেণি</th>
                    <th colspan="2">১২শ শ্রেণি</th>
                    <th colspan="2">ফাজিল(পাস)</th>
                    <th colspan="2">ফাজিল (সম্মান)</th>
                    <th colspan="2">কামিল</th>
                    <th colspan="2">আলিম/এইচএসসি ভোক</th>
                    <th colspan="2">আলিম/এইচএসসি বি.এম</th>

                </tr>
                </thead>
                <tbody>
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
                <tr>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.eleven_total">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.eleven_female">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.twelve_total">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.twelve_female">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.honours_pass_total">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.honours_pass_female">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.honours_somman_total">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.honours_somman_female">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.masters_total">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.masters_female"></td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.hsc_voc_total"></td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.hsc_voc_female"></td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.hsc_bm_total"></td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.hsc_bm_female"></td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/madStdFirstPage.js') }}" type="module" defer></script>
@stop
