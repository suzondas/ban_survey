@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="privateStdFirstPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ৩ (ক): শিক্ষার্থী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১</span>
                </div>
                <div class="form-control bg-number-label">বিষয়ভিত্তিক শিক্ষার্থী সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৩.১.১ বিষয়, সেমিস্টার ও লিঙ্গভিত্তিক শিক্ষার্থীর সংখ্যা </label>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">ক্র</td>
                        <td rowspan="2">বিষয়</td>
                        <td rowspan="2">লিঙ্গ</td>
                        <td rowspan="2">স্নাতক পাশ</td>
                        <td rowspan="2">১ম বর্ষে ভর্তির <br> আসন সংখ্যা ২০২০</td>
                        <td colspan="12">স্নাতক (সম্মান)</td>
                    </tr>
                    <tr>
                        <td>১ম</td>
                        <td>২য়</td>
                        <td>৩য়</td>
                        <td>৪র্থ</td>
                        <td>৫ম</td>
                        <td>৬ষ্ঠ</td>
                        <td>৭ম</td>
                        <td>৮ম</td>
                        <td>৯ম</td>
                        <td>১০ম</td>
                        <td>১১শ</td>
                        <td>১২শ</td>
                    </tr>
                    <tr>
                        <td rowspan="2">১</td>
                        <td rowspan="2" class="text-left">computer sciecne and engineering</td>
                        <td>মোট</td>
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
                    <tr>
                        <td>ছাত্রী</td>
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
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">ক্র</td>
                        <td rowspan="2">বিষয়</td>
                        <td rowspan="2">লিঙ্গ</td>
                        <td rowspan="2">স্নাতক পাশ</td>
                        <td rowspan="2">১ম বর্ষে ভর্তির <br> আসন সংখ্যা ২০২০</td>
                        <td colspan="6">মাস্টার্স</td>
                    </tr>
                    <tr>
                        <td>১ম</td>
                        <td>২য়</td>
                        <td>৩য়</td>
                        <td>৪র্থ</td>
                        <td>৫ম</td>
                        <td>৬ষ্ঠ</td>
                    </tr>
                    <tr>
                        <td rowspan="2">১</td>
                        <td rowspan="2" class="text-left">computer science and engineering</td>
                        <td>মোট</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>ছাত্রী</td>
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
                    <span class="input-group-text bg-number">৩.২</span>
                </div>
                <div class="form-control bg-number-label"> বিদেশী শিক্ষার্থীর সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৩.২.১ বিভাগ, বর্ষ ও লিঙ্গভিত্তিক বিদেশী শিক্ষার্থীর সংখ্যা</label>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">দেশের নাম</td>
                        <td rowspan="2">বিশ্ববিদ্যালয় প্রদত্ত বৃত্তি/নিজ দেশের বৃত্তি/আন্তর্জাতিক সংস্থা/অন্যান্য</td>
                        <td rowspan="2">লিঙ্গ</td>
                        <td rowspan="2">স্নাতক পাশ</td>
                        <td rowspan="2">১ম বর্ষে ভর্তির <br> আসন সংখ্যা ২০২০</td>
                        <td colspan="12">স্নাতক (সম্মান)</td>
                    </tr>
                    <tr>
                        <td>১ম</td>
                        <td>২য়</td>
                        <td>৩য়</td>
                        <td>৪র্থ</td>
                        <td>৫ম</td>
                        <td>৬ষ্ঠ</td>
                        <td>৭ম</td>
                        <td>৮ম</td>
                        <td>৯ম</td>
                        <td>১০ম</td>
                        <td>১১শ</td>
                        <td>১২শ</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td>মোট</td>
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
                    <tr>
                        <td>ছাত্রী</td>
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
                    <tr>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td>মোট</td>
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
                    <tr>
                        <td>ছাত্রী</td>
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
                    <tr>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td>মোট</td>
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
                    <tr>
                        <td>ছাত্রী</td>
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
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">দেশের নাম</td>
                        <td rowspan="2">বিশ্ববিদ্যালয় প্রদত্ত বৃত্তি/নিজ দেশের বৃত্তি/আন্তর্জাতিক সংস্থা/অন্যান্য</td>
                        <td rowspan="2">লিঙ্গ</td>
                        <td rowspan="2">স্নাতক পাশ</td>
                        <td rowspan="2">১ম বর্ষে ভর্তির <br> আসন সংখ্যা ২০২০</td>
                        <td colspan="6">স্নাতকোত্তর</td>
                        <td rowspan="2">এমএসসি</td>
                        <td rowspan="2">এমফিল</td>
                        <td rowspan="2">পিএইচডি </td>
                        <td rowspan="2">শিক্ষার্থীর সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>১ম</td>
                        <td>২য়</td>
                        <td>৩য়</td>
                        <td>৪র্থ</td>
                        <td>৫ম</td>
                        <td>৬ষ্ঠ</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td>মোট</td>
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
                    <tr>
                        <td>ছাত্রী</td>
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
                    <tr>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td>মোট</td>
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
                    <tr>
                        <td>ছাত্রী</td>
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
                    <tr>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td rowspan="2"><input type="text" class="w-100"></td>
                        <td>মোট</td>
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
                    <tr>
                        <td>ছাত্রী</td>
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
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    {{--<script src="{{ asset('js/schoolFirstPage.js') }}" type="module" defer></script>--}}
@stop
