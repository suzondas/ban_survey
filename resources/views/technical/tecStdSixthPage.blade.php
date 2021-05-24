@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="madStdFourthPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১৮</span>
                </div>
                <div class="form-control bg-number-label">বয়সভিত্তিক শিক্ষার্থীর সংখ্যা (০১/০১/২০২১
                    তারিখে বয়স)
                </div>
            </div>
            <div class="contentBoxBody px-0" style="font-size: x-small">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <td>শ্রেণি</td>
                        <td colspan="2">১৪ বছর</td>
                        <td colspan="2">১৫ বছর</td>
                        <td colspan="2">১৬ বছর</td>
                        <td colspan="2">১৭ বছর</td>
                        <td colspan="2">১৮ বছর</td>
                        <td colspan="2">১৯ বছর</td>
                        <td colspan="2">২০ বছর</td>
                        <td colspan="2">২১ বছর</td>
                        <td colspan="2">২২ বছর</td>
                        <td colspan="2">২৩ বছর</td>
                        <td colspan="2">২৪ বছর</td>
                        <td colspan="2">২৫ বছর</td>
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
                        <td ng-bind="findClassName(item.class_id)"></td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
                        <td><input type="number" number-converter class="w-25 form-control" ng-model="item.ten_total"/> </td>
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
                <div class="form-control bg-number-label"> Entrepreneurship বিষয়ে শিক্ষা প্রদান সংক্রান্ত তথ্য (বয়সভিত্তিক) ২০২১ </div>
            </div>
            <div class="col-md-6 contentBoxBody">
                <table class="table table-bordered table-striped mt-4 text-center">
                    <thead>
                    <tr>
                        <th colspan="2">Entrepreneurship বিষয়ে শিক্ষা</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Youth(15-24 years)</td>
                        <td>Adult(25+)</td>
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
                    <span class="input-group-text bg-number">২.১৭ </span>
                </div>
                <div class="form-control bg-number-label">উন্মুক্ত বিশ্ববিদ্যালয়ের শিক্ষা প্রোগ্রাম </div>
            </div>
            <div class="col-md-2">
                <label class="label-number font-weight-bold" >২.১৭.১ আপনার প্রতিষ্ঠানে উন্মুক্ত বিশ্ববিদ্যালয়ের শিক্ষা প্রোগ্রাম
                    পরিচালিত হয় কি?</label>
                <select class="custom-select" name="" style="width: 75px" ng-model="data.instOtherInfo.open_unvi_course_yn">
                    <option value="" selected>Select</option>
                    <option value="1">হ্যাঁ-১</option>
                    <option value="2">না-২</option>
                    >
                </select>
            </div>
            <div class="col-md-10">
                <label class="label-number font-weight-bold" >২.১৭.২ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক শিক্ষার্থীর তথ্য নিম্নের ছক
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
                <label class="label-number font-weight-bold">২.১৭.৩ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক ফলাফল নিম্নের ছক মোতাবেক
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
    {{--
        <script src="{{ asset('js/madStdFourthPage.js') }}" type="module" defer></script>
    --}}
@stop
