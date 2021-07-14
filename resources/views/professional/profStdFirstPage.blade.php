@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="tecStdSecondPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১</span>
                </div>
                <div class="form-control bg-number-label">স্নাতক, স্নাতক (সম্মান) ও তদুর্ধ্ব কোর্সে অধ্যয়নরত শিক্ষার্থী (প্রযোজ্য ক্ষেত্রে তথ্য দিন):</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3"> কোড</td>
                        <td rowspan="3" style="width: 300px">বিষয়/বিভাগ</td>
                        <td colspan="10">ডিপ্লোমা/স্নাতক/স্নাতক সম্মান শিক্ষার্থী</td>
                        <td rowspan="2" colspan="2">স্নাতকোত্তর/ডিপ্লোমা শিক্ষার্থী</td>
                        <td rowspan="2" colspan="2">মোট রিপিটার শিক্ষার্থী</td>
                    </tr>
                    <tr>
                        <td colspan="2">১ম বর্ষ</td>
                        <td colspan="2">২য় বর্ষ</td>
                        <td colspan="2">৩য় বর্ষ</td>
                        <td colspan="2">৪র্থ বর্ষ</td>
                        <td colspan="2">৫ম বর্ষ</td>
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
                    <tr ng-repeat="item in data.hscVocStdData" ng-if="data.hscVocStdData.length!=0">
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
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.girls_pass"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২</span>
                </div>
                <div class="form-control bg-number-label">সার্টিফিকেট কোর্সে অধ্যয়নরত শিক্ষার্থীর তথ্য-২০২০ </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">বিষয় কোড</td>
                        <td rowspan="3" style="width: 300px">ধরণ</td>
                        <td colspan="4">শিক্ষার্থী</td>
                    </tr>
                    <tr>
                        <td colspan="2">সার্টিফিকেট কোর্স ( ১ বছরের কম মেয়াদী)</td>
                        <td colspan="2">সার্টিফিকেট কোর্স ( ১ বছর মেয়াদী)</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.hscVocStdData" ng-if="data.hscVocStdData.length!=0">
                        <td>@{{ item.trade_code }}</td>
                        <td>@{{ item.trade_name }}</td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.twelve_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <div align="center">
            <button ng-click="submitData()" type="button" class="btn btn-success">Submit</button>
        </div>
    </div>
@endsection
@section('javascript')
       {{-- <script src="{{ asset('js/tecStdSecondPage.js') }}" type="module" defer></script>--}}
@stop
