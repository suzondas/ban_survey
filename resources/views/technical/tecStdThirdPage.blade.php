@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="madStdThirdPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৯</span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন কমার্স এর স্পেশালাইজেশন ভিত্তিক শিক্ষার্থীর তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="4">শ্রেণী</td>
                        <td colspan="2" rowspan="2">মোট</td>
                    </tr>
                    <tr>
                        <td colspan="2">১১শ</td>
                        <td colspan="2">১২শ</td>
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
                    <tr>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৯</span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন ইঞ্জিনিয়ারিং, হেলথ টেকনোলজি, টেক্সটাইল ইঞ্জিনিয়ারিং, এগ্রিকালচার, ফিসারিজ ও সমমান এর টেকনোলজি ভিত্তিক শিক্ষার্থীর তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="16">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2" rowspan="2">মোট</td>
                    </tr>
                    <tr>
                        <td colspan="2">১ম পর্ব</td>
                        <td colspan="2">২য় পর্ব</td>
                        <td colspan="2">৩য় পর্ব</td>
                        <td colspan="2">৪র্থ পর্ব</td>
                        <td colspan="2">৫ম পর্ব</td>
                        <td colspan="2">৬ষ্ঠ পর্ব</td>
                        <td colspan="2">৭ম পর্ব</td>
                        <td colspan="2">৮ম পর্ব</td>
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
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                        <td><input type="number" number-converter class="w-25 form-control"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.১৩</span>
                </div>
                <div class="form-control bg-number-label">সার্টিফিকেট কোর্স(৬ মাস/১ বছর/২ বছর মেয়াদী)ট্রেডভিত্তিক শিক্ষার্থীর তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="6">কোর্সের মেয়াদ</td>
                        <td colspan="2" rowspan="2">মোট</td>
                    </tr>
                    <tr>
                        <td colspan="2">৬ মাস</td>
                        <td colspan="2">১ বছর</td>
                        <td colspan="2">২ বছর</td>
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
                    <tr>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.১৪</span>
                </div>
                <div class="form-control bg-number-label">জাতীয় দক্ষতামান(১ বছর মেয়াদী) ট্রেডভিত্তিক শিক্ষার্থীর তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="2">কোর্সের মেয়াদ</td>
                    </tr>
                    <tr>
                        <td colspan="2">১ বছর মেয়াদী</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                        <td><input type="number" number-converter class="w-50"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.১৫</span>
                </div>
                <div class="form-control bg-number-label">বেসিক ট্রেডকোর্সে ট্রেডভিত্তিক শিক্ষার্থীর তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td rowspan="3">আসন সংখ্যা</td>
                        <td colspan="6">কোর্সের মেয়াদ</td>
                        <td colspan="2" rowspan="2">মোট</td>
                    </tr>
                    <tr>
                        <td colspan="2">৩ মাস(৩৬০ ঘন্টা)</td>
                        <td colspan="2">৬ মাস(৩৬০ ঘন্টা)</td>
                        <td colspan="2">১ বছর</td>
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
                    <tr>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
                        <td><input type="number" number-converter class="w-50 form-control"></td>
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
    <script src="{{ asset('js/madStdThirdPage.js') }}" type="module" defer></script>
--}}
@stop
