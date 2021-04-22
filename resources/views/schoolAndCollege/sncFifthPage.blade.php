@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="sncFifthPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৫</span>
                </div>
                <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্বস্তরে শ্রেণি, বিভাগ ও লিঙ্গভিত্তিক
                    উত্তীর্ণ ও অনুত্তীর্ণ শিক্ষার্থীর তথ্য (বার্ষিক পরীক্ষার ফলাফল)
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td scope="col" rowspan="2">শ্রেণি</td>
                        <td scope="col" rowspan="2" style="width:120px">বিভাগ</td>
                        <td scope="col" colspan="2">মোট শিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">পরিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">উত্তীর্ণ</td>
                        <td scope="col" colspan="2">অনুত্তীর্ণ</td>
                    </tr>
                    <tr>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                    </tr>
                    <tbody  ng-repeat="item in data.colClasses">
                    <tr>
                        <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <tr ng-repeat="i in item.groups">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input class="w-50" type="number" number-converter ng-init="idx = findIndex(i.group_id,item.class_id)" ng-model="studentSummeryPrevYr[idx].total_student"/></td>
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
        <br>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৬</span>
                </div>
                <div class="form-control bg-number-label">বিষয়ভিত্তিক পাঠদানের তথ্য:</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td scope="col" rowspan="3">বিষয়</td>
                        <td scope="col" colspan="2" rowspan="2">শিক্ষক (বিষয় ভিত্তিক)</td>
                        <td scope="col" colspan="12">শিক্ষার্থী সংখ্যা</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">৬ষ্ঠ</td>
                        <td scope="col" colspan="2">৭ম</td>
                        <td scope="col" colspan="2">৮ম</td>
                        <td scope="col" colspan="2">৯ম</td>
                        <td scope="col" colspan="2">১০ম</td>
                        <td scope="col" colspan="2">এইচএসসি</td>
                    </tr>
                    <tr>
                        <td scope="col">মোট</td>
                        <td scope="col">মহিলা</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tbody>
                    <tr ng-repeat="item in data.subjectWiseData">
                        <td ng-bind="subjectName(item.subject_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.hsc"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.hsc_female"></td>
                    </tr>
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox col-12 " style="font-size: 11px;">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৭</span>
                </div>
                <div class="form-control bg-number-label">বিভাগভিত্তিক বিভিন্ন বোর্ড পরীক্ষার ফলাফল:</div>
            </div>
            <div class="contentBoxBody ">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td scope="col" rowspan="3">পরীক্ষার নাম ও বছর</td>
                        <td scope="col" rowspan="3">বিভাগ</td>
                        <td scope="col" rowspan="2" colspan="2">রেজি: শিক্ষার্থী সংখ্যা</td>
                        <td scope="col" rowspan="2" colspan="2">পরিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="12">প্রাপ্ত জিপিএ অনুযায়ী পাসের সংখ্যা</td>
                        <td scope="col" rowspan="2" colspan="2">মোট পাস</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="6">ছাত্র</td>
                        <td scope="col" colspan="6">ছাত্রী</td>
                    </tr>
                    <tr>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">৫.০০</td>
                        <td scope="col">৪- ৪.৯৯</td>
                        <td scope="col">৩.৫- ৩.৯৯</td>
                        <td scope="col">৩- ৩.৫</td>
                        <td scope="col">২- ২.৯৯</td>
                        <td scope="col">২ এর কম</td>
                        <td scope="col">৫.০০</td>
                        <td scope="col">৪- ৪.৯৯</td>
                        <td scope="col">৩.৫- ৩.৯৯</td>
                        <td scope="col">৩- ৩.৫</td>
                        <td scope="col">২- ২.৯৯</td>
                        <td scope="col">২ এর কম</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                    </tr>
                    <tbody ng-repeat="item in data.examLevel">
                    <td rowspan="@{{item.exam.length+1}}">@{{item.level}}</td>
                    <tr ng-repeat="i in item.exam">
                        <td>@{{i.name}}</td>
                        <td><input class="w-50" type="number" number-converter ng-init="idx = findIndexEx(i.exam_id,i.subject)" ng-model="boardWiseExamResults[idx].registered_total"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].registerd_female"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].total_candidate"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].female_candidate"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].a_plus_total"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].a_plus_girls"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].a_total"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].a_girls"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].a_minus_total"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].a_minus_girls"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].b_total"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].b_girls"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].c_total"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].c_girls"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].d_total"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].d_girls"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].total_pass"/></td>
                        <td><input class="w-50" type="number" number-converter ng-model="boardWiseExamResults[idx].girls_pass"/></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৮</span>
                </div>
                <div class="form-control bg-number-label">কোর্স ভিত্তিক এসএসসি (ভোকেশনাল) শাখার শিক্ষার্থী ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3"> কোড</td>
                        <td rowspan="3" style="width: 300px"> ট্রেডের নাম</td>
                        <td colspan="4"> শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2" colspan="2"> পরীক্ষার্থীর সংখ্যা (২০২০)</td>
                        <td rowspan="2" colspan="2"> পাসের সংখ্যা (২০২০)</td>
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
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.sscVocStd">
                        <td>@{{ item.trade_code }}</td>
                        <td>@{{ item.trade_name }}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_candidate"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_candidate"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৯</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি ভোকেশনাল শাখার শিক্ষার্থী ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3"> কোড</td>
                        <td rowspan="3" style="width: 300px"> ট্রেডের নাম</td>
                        <td colspan="4"> শিক্ষার্থীর সংখ্যা(২০২১)</td>
                        <td rowspan="2" colspan="2"> পরীক্ষার্থীর সংখ্যা(২০২০)</td>
                        <td rowspan="2" colspan="2"> পাসের সংখ্যা(২০২০)</td>
                    </tr>
                    <tr>
                        <td colspan="2">১ম বর্ষ (একাদশ)</td>
                        <td colspan="2">২য় বর্ষ (দ্বাদশ)</td>
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
                    <tbody>
                    <tr ng-repeat="item in data.hscVocStd">
                        <td>@{{ item.trade_code }}</td>
                        <td>@{{ item.trade_name }}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_candidate"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_candidate"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৯</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি বিএম শাখার শিক্ষার্থী ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3"> কোড</td>
                        <td rowspan="3" style="width: 300px"> ট্রেডের নাম</td>
                        <td colspan="4"> শিক্ষার্থীর সংখ্যা(২০২১)</td>
                        <td rowspan="2" colspan="2"> পরীক্ষার্থীর সংখ্যা(২০২০)</td>
                        <td rowspan="2" colspan="2"> পাসের সংখ্যা(২০২০)</td>
                    </tr>
                    <tr>
                        <td colspan="2">১ম বর্ষ (একাদশ)</td>
                        <td colspan="2">২য় বর্ষ (দ্বাদশ)</td>
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
                    <tbody>
                    <tr ng-repeat="item in data.hscBMStd">
                        <td>@{{ item.trade_code }}</td>
                        <td>@{{ item.trade_name }}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_candidate"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_candidate"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/sncFifthPage.js') }}" type="module" defer></script>
@stop
