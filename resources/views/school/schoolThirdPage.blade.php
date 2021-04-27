@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="schoolThirdPage" ng-controller="myCtrl">
        <h3 align="center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১১</span>
                </div>
                <div class="form-control bg-number-label">প্রাইমারি স্তরে বয়সভিত্তিক শিক্ষার্থীর সংখ্যা (০১/০১/২০২১ তারিখের বয়স)
                </div>
            </div>
            <div class="contentBoxBody ">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>শ্রেণি</th>
                        <th colspan="2">৫ বছর</th>
                        <th colspan="2">৬ বছর</th>
                        <th colspan="2">৭ বছর</th>
                        <th colspan="2">৮ বছর</th>
                        <th colspan="2">৯ বছর</th>
                        <th colspan="2">৯ বছরের উপরে</th>
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
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="item in data.ageWisePrimaryStudentData">
                        <td ng-bind="findPrimClassName(item.class_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.five_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.five_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_female"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.upper_nine_total"/> </td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.upper_nine_female"/> </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১২</span>
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
                    <tr ng-repeat="item in data.ageWiseStudent">
                        <td ng-bind="findClassName(item.class_id)"></td>
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
        <br>
        <div class="contentBox col-8">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১৩</span>
                </div>
                <div class="form-control bg-number-label">অভিভাবকের পেশা অনুযায়ী শিক্ষার্থী সংখ্যা
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
        <br>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১৪</span>
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
                    </tr>
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/schoolThirdPage.js') }}"></script>
@stop