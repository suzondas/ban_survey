@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="madStdSeventhPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩০</span>
                </div>
                <div class="form-control bg-number-label">পদবীভিত্তিক কর্মরত ও এমপিওভুক্ত শিক্ষক ও কর্মচারীর সংখ্যা:
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">পদবী</td>
                        <td colspan="2">বর্তমানে কর্মরত</td>
                        <td colspan="2">সংশ্লিষ্ট টেকনোলজির প্রশিক্ষণ প্রাপ্ত</td>
                        <td colspan="2">এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে)</td>
                        <td rowspan="2">শূন্য পদের সংখ্যা</td>
                        <td rowspan="2">খন্ডকালীন শিক্ষক</td>
                        <td rowspan="2">নিবন্ধনকৃত শিক্ষক সংখ্যা (NTRCA)</td>
                        <td rowspan="2">NTRCA কর্তৃক পূরণযোগ্য শূন্য পদের সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.teachStafSum">
                        <td ng-bind="desigName(item.designation_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.mpo_teachers"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_mpo_teachers"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.blank_post_no"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.brance_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ntrc_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.parttime_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ntrc_blank_post"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.ntrc_blank_post"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-9">
                <label class="label-number font-weight-bold">২.৩০.১ স্তরভিত্তিক শিক্ষকদের বিভাজন(একজন শিক্ষক একাধিক স্তরে পাঠদান করলে প্রত্যেক স্তরেই তাঁর সংখ্যা অনর্ভুক্ত হবে)</label>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">পাঠদানের স্তর</td>
                        <td colspan="2">শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.teachVocStafSum">
                        <td ng-bind="desigVocName(item.designation_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teachers_in_service"/></td>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row  contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩১ </span>
                </div>
                <div class="form-control bg-number-label"> শিক্ষাগত যোগ্যতাভিত্তিক শিক্ষক সংখ্যা</div>
            </div>
            <div class="col-md-4 contentBoxBody">
                <label class="font-weight-bold"> ২.৩১.১ প্রতিষ্ঠানের সার্বোচ্চ শিক্ষাগত যোগ্যতাভিত্তিক শিক্ষক সংখ্যা:</label>

                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">শিক্ষাগত যোগ্যতা</td>
                        <td colspan="2">শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.teachQualiSum">
                        <td ng-bind="qualiName(item.quli_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 contentBoxBody">
                <label class="font-weight-bold"> ২.৩১.২ প্রতিষ্ঠানের সর্বোচ্চ শিক্ষক প্রশিক্ষণপ্রাপ্ত শিক্ষক সংখ্যা:</label>
                <table class="table table-bordered  table-striped text-center">
                    <tr>
                        <td rowspan="2">প্রশিক্ষণ</td>
                        <td colspan="2">শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.hdTeachSum">
                        <td ng-bind="hdName(item.higher_degree_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 contentBoxBody">
                <label class="font-weight-bold"> ২.৩১.৩ আইসিটি বিষয়ক প্রশিক্ষণ প্রাপ্ত শিক্ষক সংখ্যাঃ</label>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">প্রশিক্ষণ/ ডিগ্রি</td>
                        <td colspan="2">শিক্ষক সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.hdTrnSum">
                        <td ng-bind="hdTrName(item.higher_degree_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.total_teacher"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teacher"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩৫</span>
                </div>
                <div class="form-control bg-number-label">অবসর গ্রহণ, নতুন নিয়োগপ্রাপ্ত, গবেষণা কাজ, পুরষ্কার প্রাপ্ত
                    ইত্যাদি সম্পর্কিত শিক্ষকের সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <td rowspan="2">ক্রমিক নং</td>
                        <td rowspan="2" style="width:450px">বিবরণ</td>
                        <td colspan="2"> শিক্ষকের সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>১</td>
                        <td style="width: 300px">তথ্য প্রদানের দিন শিক্ষক উপস্থিতি</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.count_day_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.count_day_female" id=""></td>
                    </tr>
                    <tr>
                        <td>২</td>
                        <td style="width: 300px">অবসরে গিয়েছেন (১/৭/২০২০থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.retired_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.rerired_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৩</td>
                        <td style="width: 300px">অবসরে যাবেন (১/৭/২০২১ থেকে ৩০/৬/২০২২ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.retiredfu_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.reriredfu_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৪</td>
                        <td style="width: 300px">নতুন নিয়োগপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.new_recruite_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.new_recruite_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৫</td>
                        <td style="width: 300px">শিক্ষকতা পেশা ছেড়ে দিয়েছেন (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.leave_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.leave_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৬</td>
                        <td style="width: 300px">NTRCA কর্তৃক সুপারিশকৃত শিক্ষকের সংখ্যা</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.ntrc_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.ntrc_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৭</td>
                        <td style="width: 300px">বর্তমানে কতজন শিক্ষক গবেষণা কাজে সম্পৃক্ত</td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.research_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25"ng-model="data.teacherRetAwInfo.research_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৮</td>
                        <td style="width: 300px">একাডেমিক বিষয়ের ওপর পুরষ্কারপ্রাপ্ত শিক্ষকের সংখ্যা</td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.awarded_teacher_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.awarded_teacher_female" id=""></td>
                    </tr>
                    <tr>
                        <td>৯</td>
                        <td style="width: 300px">শিখন-শেখানো বিষয়ে প্রশিক্ষণপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)
                        </td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.learning_trained_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.learning_trained_female" id=""></td>
                    </tr>
                    <tr>
                        <td>১০</td>
                        <td style="width: 300px">বিশেষ চাহিদাসম্পন্ন (Special needs) শিক্ষার্থীর শিক্ষা বিষয়ে
                            প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা
                        </td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.special_trained_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.special_trained_female" id=""></td>
                    </tr>
                    <tr>
                        <td>১১</td>
                        <td style="width: 300px">একীভূত শিক্ষা (Inclusive education), শিশু অধিকার এবং বিদ্যালয়ের ইতিবাচক
                            শৃঙ্খলা বিষয়ের ওপর প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা
                        </td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.inclusive_total" id=""></td>
                        <td><input type="number" number-converter class="form-control w-25" ng-model="data.teacherRetAwInfo.inclusive_female" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩৬ </span>
                </div>
                <div class="form-control bg-number-label">প্রাপ্ত পুরষ্কার সম্পর্কিত তথ্য</div>
            </div>
            <div class="col-md-6">
                <label class="font-weight-bold">২.৩৬.১ শিক্ষা প্রতিষ্ঠানে প্রাপ্ত পুরষ্কার সম্পর্কিত তথ্য (নির্দিষ্ট স্থানে টিক চিহ্ন দিন)</label>
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <td rowspan="7">শিক্ষকদের জন্য</td>
                        <td>বিষয়</td>
                        <td>জাতীয়</td>
                        <td>বিভাগ/মহানগর</td>
                        <td>জেলা</td>
                        <td>উপজেলা/থানা</td>
                        <td style="width:100px">সাল</td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষা প্রতিষ্ঠান</td>
                        <td><input type="checkbox" ng-checked="data.teacherRetAwInfo.best_inst_national==1" ng-true-value="'1'" ng-false-value="'0'" ng-model="data.teacherRetAwInfo.best_inst_national"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_inst_division" ng-checked="data.teacherRetAwInfo.best_inst_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_inst_district" ng-checked="data.teacherRetAwInfo.best_inst_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_inst_thana" ng-checked="data.teacherRetAwInfo.best_inst_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="number" number-converter class="form-control" ng-model="data.teacherRetAwInfo.best_inst_year"></td>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষা প্রতিষ্ঠান প্রধান</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_inst_head_national" ng-checked="data.teacherRetAwInfo.best_inst_head_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_inst_head_division" ng-checked="data.teacherRetAwInfo.best_inst_head_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_inst_head_district" ng-checked="data.teacherRetAwInfo.best_inst_head_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_inst_head_thana" ng-checked="data.teacherRetAwInfo.best_inst_head_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_inst_head_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শ্রেণি শিক্ষক</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_class_tea_national" ng-checked="data.teacherRetAwInfo.best_class_tea_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_class_tea_division" ng-checked="data.teacherRetAwInfo.best_class_tea_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_class_tea_district" ng-checked="data.teacherRetAwInfo.best_class_tea_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_class_tea_thana" ng-checked="data.teacherRetAwInfo.best_class_tea_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_class_tea_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (বিএনসিসি)</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_bncc_national" ng-checked="data.teacherRetAwInfo.best_tea_bncc_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_bncc_division" ng-checked="data.teacherRetAwInfo.best_tea_bncc_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_bncc_district" ng-checked="data.teacherRetAwInfo.best_tea_bncc_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_bncc_thana" ng-checked="data.teacherRetAwInfo.best_tea_bncc_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_tea_bncc_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (স্কাউট)</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_scout_national" ng-checked="data.teacherRetAwInfo.best_tea_scout_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_scout_division" ng-checked="data.teacherRetAwInfo.best_tea_scout_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_scout_district" ng-checked="data.teacherRetAwInfo.best_tea_scout_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_scout_thana" ng-checked="data.teacherRetAwInfo.best_tea_scout_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_tea_scout_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষক (গার্ল গাইড)</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_gguide_national" ng-checked="data.teacherRetAwInfo.best_tea_gguide_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_gguide_division" ng-checked="data.teacherRetAwInfo.best_tea_gguide_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_gguide_district" ng-checked="data.teacherRetAwInfo.best_tea_gguide_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_tea_gguide_thana" ng-checked="data.teacherRetAwInfo.best_tea_gguide_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_tea_gguide_year"></td>
                    <tr>
                    </tr>
                    <tr>
                        <td rowspan="4"> শিক্ষার্থীদের জন্য</td>
                        <td>শ্রেষ্ঠ শিক্ষার্থী</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_national" ng-checked="data.teacherRetAwInfo.best_std_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_division" ng-checked="data.teacherRetAwInfo.best_std_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_district" ng-checked="data.teacherRetAwInfo.best_std_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_thana" ng-checked="data.teacherRetAwInfo.best_std_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_std_year"></td>
                    </tr>

                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (স্কাউট)</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_scout_national" ng-checked="data.teacherRetAwInfo.best_std_scout_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_scout_division" ng-checked="data.teacherRetAwInfo.best_std_scout_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_scout_district" ng-checked="data.teacherRetAwInfo.best_std_scout_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_scout_thana" ng-checked="data.teacherRetAwInfo.best_std_scout_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_std_scout_year"></td>
                    </tr>
                    <tr>
                        <td>শ্রেষ্ঠ শিক্ষার্থী (গার্ল গাইড)</td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_gguide_national" ng-checked="data.teacherRetAwInfo.best_std_gguide_national==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_gguide_division" ng-checked="data.teacherRetAwInfo.best_std_gguide_division==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_gguide_district" ng-checked="data.teacherRetAwInfo.best_std_gguide_district==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="checkbox" ng-model="data.teacherRetAwInfo.best_std_gguide_thana" ng-checked="data.teacherRetAwInfo.best_std_gguide_thana==1" ng-true-value="'1'" ng-false-value="'0'"></td>
                        <td><input type="text" class="form-control" ng-model="data.teacherRetAwInfo.best_std_gguide_year"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="col-md-6">
                <label class="font-weight-bold">২.৩৬.২ বিভিন্ন পর্যায়ে অংশগ্রহণকারী ও পুরষ্কারপ্রাপ্ত শিক্ষার্থী সংখ্যা</label>
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <td>বিষয়</td>
                        <td></td>
                        <td>প্রতিষ্ঠান পর্যায়ে</td>
                        <td>উপজেলা/থানা পর্যায়ে</td>
                        <td>জেলা পর্যায়ে</td>
                        <td>বিভাগীয় পর্যায়ে</td>
                        <td>জাতীয় পর্যায়ে</td>
                    </tr>
                    <tr>
                        <td rowspan="2">সাহিত্য ও সংস্কৃতি</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_cultureal_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_cultureal_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_cultureal_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_cultureal_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_cultureal_parti" class="w-50"></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_cultureal_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_cultureal_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_cultureal_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_cultureal_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_cultureal_award" class="w-50"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">ক্রীড়া (আউটডোর)</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_sports_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_sports_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_sports_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_sports_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_sports_parti" class="w-50"></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_sports_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_sports_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_sports_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_sports_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_sports_award" class="w-50"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">ক্রীড়া (ইনডোর)</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_indoor_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_indoor_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_indoor_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_indoor_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_indoor_parti" class="w-50"></td>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_indoor_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_indoor_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_indoor_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_indoor_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_indoor_award" class="w-50"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">সৃজনশীল মেধা অন্বেষণ</td>
                        <td>অংশগ্রহণকারী</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_creative_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_creative_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_creative_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_creative_parti" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_creative_parti" class="w-50"></td>
                    </tr>
                    <tr>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_creative_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_creative_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_creative_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_creative_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_creative_award" class="w-50"></td>
                    </tr>
                    <tr>
                        <td>বিশেষ কৃতিত্বপূর্ণ অবদান</td>
                        <td>পুরষ্কারপ্রাপ্ত</td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.institute_special_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.upazila_special_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.district_special_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.division_special_award" class="w-50"></td>
                        <td><input type="number" number-converter ng-model="data.teacherRetAwInfo.national_special_award" class="w-50"></td>
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
        <script src="{{ asset('js/madStdSeventhPage.js') }}" type="module" defer></script>
    --}}
@stop
