@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="tecStdSixthPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
        <div class="input-group contentdeader">
            <div class="input-group-prepend">
                <span class="input-group-text bg-number">২.৪</span>
            </div>
            <div class="form-control bg-number-label"> স্নাতক, স্নাতক (সম্মান) ও তদুর্ধ্ব কোর্সে শিক্ষার্থী ও পরীক্ষায় উত্তীর্ণ সংক্রান্ত তথ্য ২০২০
            </div>
        </div>
            <div class="contentBoxBody px-0" style="font-size: x-small">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <td rowspan="3">বিবরণ</td>
                        <td colspan="16">বর্ষ/স্তর</td>
                    </tr>
                    <tr>
                        <th colspan="2">১ম বর্ষ</th>
                        <th  colspan="2">২য় বর্ষ</th>
                        <th colspan="2">৩য় বর্ষ</th>
                        <th colspan="2">৪র্থ বর্ষ</th>
                        <th colspan="2">৫ম বর্ষ</th>
                        <th colspan="2">স্নাতক, স্নাতক (সম্মান)</th>
                        <th colspan="2">ডিপ্লোমা</th>
                        <th colspan="2">স্নাতকোত্তর</th>
                    </tr>
                    <tr>
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
                        <td ng-bind=""></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentytwo_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentytwo_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentythree_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentythree_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentyfour_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentyfour_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentyfive_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twentyfive_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"/> </td>
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
                <div class="form-control bg-number-label">সার্টিফিকেট কোর্স এর শিক্ষার্থী ও পরীক্ষায় উত্তীর্ণ সংক্রান্ত তথ্য ২০২০ </div>
            </div>
            <div class="col-md-6 contentBoxBody">
                <table class="table table-bordered table-striped mt-4 text-center">
                    <thead>
                    <tr>
                        <th rowspan="2">বিবরণ</th>
                        <th colspan="2">সার্টিফিকেট কোর্স (১ বছরের কম মেয়াদী)</th>
                        <th colspan="2">সার্টিফিকেট কোর্স (১ বছর মেয়াদী)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tr>
                        <td>শিক্ষার্থী সংখ্যা</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_15_24_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                    </tr>
                    <tr>
                        <td>উত্তীর্ণ</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_15_24_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                    </tr>
                    <tr>
                        <td>অনু্ত্তীর্ণ</td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_15_24_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="data.enterprenerData.en_25_plus_tot"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
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
                <label class="label-number font-weight-bold" >২.৬.১ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক শিক্ষার্থীর তথ্য নিম্নের ছক
                    মোতাবেক প্রদান করুন</label>
                <table class="table table-bordered text-center">
                    <tr>
                        <td rowspan="2">ভর্তির বছর</td>
                        <td  colspan="2">বিএড প্রোগ্রাম</td>
                        <td  colspan="2">এমএড প্রোগ্রাম</td>
                        <td colspan="2">অন্যান্য প্রোগ্রাম</td>
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
                    <tr ng-repeat="item in data.openUnStd">
                        <td>@{{ item.admit_year }}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_pass_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <label class="label-number font-weight-bold">২.৬.২ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক ফলাফল নিম্নের ছক মোতাবেক
                    প্রদান করুন</label>
                <table class="table table-bordered" style="text-align:center">
                    <tr>
                        <td rowspan="2" colspan="2">বছর</td>
                        <td  colspan="2">বিএড প্রোগ্রাম</td>
                        <td  colspan="2">এমএড প্রোগ্রাম</td>
                        <td colspan="2">অন্যান্য প্রোগ্রাম</td>
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_fem_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_fem_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_p_fem_std"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.honours_p_fem_pass"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')

        {{--<script src="{{ asset('js/tecStdSixthPage.js') }}" type="module" defer></script>--}}
@stop
