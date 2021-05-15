@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="madStdSixthPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৫.১</span>
                </div>
                <div class="form-control bg-number-label">এসএসসি (ভোকেশনাল) এর ট্রেডভিত্তিক পরীক্ষার্থী ও পাসের সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td colspan="4">ফলাফল</td>
                    </tr>
                    <tr>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                    </tr>
                    <tr>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৫.২</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি (ভোকেশনাল) এর ট্রেডভিত্তিক পরীক্ষার্থী ও পাসের সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td colspan="4">ফলাফল</td>
                    </tr>
                    <tr>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                    </tr>
                    <tr>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৫.৩</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি (বিএম) এর ট্রেডভিত্তিক পরীক্ষার্থী ও পাসের সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">ট্রেড কোড</td>
                        <td rowspan="3">ট্রেডের নাম</td>
                        <td colspan="4">ফলাফল</td>
                    </tr>
                    <tr>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                    </tr>
                    <tr>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৫.৪</span>
                </div>
                <div class="form-control bg-number-label"> ডিপ্লোমা ইন ইঞ্জিনিয়ারিং, হেলথ টেকনোলজি/মেডিকেল ইন্সটিটিউট, টেক্সটাইল ইঞ্জিনিয়ারিং, এগ্রিকালচার, ফিসারিজ ও কমার্স এর টেকনোলজি/ট্রেডভিত্তিক পরীক্ষার্থী ও পাসের সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3">কারিকুলাম আইডি</td>
                        <td rowspan="3">টেকনোলজি/ট্রেড কোড</td>
                        <td rowspan="3">টেকনোলজি/ট্রেডের নাম</td>
                        <td colspan="4">ফলাফল</td>
                    </tr>
                    <tr>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                    </tr>
                    <tr>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৫.৫</span>
                </div>
                <div class="form-control bg-number-label">সার্টিফিকেট কোর্সে ট্রেডভিত্তিক পরীক্ষার্থী ও পাসের সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="4">কারিকুলাম আইডি</td>
                        <td rowspan="4">ট্রেড কোড</td>
                        <td rowspan="4">ট্রেডের নাম</td>
                        <td colspan="12">কোর্সের মেয়াদ</td>
                    </tr>
                    <tr>
                        <td colspan="4">৩ মাস/৬ মাস</td>
                        <td colspan="4">১ বছর</td>
                        <td colspan="4">২ বছর</td>
                    </tr>
                    <tr>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
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
                    <span class="input-group-text bg-number">৫.৬</span>
                </div>
                <div class="form-control bg-number-label">জাতীয় দক্ষতামান কোর্সে ট্রেডভিত্তিক পরীক্ষার্থী ও পাসের সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="4">কারিকুলাম আইডি</td>
                        <td rowspan="4">ট্রেড কোড</td>
                        <td rowspan="4">ট্রেডের নাম</td>
                        <td colspan="4">কোর্সের মেয়াদ</td>
                    </tr>
                    <tr>

                        <td colspan="4">১ বছর</td>

                    </tr>
                    <tr>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                    </tr>
                    <tr>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৫.৭</span>
                </div>
                <div class="form-control bg-number-label">বেসিক কোর্সে ট্রেডভিত্তিক পরীক্ষার্থী ও পাসের সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="4">কারিকুলাম আইডি</td>
                        <td rowspan="4">ট্রেড কোড</td>
                        <td rowspan="4">ট্রেডের নাম</td>
                        <td colspan="8">কোর্সের মেয়াদ</td>
                    </tr>
                    <tr>
                        <td colspan="4">৩ মাস/৬ মাস</td>
                        <td colspan="4">১ বছর</td>
                    </tr>
                    <tr>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
                        <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">পাশের সংখ্যা</td>
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
                        <td><input type="number" number-converter class="w-50"></td>
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
    <script src="{{ asset('js/madStdSixthPage.js') }}" type="module" defer></script>
--}}
@stop
