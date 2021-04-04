@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="collegeFirstPage" ng-controller="myCtrl">
        <h3 align="center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox col-8 ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১</span>
                </div>
                <div class="form-control bg-number-label">স্তরভিত্তিক শিক্ষার্থী সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td colspan="2">১১শ-১২শ</td>
                        <td colspan="2">স্নাতক (পাস)</td>
                        <td colspan="2">স্নাতক (সম্মান)</td>
                        <td colspan="2">স্নাতকোত্তর</td>
                    </tr>
                    <tbody>
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
                    <tr>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryTotal.eleven_twelve_total">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryTotal.eleven_twelve_girl">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryTotal.bachelor_pass_total">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryTotal.bachelor_pass_girl">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryTotal.bachelor_honors_total">
                        </td>
                        <td><input type="text" class="form-control"
                                        ng-model="data.studentSummaryTotal.bachelor_honors_girl">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryTotal.masters_total">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryTotal.masters_girl">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.১</span>
                </div>
                <div class="form-control bg-number-label">শ্রেণি, বিভাগভিত্তিক শিক্ষার্থী, ট্রান্সফার ইন, ট্রান্সফার
                    আউট, পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২০
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        {{--<td rowspan="2">স্তর</td>--}}
                        <td rowspan="2">শ্রেণি</td>
                        <td rowspan="2" style="width:120px">বিভাগ</td>
                        <td rowspan="2">আসন সংখ্যা</td>
                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">ইংরেজি ভার্সনে অধ্যয়নরত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                        <td rowspan="2">ট্রান্সফার ইন</td>
                        <td rowspan="2">ট্রান্সফার আউট</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>ছাত্র</td>
                        <td>ছাত্রী</td>
                        <td>ছাত্র</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    </thead>
                    <tbody ng-repeat="item in data.classes">
                    <td rowspan="@{{item.groups.length+1}}">@{{item.class_name_bangla}}</td>
                    <tr ng-repeat="i in item.groups">
                        <td>@{{i.group_name_bn}}</td>
                        <td><input class="w-50" type="text" ng-init="idx = findIndex(i.group_id,item.class_id)" ng-model="stuentsSummery[idx].seat"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].total_student"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].female_student"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].male_stipend"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].female_stipend"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].male_scholarship"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].female_scholarship"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].total_eng"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].female_eng"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].total_present"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].female_present"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].transfer_in"/></td>
                        <td><input class="w-50" type="text" ng-model="stuentsSummery[idx].transfer_out"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.২</span>
                </div>
                <div class="form-control bg-number-label">রিপিটার ও ড্রপআউট</div>
            </div>
            <div class="col-md-6 contentBoxBody">
                <label class="label-text" for="">২.১.২ রিপিটার সংক্রান্ত: ২০২০ সালের শিক্ষার্থী ২০২১ সালে একই
                    শ্রেণিতে অধ্যয়নরত আছে এইরুপ শিক্ষার্থীর সংখ্যা (রিপিটার)</label>
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th colspan="2">১১শ শ্রেণি</th>
                        <th colspan="2">১২শ শ্রেণি</th>
                        <th colspan="2">স্নাতক (পাশ)</th>
                        <th colspan="2">স্নাতক (সম্মান)</th>
                        <th colspan="2">স্নাতকোত্তর</th>
                    </tr>
                    </thead>
                    <tbody>
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
                    <tr>
                        <td><input type="text" class="form-control" ng-model="data.studentSummaryRepeater.eleven_total">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryRepeater.eleven_female"></td>
                        <td><input type="text" class="form-control" ng-model="data.studentSummaryRepeater.twelve_total">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryRepeater.twelve_female"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryRepeater.masters_total"></td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryRepeater.masters_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 contentBoxBody">
                <label class="label-text" for="">২.১.৩ ২০২০ সালের ঝরেপড়া শিক্ষার্থীর সংখ্যা (ড্রপআউট)</label>
                <table class="table table-bordered table-striped mt-4 text-center">
                    <thead>
                    <tr>
                        <th colspan="2">১১শ শ্রেণি</th>
                        <th colspan="2">১২শ শ্রেণি</th>
                        <th colspan="2">স্নাতক (পাশ)</th>
                        <th colspan="2">স্নাতক (সম্মান)</th>
                        <th colspan="2">স্নাতকোত্তর</th>

                    </tr>
                    </thead>
                    <tbody>
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
                    <tr>
                        <td><input type="text" class="form-control" ng-model="data.studentSummaryDropout.eleven_total">
                        </td>
                        <td><input type="text" class="form-control" ng-model="data.studentSummaryDropout.eleven_female">
                        </td>
                        <td><input type="text" class="form-control" ng-model="data.studentSummaryDropout.twelve_total">
                        </td>
                        <td><input type="text" class="form-control" ng-model="data.studentSummaryDropout.twelve_female">
                        </td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control" ng-model="data.studentSummaryDropout.masters_total">
                        </td>
                        <td><input type="text" class="form-control"
                                   ng-model="data.studentSummaryDropout.masters_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৪</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি ভোকেশনাল এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tbody>
                    <tr>
                        <td rowspan="2" style="width:100px">শ্রেণি</td>
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
                    <tr ng-repeat="item in data.hscVocStudent">
                        <td ng-bind="hscVocName(item.class_id)"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_student"></td>
                        <td><input type="number" class="w-50" ng-model="item.female_student"></td>
                        <td><input type="number" class="w-50"ng-model="item.male_stipend"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_stipend"></td>
                        <td><input type="number" class="w-50"ng-model="item.male_scholarship"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_scholarship"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_present"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_present"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_rep"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_rep"></td>
                        <td><input type="number" class="w-50"ng-model="item.transfer_in"></td>
                        <td><input type="number" class="w-50"ng-model="item.transfer_out"></td>
                        <td><input type="number" class="w-50"ng-model="item.nextyr_book_reg"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৫</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি বিএম এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tbody>
                    <tr>
                        <td rowspan="2" style="width:100px">শ্রেণি</td>
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
                    <tr ng-repeat="item in data.hscBmStudent">
                        <td ng-bind="hscBmName(item.class_id)"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_student"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_student"></td>
                        <td><input type="number" class="w-50"ng-model="item.male_stipend"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_stipend"></td>
                        <td><input type="number" class="w-50"ng-model="item.male_scholarship"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_scholarship"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_present"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_present"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_rep"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_rep"></td>
                        <td><input type="number" class="w-50"ng-model="item.transfer_in"></td>
                        <td><input type="number" class="w-50"ng-model="item.transfer_out"></td>
                        <td><input type="number" class="w-50"ng-model="item.nextyr_book_reg"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৬ </span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন ফিশারিজ এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tbody>
                    <tr>
                        <td rowspan="2" style="width:100px">শ্রেণি</td>
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
                    <tr ng-repeat="item in data.hscDiplomaFisheries">
                        <td ng-bind="dipFName(item.class_id)"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_student"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_student"></td>
                        <td><input type="number" class="w-50"ng-model="item.male_stipend"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_stipend"></td>
                        <td><input type="number" class="w-50"ng-model="item.male_scholarship"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_scholarship"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_present"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_present"></td>
                        <td><input type="number" class="w-50"ng-model="item.total_rep"></td>
                        <td><input type="number" class="w-50"ng-model="item.female_rep"></td>
                        <td><input type="number" class="w-50"ng-model="item.transfer_in"></td>
                        <td><input type="number" class="w-50"ng-model="item.transfer_out"></td>
                        <td><input type="number" class="w-50"ng-model="item.nextyr_book_reg"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৭ </span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন কৃষি এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tbody>
                    <tr>
                        <td rowspan="2" style="width:100px">শ্রেণি</td>
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
                    <tr ng-repeat="item in data.hscDiplomaAgriculture">
                        <td ng-bind="dipAgName(item.class_id)"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_student"></td>
                        <td><input type="number" class="w-50" ng-model="item.female_student"></td>
                        <td><input type="number" class="w-50" ng-model="item.male_stipend"></td>
                        <td><input type="number" class="w-50" ng-model="item.female_stipend"></td>
                        <td><input type="number" class="w-50" ng-model="item.male_scholarship"></td>
                        <td><input type="number" class="w-50" ng-model="item.female_scholarship"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_present"></td>
                        <td><input type="number" class="w-50" ng-model="item.female_present"></td>
                        <td><input type="number" class="w-50" ng-model="item.total_rep"></td>
                        <td><input type="number" class="w-50" ng-model="item.female_rep"></td>
                        <td><input type="number" class="w-50" ng-model="item.transfer_in"></td>
                        <td><input type="number" class="w-50" ng-model="item.transfer_out"></td>
                        <td><input type="number" class="w-50" ng-model="item.nextyr_book_reg"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২</span>
                </div>
                <div class="form-control bg-number-label">বিভিন্ন ক্যাটাগরিভিত্তিক শিক্ষার্থীর সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tbody>
                    <tr>
                        <td rowspan="2">ক্র.নং</td>
                        <td rowspan="2" style="width:150px">ক্যাটাগরি(শিক্ষার্থী)</td>
                        <td colspan="2">১১শ শ্রেণি</td>
                        <td colspan="2">১২শ শ্রেণি</td>
                        <td colspan="2">ডিগ্রি ১ম বর্ষ</td>
                        <td colspan="2">ডিগ্রি ২য় বর্ষ</td>
                        <td colspan="2">ডিগ্রি ৩য় বর্ষ</td>
                        <td colspan="2">স্নাতক (সম্মান)</td>
                        <td colspan="2">স্নাতকোত্তর</td>
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
                    <tr ng-repeat="item in data.categoryWiseStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catStdName(item.category_id)"></td>
                        <td><input type="number" class="w-50" ng-model="item.eleven_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.eleven_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.twelve_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.twelve_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.degree1st_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.degree1st_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.degree2nd_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.degree2nd_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.degree3rd_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.degree3rd_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.honors_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.honors_female"></td>
                        <td><input type="number" class="w-50" ng-model="item.masters_total"></td>
                        <td><input type="number" class="w-50" ng-model="item.masters_female"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৪</span>
                </div>
                <div class="form-control bg-number-label">বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীর ধরন অনুযায়ী শিক্ষক ও
                    শিক্ষার্থীর সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>২.২.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?
                            <select class="" ng-model="data.instituteSpecialStudents.special_std_yn">
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select></td>
                        <td>২.২.২ উত্তর হ্যাঁ হলে তাদের জন্য সুবিধাসমূহ কি কি?<br>
                            <input type="checkbox" ng-model="data.instituteSpecialStudents.disable_facility_audio">&nbsp; অডিও-১ &nbsp;
                            <input type="checkbox" ng-model="data.instituteSpecialStudents.disable_facility_braille">&nbsp; ব্রেইল-২ &nbsp;
                            <input type="checkbox" ng-model="data.instituteSpecialStudents.disable_facility_signlan"> &nbsp;সাইন ভাষা-৩ &nbsp;
                            <input type="checkbox" ng-model="data.instituteSpecialStudents.disable_facility_others"> অন্যান্য-৪
                        </td>
                        <td>২.২.৩ বিল্ডিং এ Ramp এর ব্যবস্থা আছে কি?
                            <select class="" ng-model="data.instituteSpecialStudents.ramp_access_yn">
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select></td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td>ক্র. নং</td>
                        <td>বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                        <td colspan="2">৭ম শ্রেণি</td>
                        <td colspan="2">৮ম শ্রেণি</td>
                        <td colspan="2">৯ম শ্রেণি</td>
                        <td colspan="2">১০ম শ্রেণি</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>মোট</td>
                        <td>মহিলা</td>
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
                    <tr ng-repeat="item in data.categoryWiseDisableStudent">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="catDisStdName(item.disable_type)"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="w-50" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৫</span>
                </div>
                <div class="form-control bg-number-label">ক্ষুদ্র-নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা
                    ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">একাদশ শ্রেণি</td>
                        <td colspan="2">দ্বাদশ শ্রেণি</td>
                        <td colspan="2">ডিগ্রি ১ম বর্ষ</td>
                        <td colspan="2">ডিগ্রি ২য় বর্ষ</td>
                        <td colspan="2">ডিগ্রি ৩য় বর্ষ</td>
                        <td colspan="2">স্নাতক (সম্মান)</td>
                        <td colspan="2">স্নাতকোত্তর</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
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
                    <tr ng-repeat="item in data.categoryWiseUpajati">
                        <td ng-bind="$index+1"></td>
                     <td ng-bind="findUpajaitName(item.upajati_id)"></td>
                        <td><input type="text" class="w-50" ng-model="item.total_teacher"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.female_teacher"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.eleven_total"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.eleven_female"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.twelve_total"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.twelve_female"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.degree1st_total"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.degree1st_girls"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.degree2nd_total"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.degree2nd_girls"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.degree3rd_total"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.degree3rd_girls"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.honors_total"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.honors_girls"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.masters_total"/> </td>
                        <td><input type="text" class="w-50" ng-model="item.masters_girls"/> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩</span>
                </div>
                <div class="form-control bg-number-label">উচ্চ মাধ্যমিক- সর্বোচ্চ স্তরে বয়সভিত্তিক শিক্ষার্থীর সংখ্যা
                    (০১/০১/২০২১)
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>শ্রেণি</th>
                        <th colspan="2">১৫ বছরের নীচে</th>
                        <th colspan="2">১৬ বছর</th>
                        <th colspan="2">১৭ বছর</th>
                        <th colspan="2">১৮ বছর</th>
                        <th colspan="2">১৯ বছর</th>
                        <th colspan="2">২০ বছরের উপরে</th>
                        <th colspan="2">২১ বছরের উপরে</th>
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
                        <th>মোট</th>
                        <th>ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="item in data.ageWiseStudent">
                        <td ng-bind="findClassName(item.class_id)"></td>
                        <td><input class="w-50" ng-model="item.under_fifteen_total"/> </td>
                        <td><input class="w-50"  ng-model="item.under_fifteen_female"/> </td>
                        <td><input class="w-50" ng-model="item.sixteen_total"/> </td>
                        <td><input class="w-50" ng-model="item.sixteen_female"/> </td>
                        <td><input class="w-50" ng-model="item.seventeen_total"/> </td>
                        <td><input class="w-50" ng-model="item.seventeen_female"/> </td>
                        <td><input class="w-50" ng-model="item.eighteen_total"/> </td>
                        <td><input class="w-50" ng-model="item.eighteen_female"/> </td>
                        <td><input class="w-50" ng-model="item.nineteen_total"/> </td>
                        <td><input class="w-50" ng-model="item.nineteen_female"/> </td>
                        <td><input class="w-50" ng-model="item.twenty_total"/> </td>
                        <td><input class="w-50" ng-model="item.twenty_female"/> </td>
                        <td><input class="w-50" ng-model="item.upper_twentyone_total"/> </td>
                        <td><input class="w-50" ng-model="item.upper_twentyone_female"/> </td>
                        <td><input class="w-50" ng-model="item.total_student"/> </td>
                        <td><input class="w-50" ng-model="item.female_student"/> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.১</span>
                </div>
                <div class="form-control bg-number-label">অভিভাবকের পেশা অনুযায়ী শিক্ষার্থী সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3" style="width: 75px">ক্র. নং</td>
                        <td rowspan="3">অভিভাবকের পেশা</td>
                        <td colspan="4">শিক্ষার্থীর সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>উচ্চ মাধ্যমিক</td>
                        <td>স্নাতক (পাস)</td>
                        <td>স্নাতক (সম্মান)</td>
                        <td>স্নাতকোত্তর</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.guardianOccupation">
                        <td ng-bind="$index+1"></td>
                        <td ng-bind="occupationName(item.occupation_id)"></td>
                        <td><input type="text" ng-model="item.hsc"/></td>
                        <td><input type="text" ng-model="item.honours_pass"/></td>
                        <td><input type="text" ng-model="item.honours_somman"/></td>
                        <td><input type="text" ng-model="item.masters"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/collegeFirstPage.js') }}"></script>
@stop