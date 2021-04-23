@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="collegeFourthPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
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
                        <td><input type="number" number-converter class="w-50"  ng-init="idx = findIndexEx(i.exam_id,i.subject)" ng-model="boardWiseExamResults[idx].registered_total"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].registerd_female"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].total_candidate"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].female_candidate"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].a_plus_total"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].a_total"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].a_minus_total"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].b_total"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].c_total"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].d_total"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].a_plus_girls"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].a_girls"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].a_minus_girls"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].b_girls"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].c_girls"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].d_girls"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].total_pass"/></td>
                        <td><input type="number" number-converter class="w-50"  ng-model="boardWiseExamResults[idx].girls_pass"/></td>
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
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/collegeFourthPage.js') }}"></script>
@stop