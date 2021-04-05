@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="collegeSecondPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.২</span>
                </div>
                <div class="form-control bg-number-label">শ্রেণি, বিষয়ভিত্তিক শিক্ষার্থী, উত্তীর্ণ ও অনুত্তীর্ণ
                    সম্পর্কিত তথ্য ২০২১
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
                    <tbody  ng-repeat="item in data.classes">
                    <tr>
                        <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                        <tr ng-repeat="i in item.groups">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input class="w-50" type="text" ng-init="idx = findIndex(i.group_id,item.class_id)" ng-model="studentSummeryPrevYr[idx].total_student"/></td>
                        <td><input class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_student"/></td>
                        <td><input class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].total_candidate"/></td>
                        <td><input class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_candidate"/></td>
                        <td><input class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].total_promoted"/></td>
                        <td><input class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_promoted"/></td>
                        <td><input class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].total_failed"/></td>
                        <td><input class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_failed"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৩</span>
                </div>
                <div class="form-control bg-number-label">বিষয়ভিত্তিক শিক্ষক ও শিক্ষার্থীর সংখ্যা (শিক্ষকগণের তথ্য নিয়োগ
                    অনুযায়ী সন্নিবেশিত করুন):
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td scope="col" rowspan="3">বিষয়</td>
                        <td scope="col" colspan="2" rowspan="2">শিক্ষক (বিষয় ভিত্তিক)</td>
                        <td scope="col" colspan="10">শিক্ষার্থী সংখ্যা</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">এইচএসসি</td>
                        <td scope="col" colspan="2">স্নাতক পাস</td>
                        <td scope="col" colspan="2">অনার্স</td>
                        <td scope="col" colspan="2">মাস্টার্স প্রিলিমিনারি</td>
                        <td scope="col" colspan="2">মাস্টার্স ফাইনাল</td>
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
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.subjectWiseData">
                        <td ng-bind="subjectName(item.subject_id)"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_teacher"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_teacher_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.hsc"></td>
                        <td><input type="number" class="w-50" ng-model="item.hsc_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.honours_pass"></td>
                        <td><input type="number" class="w-50" ng-model="item.honours_pass_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.honours"></td>
                        <td><input type="number" class="w-50" ng-model="item.honours_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.pr_masters"></td>
                        <td><input type="number" class="w-50" ng-model="item.pr_masters_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.masters"></td>
                        <td><input type="number" class="w-50" ng-model="item.masters_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox col-12" style="font-size: 11px;">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৪ </span>
                </div>
                <div class="form-control bg-number-label">বিভাগভিত্তিক বিভিন্ন বোর্ড এবং বিশ্ববিদ্যালয় পরীক্ষার ফলাফল
                </div>
            </div>
            <div class="contentBoxBody">
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
                        <td><input class="w-50" type="text" ng-init="idx = findIndexEx(i.exam_id,i.subject)" ng-model="boardWiseExamResults[idx].registered_total"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].registerd_female"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].total_candidate"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].female_candidate"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_plus_total"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_plus_girls"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_total"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_girls"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_minus_total"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_minus_girls"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].b_total"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].b_girls"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].c_total"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].c_girls"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].d_total"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].d_girls"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].total_pass"/></td>
                        <td><input class="w-50" type="text" ng-model="boardWiseExamResults[idx].girls_pass"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৫ </span>
                </div>
                <div class="form-control bg-number-label">ট্রেডভিত্তিক শিক্ষার্থী</div>
            </div>
            <div class="col-md-12">
                ২.৩.৫ ট্রেডভিত্তিক এইচএসসি (ভোকেশনাল) শাখার শিক্ষার্থী ২০২১ (যদি এইচএসসি (ভোকেশনাল) থাকে)
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3"> কোড</td>
                        <td rowspan="3" style="width: 300px"> ট্রেডের নাম</td>
                        <td colspan="4"> শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2" colspan="2"> পরীক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2" colspan="2"> পাসের সংখ্যা</td>
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
                        <td><input type="number" class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_candidate"></td>
                        <td><input type="number" class="w-50" ng-model="item.girls_candidate"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_pass"></td>
                        <td><input type="number" class="w-50" ng-model="item.girls_pass"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="col-md-12">
                ২.৩.৬ ট্রেডভিত্তিক এইচএসসি-বিএম শাখার শিক্ষার্থী-২০২১ (যদি এইচএসসি বিএম থাকে)
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3"> কোড</td>
                        <td rowspan="3" style="width: 300px"> ট্রেডের নাম</td>
                        <td colspan="4"> শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2" colspan="2"> পরীক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2" colspan="2"> পাসের সংখ্যা</td>
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
                        <td><input type="number" class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_candidate"></td>
                        <td><input type="number" class="w-50" ng-model="item.girls_candidate"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_pass"></td>
                        <td><input type="number" class="w-50" ng-model="item.girls_pass"></td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <br>
        <div class="row contentBox">

            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.৭ </span>
                </div>
                <div class="form-control bg-number-label">উন্মুক্ত বিশ্ববিদ্যালয়ের শিক্ষা প্রোগ্রাম</div>
            </div>
            <div class="col-md-2">
                <label class="label-number" for="">২.৩.৭ আপনার প্রতিষ্ঠানে উন্মুক্ত বিশ্ববিদ্যালয়ের শিক্ষা প্রোগ্রাম
                    পরিচালিত হয় কি?</label>
                <select class="custom-select" name="" style="width: 75px">
                    <option value="" selected>Select</option>
                    <option value="1">হ্যাঁ-১</option>
                    <option value="2">না-২</option>
                    >
                </select>
            </div>
            <div class="col-md-10">
                <label class="label-number" for="">২.৩.৮ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক শিক্ষার্থীর তথ্য নিম্নের ছক
                    মোতাবেক প্রদান করুন</label>
                <table class="table table-bordered text-center">
                    <tr>
                        <td rowspan="3">ভর্তির বছর</td>
                        <td colspan="4"> এইচএসসি প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">স্নাতক (পাস) প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">স্নাতক (সম্মান) প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">স্নাতকোত্তর প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">অন্যান্য প্রোগ্রাম</td>
                    </tr>
                    <tr>
                        <td colspan="2">একাদশ শ্রেণি</td>
                        <td colspan="2">দ্বাদশ শ্রেণি</td>
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
                    <tbody>
                    <tr>
                        <td>২০২১</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>২০২০</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>২০১৯</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>২০১৮</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>২০১৭</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <label class="label-number" for="">২.৩.৯ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক ফলাফল নিম্নের ছক মোতাবেক
                    প্রদান করুন</label>
                <table class="table table-bordered" style="text-align:center">
                    <tr>
                        <td rowspan="3" colspan="2">ভর্তির বছর</td>
                        <td colspan="4"> এইচএসসি প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">স্নাতক (পাস) প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">স্নাতক (সম্মান) প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">স্নাতকোত্তর প্রোগ্রাম</td>
                        <td rowspan="2" colspan="2">অন্যান্য প্রোগ্রাম</td>
                    </tr>
                    <tr>
                        <td colspan="2">একাদশ শ্রেণি</td>
                        <td colspan="2">দ্বাদশ শ্রেণি</td>
                    </tr>
                    <tr>
                        <td>পরিক্ষার্থী</td>
                        <td>পাশের সংখ্যা</td>
                        <td>পরিক্ষার্থী</td>
                        <td>পাশের সংখ্যা</td>
                        <td>পরিক্ষার্থী</td>
                        <td>পাশের সংখ্যা</td>
                        <td>পরিক্ষার্থী</td>
                        <td>পাশের সংখ্যা</td>
                        <td>পরিক্ষার্থী</td>
                        <td>পাশের সংখ্যা</td>
                        <td>পরিক্ষার্থী</td>
                        <td>পাশের সংখ্যা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td rowspan="2">২০২০</td>
                        <td>মোট</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">২০১৯</td>
                        <td>মোট</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">২০১৮</td>
                        <td>মোট</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">২০১৭</td>
                        <td>মোট</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">২০১৬</td>
                        <td>মোট</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪</span>
                </div>
                <div class="form-control bg-number-label">পদবিভিত্তিক কর্মরত ও এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে) শিক্ষক ও
                    কর্মচারীর সংখ্যা
                </div>
            </div>
            <div class="col-md-9"> ২.৪ মূল প্রতিষ্ঠানের পদবিভিত্তিক কর্মরত ও এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে) শিক্ষক ও
                কর্মচারীর সংখ্যা: ২০২১ </label>
                <table class="table table-bordered text-center">
                    <tr>
                        <td rowspan="2">পদবী</td>
                        <td colspan="2"> কর্মরত</td>
                        <td colspan="2"> এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে)</td>
                        <td rowspan="2">শূন্য পদের সংখ্যা</td>
                        <td rowspan="2">নিবন্ধনকৃত শিক্ষক সংখ্যা (NTRCA) (প্রযোজ্য ক্ষেত্রে)</td>
                        <td rowspan="2">খন্ডকালীন শিক্ষক সংখ্যা</td>
                        <td rowspan="2">NTRCA কর্তৃক পূরণযোগ্য শূন্য পদের সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>অধ্যক্ষ</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-9">
                <label class="label-number" for="">২.৪.১ সংযুক্ত এসএসসি (ভোকেশনাল) এইচএসসি (বিএম) শাখার শিক্ষক/কর্মচারীর
                    সংখ্যা: ২০২০</label>
                <table class="table table-bordered text-center">
                    <tr>
                        <td rowspan="2">পদবী</td>
                        <td colspan="2"> কর্মরত</td>
                        <td colspan="2"> এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে)</td>
                        <td rowspan="2">শূন্য পদের সংখ্যা</td>

                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>প্রভাষক</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪.২ </span>
                </div>
                <div class="form-control bg-number-label"> শিক্ষাগত যোগ্যতাভিত্তিক শিক্ষক সংখ্যা</div>
            </div>

            <div class="col-md-4 contentBoxBody">২.৪.২ মূল প্রতিষ্ঠানের সার্বোচ্চ শিক্ষাগত যোগ্যতাভিত্তিক শিক্ষক সংখ্যা:

                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">শিক্ষাগত যোগ্যতা</td>
                        <td colspan="2">শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>পিএইচডি</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>এমফিল/এমএস</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>স্নাতকোত্তর (অনার্সসহ)</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>স্নাতকোত্তর (অনার্সছাড়া)</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>কামিল</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>স্নাতক সম্মান (৩ বছর মেয়াদী)</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>স্নাতক সম্মান (৪ বছর মেয়াদী)</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>স্নাতক</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ফাজিল</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>এইচএসসি/ আলিম বা সমমান</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>কৃষি ডিপ্লোমা</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 contentBoxBody">
                ২.৪.৩ মূল প্রতিষ্ঠানের সর্বোচ্চ পেশাগত ডিগ্রিপ্রাপ্ত শিক্ষক সংখ্যা:
                <table class="table table-bordered  table-striped text-center">
                    <tr>
                        <td rowspan="2">ডিগ্রী</td>
                        <td colspan="2">শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>এম এড</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>বিএড/ডিপ ইন এড</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>বি পি এড</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>বি এজি এড</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 contentBoxBody">
                ২.৪.৪ আইসিটি বিষয়ক প্রশিক্ষণ/ ডিগ্রি প্রাপ্ত শিক্ষক সংখ্যা
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">প্রশিক্ষণ/ ডিগ্রি</td>
                        <td colspan="2">শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>ডিপ্লোমা (আইসিটি)</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>সার্টিফিকেট ট্রেনিং</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>হার্ডওয়্যার এন্ড ট্রাবল স্যুটিং</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ডিজিটাল কনটেন্ট ডেভলপমেন্ট ট্রেনিং</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>অন্যান্য</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪.১২</span>
                </div>
                <div class="form-control bg-number-label">কর্মকালীন প্রশিক্ষণের তথ্য (সংখ্যা লিখুন):</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th rowspan="2">প্রশিক্ষণ</th>
                        <th colspan="2">প্রশিক্ষণপ্রাপ্ত শিক্ষক</th>
                        <th rowspan="2">প্রশিক্ষণ</th>
                        <th colspan="2">প্রশিক্ষণপ্রাপ্ত শিক্ষক</th>

                    </tr>
                    <tr>

                        <th colspan="2">হ্যাঁ/না</th>
                        <th>মোট</th>
                        <th>মহিলা</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>হেড টিচার ট্রেনিং (২১ দিন)</td>
                        <td colspan="2"><select class="custom-select " name="english_version" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td>সিপিডি-১ শুধুমাত্র ইংরেজি ট্রেনিং (২১ দিন)</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td>হেড টিচার ফলো-আপ ট্রেনিং (৬ দিন)</td>
                        <td colspan="2"><select class="custom-select " name="english_version" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td>সিপিডি-২ ট্রেনিং (৫ দিন)</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>হেড টিচার প্রি-সার্ভিস ট্রেনিং (৩৫ দিন)</td>
                        <td colspan="2"><select class="custom-select " name="english_version" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td>ক্লাস্টার ট্রেনিং (১ দিন)</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td rowspan="2"></td>
                        <td colspan="2">প্রশিক্ষণপ্রাপ্ত শিক্ষক সংখ্যা</td>
                        <td>এস.বি. এ ট্রেনিং</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>

                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>সৃজনশীল প্রশ্ন সংক্রান্ত ট্রেনিং</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>এসটিসি ট্রেনিং (৩ মাস)</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td>অন্যান্য ট্রেনিং</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>এসটিটি থেকে বি.এড (৯ মাস)</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td colspan="3" rowspan="2">•প্রধান শিক্ষকগণ হ্যাঁ/না টিক দিবেন <br>
                            •অন্যান্য শিক্ষকগণের সংখ্যা লিখবেন
                        </td>

                    </tr>
                    <tr>
                        <td>সিপিডি-১ ট্রেনিং (১৪ দিন)</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪.১৪</span>
                </div>
                <div class="form-control bg-number-label"> বিষয়ভিত্তিক শিক্ষক সংখ্যা</div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="col">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td></td>
                            <td>মোট</td>
                            <td>মহিলা</td>
                        </tr>
                        <tbody>
                        <tr>
                            <td style="width: 350px">২.৪.১৪ ক্লাস রুটিন অনুযায়ী ইংরেজি পাঠদানকারী শিক্ষক সংখ্যা:</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">২.৪.১৫ ইংরেজি বিষয়ে পাঠদানকারী শিক্ষকের স্নাতক (পাস), স্নাতক (সম্মান) ও স্নাতকোত্তর
                    পর্যায়ে ইংরেজি বিষয় অধ্যয়ন সম্পর্কিত তথ্য:

                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td>ক্রমিক নং</td>
                            <td>বিবরণ</td>
                            <td>শিক্ষক/ শিক্ষিকার সংখ্যা</td>
                        </tr>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে বাধ্যতামূলক ১০০ নম্বরের ইংরেজি ছিল</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে ৩০০ নম্বরের ইংরেজি ছিল</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td style="width: 350px">ইংরেজিতে স্নাতক সম্মান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td style="width: 350px">ইংরেজিতে স্নাতকোত্তর</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে ইংরেজি ছিলা না</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td style="width: 350px">এইচ এস সি পাস</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="col">
                    <table class="table table-bordered  table-striped text-center">
                        <tr>
                            <td></td>
                            <td>মোট</td>
                            <td>মহিলা</td>
                        </tr>
                        <tbody>
                        <tr>
                            <td style="width: 350px">২.৪.১৬ ক্লাস রুটিন অনুযায়ী গণিত বিষয়ে পাঠদানকারী শিক্ষক সংখ্যা:
                            </td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">২.৪.১৭ গণিত বিষয়ে পাঠদানকারী শিক্ষকের স্নাতক (পাস), স্নাতক (সম্মান) ও স্নাতকোত্তর
                    পর্যায়ে গণিত বিষয় অধ্যয়ন সম্পর্কিত তথ্য:

                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td>ক্রমিক নং</td>
                            <td>বিবরণ</td>
                            <td>শিক্ষক/ শিক্ষিকার সংখ্যা</td>
                        </tr>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে পদার্থ ও রসায়নসহ গণিত ছিল</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে অন্যান্য বিষয়সহ গণিত ছিল</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td style="width: 350px">গণিতে স্নাতক সম্মান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td style="width: 350px">গণিতে স্নাতকোত্তর</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে গণিত ছিল না কিন্তু এইচএসসিতে ছিল</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td style="width: 350px">স্নাতক বা এইচ এস সি পর্যায়ে ছিল না</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪.১৮</span>
                </div>
                <div class="form-control bg-number-label">অবসর গ্রহণ, নতুন নিয়োগপ্রাপ্ত, গবেষণা কাজ, পুরষ্কার প্রাপ্ত
                    ইত্যাদি সম্পর্কিত শিক্ষকের সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <td rowspan="2">ক্রমিক নং</td>
                        <td rowspan="2" style="width:450px">বিবরণ</td>
                        <td colspan="2"> শিক্ষকের সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>১</td>
                        <td style="width: 300px">তথ্য প্রদানের দিন শিক্ষক উপস্থিতি</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>২</td>
                        <td style="width: 300px">অবসরে গিয়েছেন (১/৭/২০২০থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>৩</td>
                        <td style="width: 300px">অবসরে যাবেন (১/৭/২০২১ থেকে ৩০/৬/২০২২ পর্যন্ত)</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>৪</td>
                        <td style="width: 300px">নতুন নিয়োগপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>৫</td>
                        <td style="width: 300px">শিক্ষকতা পেশা ছেড়ে দিয়েছেন (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>৬</td>
                        <td style="width: 300px">NTRCA কর্তৃক সুপারিশকৃত শিক্ষকের সংখ্যা</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>৭</td>
                        <td style="width: 300px">বর্তমানে কতজন শিক্ষক গবেষণা কাজে সম্পৃক্ত</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>৮</td>
                        <td style="width: 300px">একাডেমিক বিষয়ের ওপর পুরষ্কারপ্রাপ্ত শিক্ষকের সংখ্যা</td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>৯</td>
                        <td style="width: 300px">শিখন-শেখানো বিষয়ে প্রশিক্ষণপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)
                        </td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>১০</td>
                        <td style="width: 300px">বিশেষ চাহিদাসম্পন্ন (Special needs) শিক্ষার্থীর শিক্ষা বিষয়ে
                            প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা
                        </td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>১১</td>
                        <td style="width: 300px">একীভূত শিক্ষা (Inclusive education), শিশু অধিকার এবং বিদ্যালয়ের ইতিবাচক
                            শৃঙ্খলা বিষয়ের ওপর প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা
                        </td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                        <td><input type="number" class="form-control w-25" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৫</span>
                </div>
                <div class="form-control bg-number-label">প্রাপ্ত পুরষ্কার সম্পর্কিত তথ্য</div>
            </div>
            <div class="col-md-6">
                ২.৫ শিক্ষা প্রতিষ্ঠানে প্রাপ্ত পুরষ্কার সম্পর্কিত তথ্য (নির্দিষ্ট স্থানে টিক চিহ্ন দিন)
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <td rowspan="7">শিক্ষকদের জন্য</td>
                        <td>বিষয়</td>
                        <td>জাতীয়</td>
                        <td>বিভাগ/মহানগর</td>
                        <td>জেলা</td>
                        <td>উপজেলা/থানা</td>
                        <td style="width:100px">সাল</td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষা প্রতিষ্ঠান</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষা প্রতিষ্ঠান প্রধান</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শ্রেণি শিক্ষক</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (বিএনসিসি)</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (রোভার)</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (রেঞ্জার)</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    <tr>
                    </tr>
                    <tr>
                        <td rowspan="4"> শিক্ষার্থীদের জন্য</td>
                        <td>শ্রেষ্ঠ শিক্ষার্থী</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (বিএন্সিসি)</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (রোভার)</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (রেঞ্জার)</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                ২.৫.১ বিভিন্ন পর্যায়ে অংশগ্রহণকারী ও পুরষ্কারপ্রাপ্ত শিক্ষার্থী সংখ্যা
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <td>বিষয়</td>
                        <td></td>
                        <td>প্রতিষ্ঠান পর্যায়ে</td>
                        <td>উপজেলা/থানা পর্যায়ে</td>
                        <td>জেলা পর্যায়ে</td>
                        <td>বিভাগীয় পর্যায়ে</td>
                        <td>জাতীয় পর্যায়ে</td>
                    </tr>
                    <tr>
                        <td rowspan="2">সাহিত্য ও সংস্কৃতি</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">ক্রীড়া (আউটডোর)</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">ক্রীড়া (ইনডোর)</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">সৃজনশীল মেধা অন্বেষণ</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    <tr>
                        <td>বিশেষ কৃতিত্বপূর্ণ অবদান</td>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                        <td><input type="radio" name="easy" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/collegeSecondPage.js') }}"></script>
@stop