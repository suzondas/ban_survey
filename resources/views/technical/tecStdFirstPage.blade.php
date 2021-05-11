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
                        <td colspan="2">এসএসসি বা সমমান</td>
                        <td colspan="2">এইচএসসি বা সমমান</td>
                        <td colspan="2">ডিপ্লোমা লেভেল</td>
                        <td colspan="2">সার্টিফিকেট/৩৬০ ঘন্টা</td>
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
                <div class="form-control bg-number-label">এসএসসি ভোকেশনাল ও দাখিল ভোকেশনাল এর বর্ষভিত্তিক শিক্ষার্থীর তথ্য-২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">শ্রেণি</td>

                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপস্থিতি(১৫ জুলাই ২০২১)</td>
                        <td colspan="2">পুনঃভর্তিকৃত(রিপিটার)শিক্ষার্থীর সংখ্যা</td>
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

                    </tr>
                    </tdead>
                    <tbody ng-repeat="item in data.classes">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_in"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_out"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].nextyr_book_reg"/></td>
                    <tr ng-repeat="i in item.groups" ng-if="item.groups.length!=0">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_student"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_scholarship"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_scholarship"/></td>
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
                <div class="form-control bg-number-label">এইচএসসি ভোকেশনাল এর বর্ষভিত্তিক শিক্ষার্থীর তথ্য-২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">শ্রেণি</td>

                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপস্থিতি(১৫ জুলাই ২০২১)</td>
                        <td colspan="2">পুনঃভর্তিকৃত(রিপিটার)শিক্ষার্থীর সংখ্যা</td>
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

                    </tr>
                    </tdead>
                    <tbody ng-repeat="item in data.classes">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_in"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_out"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].nextyr_book_reg"/></td>
                    <tr ng-repeat="i in item.groups" ng-if="item.groups.length!=0">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_student"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_scholarship"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_scholarship"/></td>
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
                <div class="form-control bg-number-label">এইচএসসি বিএম এর বর্ষভিত্তিক শিক্ষার্থীর তথ্য-২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">শ্রেণি</td>

                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপস্থিতি(১৫ জুলাই ২০২১)</td>
                        <td colspan="2">পুনঃভর্তিকৃত(রিপিটার)শিক্ষার্থীর সংখ্যা</td>
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

                    </tr>
                    </tdead>
                    <tbody ng-repeat="item in data.classes">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_in"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_out"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].nextyr_book_reg"/></td>
                    <tr ng-repeat="i in item.groups" ng-if="item.groups.length!=0">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_student"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_scholarship"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_scholarship"/></td>
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
                    <span class="input-group-text bg-number">২.১.৪</span>
                </div>
                <div class="form-control bg-number-label">এক বছর মেয়াদি সার্টিফিকেট কোর্সের বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২০
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">শ্রেণি</td>

                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপস্থিতি(১৫ জুলাই ২০২১)</td>
                        <td colspan="2">পুনঃভর্তিকৃত(রিপিটার)শিক্ষার্থীর সংখ্যা</td>
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

                    </tr>
                    </tdead>
                    <tbody ng-repeat="item in data.classes">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_in"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_out"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].nextyr_book_reg"/></td>
                    <tr ng-repeat="i in item.groups" ng-if="item.groups.length!=0">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_student"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_scholarship"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_scholarship"/></td>
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
                    <span class="input-group-text bg-number">২.১.৫</span>
                </div>
                <div class="form-control bg-number-label">এক বছর মেয়াদি এডভান্সড সার্টিফিকেট কোর্সের বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২০
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">শ্রেণি</td>

                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপস্থিতি(১৫ জুলাই ২০২১)</td>
                        <td colspan="2">পুনঃভর্তিকৃত(রিপিটার)শিক্ষার্থীর সংখ্যা</td>
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

                    </tr>
                    </tdead>
                    <tbody ng-repeat="item in data.classes">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].male_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].total_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].female_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_in"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].transfer_out"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50" ng-init="idy = findClIndex(item.class_id,item.education_level_id)" ng-model="studentSummery[idy].nextyr_book_reg"/></td>
                    <tr ng-repeat="i in item.groups" ng-if="item.groups.length!=0">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_student"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_stipend"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].male_scholarship"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="studentSummery[idx].female_scholarship"/></td>
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
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.১</span>
                </div>
                <div class="form-control bg-number-label"> ২০২০ ও তার পূর্বের শিক্ষার্থী ২০২১ সালে একই শ্রেণীতে(রিপিটার) অধ্যয়নরত আছে এইরুপ শিক্ষার্থীর সংখ্যা</div>
            </div>
        <div class="col-md-6 contentBoxBody">
            <table class="table table-bordered table-striped mt-4 text-center">
                <thead>
                <tr>
                    <th colspan="2">রিপিটার শিক্ষার্থী</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>মোট</td>
                    <td>ছাত্রী</td>
                </tr>
                <tr>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.eleven_total">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.eleven_female">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.২</span>
                </div>
                <div class="form-control bg-number-label"> ২০২০ সালের ঝড়ে পড়া (ড্রপআউট) শিক্ষার্থীর সংখ্যা</div>
            </div>
        <div class="col-md-6 contentBoxBody">
            <table class="table table-bordered table-striped mt-4 text-center">
                <thead>
                <tr>
                    <th colspan="2">ড্রপআউট শিক্ষার্থী</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>মোট</td>
                    <td>ছাত্রী</td>
                </tr>
                <tr>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.eleven_total">
                    </td>
                    <td><input type="number" number-converter class="w-50" ng-model="data.studentSummaryDropout.eleven_female">
                    </td>
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
    <script src="{{ asset('js/madStdFirstPage.js') }}" type="module" defer></script>
--}}
@stop
