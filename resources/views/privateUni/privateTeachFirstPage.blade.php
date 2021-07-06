@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="privateTeachFirstPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ৪ (ক): শিক্ষক সংক্রান্ত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৪.১</span>
                </div>
                <div class="form-control bg-number-label">শিক্ষক সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৪.১.১ বিভাগ/বিষয়, পদবি ও লিঙ্গভিত্তিক কর্মরত ও খণ্ডকালীন শিক্ষক সংখ্যা </label>
                <table class="table  table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="3">বিষয় কোড<br>(ব্যানবেইস <br>  পূরণ করবে)</td>
                        <td rowspan="3">বিভাগ/বিষয় এর নাম</td>
                        <td colspan="3" rowspan="2">অধ্যাপক <br>কর্মরত</td>
                        <td colspan="3" rowspan="2">সহযোগী<br> অধ্যাপক কর্মরত</td>
                        <td colspan="3" rowspan="2">সহকারী <br>অধ্যাপক কর্মরত</td>
                        <td colspan="3" rowspan="2">প্রভাষক <br>কর্মরত</td>
                        <td colspan="4">উচ্চতর ডিগ্রিধারী <br>শিক্ষকের সংখ্যা</td>
                        <td colspan="2" rowspan="2">বিদেশি শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td colspan="2">এম ফিল</td>
                        <td colspan="2">পিএইচডি</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>খণ্ডকালীন</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>খণ্ডকালীন</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>খণ্ডকালীন</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>খণ্ডকালীন</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tr>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৪.২</span>
                </div>
                <div class="form-control bg-number-label"> বিদেশী শিক্ষার্থীর সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৪.২.১ গবেষণা কাজে নিয়োজিত শিক্ষক সংক্রান্ত তথ্য বিভাগ ও ইনস্টিটিউটের বিষয়,
                    পদবি ও লিঙ্গভিত্তিক গবেষণা কাজে নিয়োজিত শিক্ষক সংক্রান্ত তথ্য </label>
                <table class="table  table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">অনুষদ এর নাম</td>
                        <td rowspan="2">বিভাগ এর নাম</td>
                        <td rowspan="2">পদবি</td>
                        <td colspan="3">পূর্ণকালীন গবেষক</td>
                        <td colspan="3">খণ্ডকালীন গবেষক</td>
                        <td colspan="2">বিদেশি শিক্ষক</td>
                        <td colspan="2">সর্বমোট</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td style="width: 150px;">অর্থায়ন সংক্রান্ত তথ্য:
                            শিক্ষা মন্ত্রণালয়-১,
                            অন্যান্য মন্ত্রণালয়-২,
                            অন্যান্য সরকারি সংস্থা-৩,
                            বিদেশি সংস্থা-৪,
                            অন্যান্য-৫
                            (নাম উল্লেখ করুন)</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td style="width: 150px;">অর্থায়ন সংক্রান্ত তথ্য:
                            শিক্ষা মন্ত্রণালয়-১,
                            অন্যান্য মন্ত্রণালয়-২,
                            অন্যান্য সরকারি সংস্থা-৩,
                            বিদেশি সংস্থা-৪,
                            অন্যান্য-৫
                            (নাম উল্লেখ করুন)</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tr>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td>অধ্যাপক</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td>সহযোগী অধ্যাপক</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td>সহকারী অধ্যাপক</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td>প্রভাষক</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td>অন্যান্য গবেষক</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-75"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                </table>
            </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    {{--<script src="{{ asset('js/schoolFirstPage.js') }}" type="module" defer></script>--}}
@stop
