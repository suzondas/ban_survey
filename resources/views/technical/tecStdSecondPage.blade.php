@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="madStdSecondPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৬</span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন ইঞ্জি/ডিপ্লোমা সমমান- এর পর্ব ভিত্তিক শিক্ষার্থীর
                    তথ্য-২০২১
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
                        <td rowspan="2">ট্রান্সফার ইন</td>
                        <td rowspan="2">ট্রান্সফার আউট</td>

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
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].total_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].female_student"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].male_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].female_stipend"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].male_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].female_scholarship"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].total_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].female_present"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].transfer_in"/></td>
                    <td ng-if="item.groups.length==0"><input type="number" number-converter class="w-50"
                                                             ng-init="idy = findClIndex(item.class_id,item.education_level_id)"
                                                             ng-model="studentSummery[idy].transfer_out"/></td>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৭</span>
                </div>
                <div class="form-control bg-number-label">বেসিক ট্রেডে কোর্সের মেয়াদ(ঘন্টা/মাস/বর্ষ) ও শিক্ষার্থীর
                    তথ্য-২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        <td rowspan="2">কোর্সের ধরন</td>
                        <td rowspan="2">কোর্সের মেয়াদ</td>
                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত</td>
                    </tr>
                    <tr>
                        <td>ছাত্র</td>
                        <td>ছাত্রী</td>
                        <td>ছাত্র</td>
                        <td>ছাত্রী</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr>
                        <td rowspan="2">বেসিক</td>
                        <td>৩ মাস ৩৬০ ঘন্টা</td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>৬ মাস ৩৬০ ঘন্টা</td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>RTO-()</td>
                        <td>৩ মাস ৩৬০ ঘন্টা</td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>NTVQF(Level1-6)</td>
                        <td>প্রতিটি কোর্সের মেয়াদ সর্বোচ্চ ৩৬০ ঘন্টা</td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>RPL</td>
                        <td>৩৬০ ঘন্টা</td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>RPL</td>
                        <td>২-৩ দিন (ওরিয়েন্টেশনমূলক কোর্স) এবং এসেস্মেন্ট ১ দিন</td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এডভান্সড সার্টিফিকেট কোর্স</td>
                        <td>১ বছর</td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                        <td><input type="number" number-converter class="w-50"/></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৮</span>
                </div>
                <div class="form-control bg-number-label">এসএসসি ভোকেশনাল এর ট্রেডভিত্তিক শিক্ষার্থী তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="4">শ্রেণী</td>
                        <td colspan="2" rowspan="2">মোট</td>
                    </tr>
                    <tr>
                        <td colspan="2">৯ম</td>
                        <td colspan="2">১০ম</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৯</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি ভোকেশনাল এর ট্রেডভিত্তিক শিক্ষার্থী তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="4">শ্রেণী</td>
                        <td colspan="2" rowspan="2">মোট</td>
                    </tr>
                    <tr>
                        <td colspan="2">১১শ</td>
                        <td colspan="2">১২শ</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৯</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি(বিএম) এর স্পেশালাইজেশন ভিত্তিক শিক্ষার্থীর তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="4">শ্রেণী</td>
                        <td colspan="2" rowspan="2">মোট</td>
                    </tr>
                    <tr>
                        <td colspan="2">১১শ</td>
                        <td colspan="2">১২শ</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center">
            <button ng-click="submitData()" type="button" class="btn btn-success">Submit</button>
        </div>
    </div>
@endsection
@section('javascript')
    {{--
        <script src="{{ asset('js/madStdSecondPage.js') }}" type="module" defer></script>
    --}}
@stop
