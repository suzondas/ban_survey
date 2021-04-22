@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="sncSecondPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>


        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৭</span>
                </div>
                <div class="form-control bg-number-label">এসএসসি ভোকেশনাল এর শ্রেণিভিত্তিক শিক্ষার্থী তথ্য ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">শ্রেণি</td>
                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2">ট্রান্সফার ইন</td>
                        <td rowspan="2">ট্রান্সফার আউট</td>
                        <td rowspan="2">২০২২ এর পাঠ্যপুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</td>
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

                    </tr>
                    <tbody>
                    <tr  ng-repeat="item in data.sscVocStudent">
                        <td ng-bind="sscVocName(item.class_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_student"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.male_stipend"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_stipend"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.male_scholarship"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_scholarship"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.total_present"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_present"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.total_rep"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_rep"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.transfer_in"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.transfer_out"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.nextyr_book_reg"></td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৮</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি ভোকেশনাল এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">শ্রেণি</td>
                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2">ট্রান্সফার ইন</td>
                        <td rowspan="2">ট্রান্সফার আউট</td>

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

                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.hscVocStudent">
                        <td ng-bind="hscVocName(item.class_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_student"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_student"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.male_stipend"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_stipend"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.male_scholarship"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_scholarship"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.total_present"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_present"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.total_rep"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_rep"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.transfer_in"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.transfer_out"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.nextyr_book_reg"></td>
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
                <div class="form-control bg-number-label">এইচএসসি বিএম এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">শ্রেণি</td>
                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2">ট্রান্সফার ইন</td>
                        <td rowspan="2">ট্রান্সফার আউট</td>

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

                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.hscBmStudent">
                        <td ng-bind="hscBmName(item.class_id)"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.total_student"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_student"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.male_stipend"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_stipend"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.male_scholarship"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_scholarship"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.total_present"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_present"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.total_rep"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.female_rep"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.transfer_in"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.transfer_out"></td>
                        <td><input type="number" number-converter class="w-50"ng-model="item.nextyr_book_reg"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.১০</span>
                </div>
                <div class="form-control bg-number-label">মাধ্যমিক স্তরে বিভিন্ন ক্যাটাগরিভিত্তিক শিক্ষার্থীর তথ্য
                    ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped ">

                    <tr>
                        <td rowspan="2" class="text-center">ক্র. নং</td>
                        <td rowspan="2" class="text-center">ক্যাটাগরি (শিক্ষার্থী)</td>
                        <td colspan="2" class="text-center"> ৬ষ্ঠ শ্রেণি</td>
                        <td colspan="2" class="text-center">৭ম শ্রেণি</td>
                        <td colspan="2" class="text-center">৮ম শ্রেণি</td>
                        <td colspan="2" class="text-center">৯ম শ্রেণি</td>
                        <td colspan="2" class="text-center">১০ম শ্রেণি</td>
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

                    </tr>
                    </tdead>
                    <tbody>
                    <tr ng-repeat="item in data.categoryWiseStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catStdName(item.category_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.six_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.seven_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.eight_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.nine_female"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_total"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ten_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/sncSecondPage.js') }}" type="module" defer></script>
@stop
