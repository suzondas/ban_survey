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
                        <td><input  class="w-50" type="number" number-converter ng-init="idx = findIndex(i.group_id,item.class_id)" ng-model="studentSummeryPrevYr[idx].total_student"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_student"  /></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].total_candidate"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_candidate"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].total_promoted"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_promoted"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].total_failed"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="studentSummeryPrevYr[idx].female_failed"/></td>
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
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.hsc"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.hsc_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.pr_masters"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.pr_masters_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_female"></td>
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
                        <td><input type="number" number-converter class="w-50" type="text" ng-init="idx = findIndexEx(i.exam_id,i.subject)" ng-model="boardWiseExamResults[idx].registered_total"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].registerd_female"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].total_candidate"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].female_candidate"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_plus_total"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_total"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_minus_total"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].b_total"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].c_total"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].d_total"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_plus_girls"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_girls"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].a_minus_girls"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].b_girls"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].c_girls"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].d_girls"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].total_pass"/></td>
                        <td><input type="number" number-converter class="w-50" type="text" ng-model="boardWiseExamResults[idx].girls_pass"/></td>
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
                <select class="custom-select" name="" style="width: 75px" ng-model="data.instOtherInfo.open_unvi_course_yn">
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
                    <tr ng-repeat="item in data.openUnStd">
                        <td>@{{ item.admit_year }}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.others"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.others_female"></td>
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
                    <tbody ng-repeat="item in data.openUnRes">
                    <tr>
                        <td rowspan="2">@{{ item.year }}</td>
                        <td>মোট</td>
                        <td><input type="number" number-converter class="w-50" string-to-number ng-model="item.eleven_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_p_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_p_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.others_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.others_pass"></td>
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_fem_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_fem_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_p_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_p_fem_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_fem_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.masters_fem_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.others_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.others_fem_pass"></td>
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
                    <tr ng-repeat="item in data.teachStafSum">
                        <td ng-bind="desigName(item.designation_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.mpo_teachers"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_mpo_teachers"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.blank_post_no"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ntrc_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.parttime_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ntrc_blank_post"/></td>
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
                    <tr ng-repeat="item in data.teachVocStafSum">
                        <td ng-bind="desigVocName(item.designation_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.mpo_teachers"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_mpo_teachers"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.blank_post_no"/></td>
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
                    <tr ng-repeat="item in data.teachQualiSum">
                        <td ng-bind="qualiName(item.quli_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/></td>
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
                    <tr ng-repeat="item in data.hdTeachSum">
                        <td ng-bind="hdName(item.higher_degree_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/></td>
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
                    <tr ng-repeat="item in data.hdTrnSum">
                        <td ng-bind="hdTrName(item.higher_degree_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        {{--Special Training Info --}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪.১২</span>
                </div>
                <div class="form-control bg-number-label">বিশেষ প্রশিক্ষণের তথ্য
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>

                            <label>২.৪.৬ সৃজনশীল প্রশ্নপত্র প্রণয়ন ও উত্তরপত্র মূল্যায়ন বিষয়ক প্রশিক্ষণপ্রাপ্ত শিক্ষক
                                সংখ্যা</label>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td colspan="2" class="text-center">৩ দিন প্রশিক্ষণপ্রাপ্ত</td>
                                    <td colspan="2" class="text-center">১২ দিন প্রশিক্ষণপ্রাপ্ত</td>
                                </tr>
                                <tr>
                                    <td class="text-center"> মোট: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.creative_3day_total"/></td>
                                    <td class="text-center"> মহিলা: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.creative_3day_female"/></td>
                                    <td class="text-center"> মোট: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.creative_12day_total"/></td>
                                    <td class="text-center"> মহিলা: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.creative_12day_female"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td><label>২.৪.৭ বিশেষ চাহিদাসম্পন্ন শিক্ষক এর কর্মকালীন প্রশিক্ষণের তথ্য (সংখ্যা লিখুন)</label><br>
                            মোট: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.onjob_training_total"/>
                            মহিলা: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.onjob_training_female"/></td>
                        <td><label>২.৪.৮ ক্ষুদ্র-নৃ-গোষ্ঠী শিক্ষক এর কর্মকালীন প্রশিক্ষণের তথ্য (সংখ্যা
                                লিখুন)</label><br>
                            মোট: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.onjob_training_tribe_total"/>
                            মহিলা: <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.onjob_training_tribe_female"/></td>
                        <td class="form-inline"><label>২.৪.৯ বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীর জন্য গাইড শিক্ষক আছে
                                কি? </label><br>
                            <select class="w-25" ng-model="data.teacherTrainInfo.autism_guide_teacher_yn">
                                <option value="1"> হ্যাঁ</option>
                                <option value="2"> না</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="form-inline"><label>২.৪.১০ দুর্যোগ ব্যবস্থাপনা সংক্রান্ত প্রশিক্ষণপ্রাপ্ত শিক্ষক আছে কি? </label><br>
                            <select class="w-25" ng-model="data.teacherTrainInfo.disaster_train_teacher_yn">
                                <option value="1"> হ্যাঁ</option>
                                <option value="2"> না</option>
                            </select></td>
                        <td><label>২.৪.১১ উত্তর হ্যাঁ হলে কয়জন?</label><br>
                            <input type="number" number-converter class="w-25" ng-model="data.teacherTrainInfo.disaster_train_teacher"/>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>২.৪.১২শিক্ষকদের কোন কোন বিষয়ে প্রশিক্ষণ প্রয়োজন?</td>
                        <td>১.<input type="text" class="form-control" ng-model="data.teacherTrainInfo.training_required1"/></td>
                        <td>২.<input type="text" class="form-control" ng-model="data.teacherTrainInfo.training_required2"/></td>
                        <td>৩.<input type="text" class="form-control" ng-model="data.teacherTrainInfo.training_required3"/></td>
                        <td>৪.<input type="text" class="form-control" ng-model="data.teacherTrainInfo.training_required4"/></td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Special Trainig Ends--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৪.১৩</span>
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
                        <td colspan="2"><select class="custom-select " ng-model="data.teacherInservTr.ht_training_yn" style="width: 90px" >
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td>সিপিডি-১ শুধুমাত্র ইংরেজি ট্রেনিং (২১ দিন)</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cpd1_eng_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cpd1_eng_female"></td>
                    </tr>

                    <tr>
                        <td>হেড টিচার ফলো-আপ ট্রেনিং (৬ দিন)</td>
                        <td colspan="2"><select class="custom-select " ng-model="data.teacherInservTr.ht_fl_training_yn" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td>সিপিডি-২ ট্রেনিং (৫ দিন)</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cpd2_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cpd2_female"></td>
                    </tr>
                    <tr>
                        <td>হেড টিচার প্রি-সার্ভিস ট্রেনিং (৩৫ দিন)</td>
                        <td colspan="2"><select class="custom-select " ng-model="data.teacherInservTr.ht_prserv_training_yn" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td>ক্লাস্টার ট্রেনিং (১ দিন)</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cluster_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cluster_female"></td>
                    </tr>
                    <tr>
                        <td rowspan="2"></td>
                        <td colspan="2">প্রশিক্ষণপ্রাপ্ত শিক্ষক সংখ্যা</td>
                        <td>এস.বি. এ ট্রেনিং</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.sba_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.sba_female"></td>
                    </tr>
                    <tr>

                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>সৃজনশীল প্রশ্ন সংক্রান্ত ট্রেনিং</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.srizonsil_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.srizonsil_female"></td>
                    </tr>
                    <tr>
                        <td>এসটিসি ট্রেনিং (৩ মাস)</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.stc_training_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.stc_training_female"></td>
                        <td>অন্যান্য ট্রেনিং</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.other_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.other_female"></td>
                    </tr>
                    <tr>
                        <td>এসটিটি থেকে বি.এড (৯ মাস)</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.stt_bed_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.stt_bed_female"></td>
                        <td colspan="3" rowspan="2">•প্রধান শিক্ষকগণ হ্যাঁ/না টিক দিবেন <br>
                            •অন্যান্য শিক্ষকগণের সংখ্যা লিখবেন
                        </td>

                    </tr>
                    <tr>
                        <td>সিপিডি-১ ট্রেনিং (১৪ দিন)</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cpd1_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.teacherInservTr.cpd1_female"></td>
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
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.total_eng_teachers"></td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.female_eng_teacher"></td>
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
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.hons_100_eng"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে ৩০০ নম্বরের ইংরেজি ছিল</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.hons_300_eng"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td style="width: 350px">ইংরেজিতে স্নাতক সম্মান</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.eng_hons"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td style="width: 350px">ইংরেজিতে স্নাতকোত্তর</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.eng_hons_mst"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে ইংরেজি ছিলা না</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.hons_without_eng"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td style="width: 350px">এইচ এস সি পাস</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.eng_hsc_pass"></td>
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
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.total_math_teachers"></td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.female_math_teacher"></td>
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
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.hons_pcm"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে অন্যান্য বিষয়সহ গণিত ছিল</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.hons_other_math"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td style="width: 350px">গণিতে স্নাতক সম্মান</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.math_hons"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td style="width: 350px">গণিতে স্নাতকোত্তর</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.math_hons_mst"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে গণিত ছিল না কিন্তু এইচএসসিতে ছিল</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.deg_hsc_with_math"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td style="width: 350px">স্নাতক বা এইচ এস সি পর্যায়ে ছিল না</td>
                            <td><input type="number" number-converter class="w-50" ng-model="data.teacherTrainInfo.hons_without_math"></td>
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
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.count_day_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.count_day_female" id=""></td>
                    </tr>
                    <tr>
                        <td>২</td>
                        <td style="width: 300px">অবসরে গিয়েছেন (১/৭/২০২০থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.retired_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.rerired_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৩</td>
                        <td style="width: 300px">অবসরে যাবেন (১/৭/২০২১ থেকে ৩০/৬/২০২২ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.retiredfu_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.reriredfu_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৪</td>
                        <td style="width: 300px">নতুন নিয়োগপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.new_recruite_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.new_recruite_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৫</td>
                        <td style="width: 300px">শিক্ষকতা পেশা ছেড়ে দিয়েছেন (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.leave_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.leave_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৬</td>
                        <td style="width: 300px">NTRCA কর্তৃক সুপারিশকৃত শিক্ষকের সংখ্যা</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.ntrc_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.ntrc_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৭</td>
                        <td style="width: 300px">বর্তমানে কতজন শিক্ষক গবেষণা কাজে সম্পৃক্ত</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.research_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.research_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৮</td>
                        <td style="width: 300px">একাডেমিক বিষয়ের ওপর পুরষ্কারপ্রাপ্ত শিক্ষকের সংখ্যা</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.awarded_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.awarded_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৯</td>
                        <td style="width: 300px">শিখন-শেখানো বিষয়ে প্রশিক্ষণপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)
                        </td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.learning_trained_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.learning_trained_female" id=""></td>
                    </tr>
                    <tr>
                        <td>১০</td>
                        <td style="width: 300px">বিশেষ চাহিদাসম্পন্ন (Special needs) শিক্ষার্থীর শিক্ষা বিষয়ে
                            প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা
                        </td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.special_trained_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.special_trained_female" id=""></td>
                    </tr>
                    <tr>
                        <td>১১</td>
                        <td style="width: 300px">একীভূত শিক্ষা (Inclusive education), শিশু অধিকার এবং বিদ্যালয়ের ইতিবাচক
                            শৃঙ্খলা বিষয়ের ওপর প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা
                        </td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.inclusive_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.inclusive_female" id=""></td>
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
                        <td><input type="radio" name="best_inst" ng-model="data.teacherRetAwInfo.best_inst_national"></td>
                        <td><input type="radio" name="best_inst" ng-model="data.teacherRetAwInfo.best_inst_division"></td>
                        <td><input type="radio" name="best_inst" ng-model="data.teacherRetAwInfo.best_inst_district"></td>
                        <td><input type="radio" name="best_inst" ng-model="data.teacherRetAwInfo.best_inst_thana"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_inst_year"></td>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষা প্রতিষ্ঠান প্রধান</td>
                        <td><input type="radio" name="best_inst_head" ng-model="data.teacherRetAwInfo.best_inst_head_national"></td>
                        <td><input type="radio" name="best_inst_head" ng-model="data.teacherRetAwInfo.best_inst_head_division"></td>
                        <td><input type="radio" name="best_inst_head" ng-model="data.teacherRetAwInfo.best_inst_head_district"></td>
                        <td><input type="radio" name="best_inst_head" ng-model="data.teacherRetAwInfo.best_inst_head_thana"></td>
                        <td><input type="number" number-converter  class="form-control" ng-model="data.teacherRetAwInfo.best_inst_head_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শ্রেণি শিক্ষক</td>
                        <td><input type="radio" name="best_cls_teacher_radio" ng-model="data.teacherRetAwInfo.best_class_tea_national"></td>
                        <td><input type="radio" name="best_cls_teacher_radio" ng-model="data.teacherRetAwInfo.best_class_tea_division"></td>
                        <td><input type="radio" name="best_cls_teacher_radio" ng-model="data.teacherRetAwInfo.best_class_tea_district"></td>
                        <td><input type="radio" name="best_cls_teacher_radio" ng-model="data.teacherRetAwInfo.best_class_tea_thana"></td>
                        <td><input type="number" number-converter  class="form-control" ng-model="data.teacherRetAwInfo.best_class_tea_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (বিএনসিসি)</td>
                        <td><input type="radio" name="best_teacher_bncc_radio" ng-model="data.teacherRetAwInfo.best_tea_bncc_national"></td>
                        <td><input type="radio" name="best_teacher_bncc_radio" ng-model="data.teacherRetAwInfo.best_tea_bncc_division"></td>
                        <td><input type="radio" name="best_teacher_bncc_radio" ng-model="data.teacherRetAwInfo.best_tea_bncc_district"></td>
                        <td><input type="radio" name="best_teacher_bncc_radio" ng-model="data.teacherRetAwInfo.best_tea_bncc_thana"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_tea_bncc_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (রোভার)</td>
                        <td><input type="radio" name="best_teacher_rover_radio" ng-model="data.teacherRetAwInfo.best_tea_scout_national"></td>
                        <td><input type="radio" name="best_teacher_rover_radio" ng-model="data.teacherRetAwInfo.best_tea_scout_division"></td>
                        <td><input type="radio" name="best_teacher_rover_radio" ng-model="data.teacherRetAwInfo.best_tea_scout_district"></td>
                        <td><input type="radio" name="best_teacher_rover_radio" ng-model="data.teacherRetAwInfo.best_tea_scout_thana"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_tea_scout_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (রেঞ্জার)</td>
                        <td><input type="radio" name="best_teacher_ranger_radio" ng-model="data.teacherRetAwInfo.best_tea_gguide_national"></td>
                        <td><input type="radio" name="best_teacher_ranger_radio" ng-model="data.teacherRetAwInfo.best_tea_gguide_division"></td>
                        <td><input type="radio" name="best_teacher_ranger_radio" ng-model="data.teacherRetAwInfo.best_tea_gguide_district"></td>
                        <td><input type="radio" name="best_teacher_ranger_radio" ng-model="data.teacherRetAwInfo.best_tea_gguide_thana"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_tea_gguide_year"></td>
                    <tr>
                    </tr>
                    <tr>
                        <td rowspan="4"> শিক্ষার্থীদের জন্য</td>
                        <td>শ্রেষ্ঠ শিক্ষার্থী</td>
                        <td><input type="radio" name="best_student_radio" ng-model="data.teacherRetAwInfo.best_std_national"></td>
                        <td><input type="radio" name="best_student_radio" ng-model="data.teacherRetAwInfo.best_std_division"></td>
                        <td><input type="radio" name="best_student_radio" ng-model="data.teacherRetAwInfo.best_std_district"></td>
                        <td><input type="radio" name="best_student_radio" ng-model="data.teacherRetAwInfo.best_std_thana"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_std_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (বিএনসিসি)</td>
                        <td><input type="radio" name="best_std_bncc_radio" ng-model="data.teacherRetAwInfo.best_std_bncc_national"></td>
                        <td><input type="radio" name="best_std_bncc_radio"  ng-model="data.teacherRetAwInfo.best_std_bncc_divisional"></td>
                        <td><input type="radio" name="best_std_bncc_radio"  ng-model="data.teacherRetAwInfo.best_std_bncc_district"></td>
                        <td><input type="radio" name="best_std_bncc_radio"  ng-model="data.teacherRetAwInfo.best_std_bncc_thana"></td>
                        <td><input type="number" number-converter  name="best_std_bncc_radio" class="form-control" ng-model="data.teacherRetAwInfo.best_std_bncc_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (রোভার)</td>
                        <td><input type="radio" name="best_std_rover_radio" ng-model="data.teacherRetAwInfo.best_std_scout_national"></td>
                        <td><input type="radio" name="best_std_rover_radio"  ng-model="data.teacherRetAwInfo.best_std_scout_division"></td>
                        <td><input type="radio" name="best_std_rover_radio" ng-model="data.teacherRetAwInfo.best_std_scout_district"></td>
                        <td><input type="radio" name="best_std_rover_radio" ng-model="data.teacherRetAwInfo.best_std_scout_thana"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_std_scout_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (রেঞ্জার)</td>
                        <td><input type="radio" name="best_std_ranger_radio" ng-model="data.teacherRetAwInfo.best_std_gguide_national"></td>
                        <td><input type="radio" name="best_std_ranger_radio"  ng-model="data.teacherRetAwInfo.best_std_gguide_division"></td>
                        <td><input type="radio" name="best_std_ranger_radio"  ng-model="data.teacherRetAwInfo.best_std_gguide_district"></td>
                        <td><input type="radio" name="best_std_ranger_radio"  ng-model="data.teacherRetAwInfo.best_std_gguide_thana"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_std_gguide_year"></td>
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
                        <td><input type="radio" name="lit_perticipant_radio" ng-model="data.teacherRetAwInfo.institute_cultureal_parti"></td>
                        <td><input type="radio" name="lit_perticipant_radio" ng-model="data.teacherRetAwInfo.upazila_cultureal_parti"></td>
                        <td><input type="radio" name="lit_perticipant_radio" ng-model="data.teacherRetAwInfo.district_cultureal_parti"></td>
                        <td><input type="radio" name="lit_perticipant_radio" ng-model="data.teacherRetAwInfo.division_cultureal_parti"></td>
                        <td><input type="radio" name="lit_perticipant_radio" ng-model="data.teacherRetAwInfo.national_cultureal_parti"></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="lit_award_radio" ng-model="data.teacherRetAwInfo.institute_cultureal_award"></td>
                        <td><input type="radio" name="lit_award_radio" ng-model="data.teacherRetAwInfo.upazila_cultureal_award"></td>
                        <td><input type="radio" name="lit_award_radio" ng-model="data.teacherRetAwInfo.district_cultureal_award"></td>
                        <td><input type="radio" name="lit_award_radio" ng-model="data.teacherRetAwInfo.division_cultureal_award"></td>
                        <td><input type="radio" name="lit_award_radio" ng-model="data.teacherRetAwInfo.national_cultureal_award"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">ক্রীড়া (আউটডোর)</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="radio" name="sport_perticipant_radio" ng-model="data.teacherRetAwInfo.institute_sports_parti"></td>
                        <td><input type="radio" name="sport_perticipant_radio" ng-model="data.teacherRetAwInfo.upazila_sports_parti"></td>
                        <td><input type="radio" name="sport_perticipant_radio" ng-model="data.teacherRetAwInfo.district_sports_parti"></td>
                        <td><input type="radio" name="sport_perticipant_radio" ng-model="data.teacherRetAwInfo.division_sports_parti"></td>
                        <td><input type="radio" name="sport_perticipant_radio" ng-model="data.teacherRetAwInfo.national_sports_parti"></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="sport_award_radio" ng-model="data.teacherRetAwInfo.institute_sports_award"></td>
                        <td><input type="radio" name="sport_award_radio" ng-model="data.teacherRetAwInfo.upazila_sports_award"></td>
                        <td><input type="radio" name="sport_award_radio" ng-model="data.teacherRetAwInfo.district_sports_award"></td>
                        <td><input type="radio" name="sport_award_radio" ng-model="data.teacherRetAwInfo.division_sports_award"></td>
                        <td><input type="radio" name="sport_award_radio" ng-model="data.teacherRetAwInfo.national_sports_award"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">ক্রীড়া (ইনডোর)</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="radio" name="sport_in_pert_radio" ng-model="data.teacherRetAwInfo.institute_indoor_parti"></td>
                        <td><input type="radio" name="sport_in_pert_radio" ng-model="data.teacherRetAwInfo.upazila_indoor_parti"></td>
                        <td><input type="radio" name="sport_in_pert_radio" ng-model="data.teacherRetAwInfo.district_indoor_parti"></td>
                        <td><input type="radio" name="sport_in_pert_radio" ng-model="data.teacherRetAwInfo.division_indoor_parti"></td>
                        <td><input type="radio" name="sport_in_pert_radio"  ng-model="data.teacherRetAwInfo.national_indoor_parti"></td>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="sport_in_award_radio" ng-model="data.teacherRetAwInfo.institute_indoor_award"></td>
                        <td><input type="radio" name="sport_in_award_radio" ng-model="data.teacherRetAwInfo.upazila_indoor_award"></td>
                        <td><input type="radio" name="sport_in_award_radio" ng-model="data.teacherRetAwInfo.district_indoor_award"></td>
                        <td><input type="radio" name="sport_in_award_radio" ng-model="data.teacherRetAwInfo.division_indoor_award"></td>
                        <td><input type="radio" name="sport_in_award_radio" ng-model="data.teacherRetAwInfo.national_indoor_award"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">সৃজনশীল মেধা অন্বেষণ</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="radio" name="creative_perticipant_radio"  ng-model="data.teacherRetAwInfo.institute_creative_parti"></td>
                        <td><input type="radio" name="creative_perticipant_radio"  ng-model="data.teacherRetAwInfo.upazila_creative_parti"></td>
                        <td><input type="radio" name="creative_perticipant_radio"  ng-model="data.teacherRetAwInfo.district_creative_parti"></td>
                        <td><input type="radio" name="creative_perticipant_radio"  ng-model="data.teacherRetAwInfo.division_creative_parti"></td>
                        <td><input type="radio" name="creative_perticipant_radio"  ng-model="data.teacherRetAwInfo.national_creative_parti"></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="creative_award_radio" ng-model="data.teacherRetAwInfo.institute_creative_award"></td>
                        <td><input type="radio" name="creative_award_radio" ng-model="data.teacherRetAwInfo.upazila_creative_award"></td>
                        <td><input type="radio" name="creative_award_radio" ng-model="data.teacherRetAwInfo.district_creative_award"></td>
                        <td><input type="radio" name="creative_award_radio" ng-model="data.teacherRetAwInfo.division_creative_award"></td>
                        <td><input type="radio" name="creative_award_radio" ng-model="data.teacherRetAwInfo.national_creative_award"></td>
                    </tr>
                    <tr>
                        <td>বিশেষ কৃতিত্বপূর্ণ অবদান</td>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="radio" name="special_award_radio" ng-model="data.teacherRetAwInfo.institute_special_award"></td>
                        <td><input type="radio" name="special_award_radio" ng-model="data.teacherRetAwInfo.upazila_special_award"></td>
                        <td><input type="radio" name="special_award_radio" ng-model="data.teacherRetAwInfo.district_special_award"></td>
                        <td><input type="radio" name="special_award_radio" ng-model="data.teacherRetAwInfo.division_special_award"></td>
                        <td><input type="radio" name="special_award_radio" ng-model="data.teacherRetAwInfo.national_special_award"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/collegeSecondPage.js') }}"></script>
@stop