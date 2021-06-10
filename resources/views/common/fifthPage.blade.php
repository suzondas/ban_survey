@extends('components/template')
@section('content')
    <div class="container" id="fifthPage">
        <h3 class="text-center">সেকশন-৩: বিবিধ তথ্য (৩)</h3>
        <div v-if="!dataLoaded">
            <div class="d-flex justify-content-center">
                <h3 class="p-2">Loading...</h3>
                <div class="spinner-border" role="status">
                </div>
            </div>
        </div>
        <div v-if="dataLoaded">
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১২</span>
                </div>
                <div class="form-control bg-number-label">দুর্যোগ সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td class="align-middle">
                            <label>৩.১২.১ প্রতিষ্ঠানটি দূর্যোগকালীন আশ্রয় কেন্দ্র হিসেবে ব্যবহৃত হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.climate_disaster_manage_infos.shilter_house_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>

                        <td class="align-middle">
                            <label>৩.১২.২ প্রতিষ্ঠানের সকল ধরনের তথ্য সংরক্ষণ পদ্ধতি কোন ধরনের</label><br>
                            <input type="checkbox" v-model="data.climate_disaster_manage_infos.record_keeping_manual"> ম্যানুয়েল/হার্ড কপি &nbsp;
                            <input type="checkbox" v-model="data.climate_disaster_manage_infos.record_keeping_digital"> ডিজিটাল/সফটওয়্যার &nbsp;
                            <input type="checkbox" v-model="data.climate_disaster_manage_infos.record_keeping_both"> ম্যানুয়েল ও সফটওয়্যার উভয় &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <label>৩.১২.৩ আপনার প্রতিষ্ঠানটি দুর্যোপপ্রবণ এলাকায় অবস্থিত কি?</label>
                            <select class="contentBox"  v-model="data.climate_disaster_manage_infos.disaster_area_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.১২.৪ আপনার প্রতিষ্ঠানটি ২০২০ সালে কোন ধরনের দূর্যোগে কবলিত হয়েছিল?</label>
                            <select class="contentBox"  v-model="data.climate_disaster_manage_infos.disaster_area_type">
                                <option>SELECT</option>
                                <option value="1">জলোচ্ছ্বাস-১</option>
                                <option value="2">সাইক্লোন-২</option>
                                <option value="3">বন্যা-৩</option>
                                <option value="4">জলাবদ্ধতা-৪</option>
                                <option value="5">লবণাক্ততা-৫</option>
                                <option value="6">নদী ভাঙ্গন-৬</option>
                                <option value="7">খরা প্রবণ-৭</option>
                                <option value="8">ভূমিকম্প-৮</option>
                                <option value="9">পাহাড়ধ্বস-৯</option>
                                <option value="10">জোয়ার ভাটা-১০</option>
                                <option value="11">অন্যান্য-১১</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div><label class="align-middle font-weight-bold">৩.১২.৫ গত ১০ বছর এবং সর্বশেষ দূর্যোগে আক্রান্ত হয়ে এ
                        শিক্ষা প্রতিষ্ঠানে যে সকল ক্ষতি হয়েছে তার বিবরণ (সংখ্যা লিখুন):</label>
                    <table class="table table-bordered table-striped">

                        <tr class="custom-table-header">
                            <td>ক্ষতির বিবরণ</td>
                            <td>সর্বশেষ (২০২০ সাল)</td>
                            <td>২০২০ এর আম্ফান</td>
                            <td>২০২০ এর বন্যা</td>
                        </tr>
                        <tr>
                            <td><label>১. ছাত্রাবাসের কক্ষ ক্ষতিগ্রস্ত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.hostal_damage_last"/> টি</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.hostal_damage_amfan"/> টি</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.hostal_damage_flood"/> টি</td>
                        </tr>
                        <tr>
                            <td><label>২. শ্রেণিকক্ষ ক্ষতিগ্রস্ত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.classroom_damage_last"/> টি</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.classroom_damage_amfan"/> টি</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.classroom_damage_flood"/> টি</td>
                        </tr>
                        <tr>
                            <td><label>৩. বৃক্ষ মারা গিয়াছে অন্তত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.tree_damage_last"/> টি</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.tree_damage_amfan"/> টি</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.tree_damage_flood"/> টি</td>
                        </tr>
                        <tr>
                            <td><label>৪. শিক্ষা প্রতিষ্ঠান বন্ধ ছিল</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_close_damage_last"/> দিন</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_close_amfan"/> দিন</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_close_flood"/> দিন</td>
                        </tr>
                        <tr>
                            <td><label>৫. প্রতিষ্ঠান খোলা ছিল, কিন্তু ক্লাস নেয়া যায় নি</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.class_close_damage_last"/> দিন</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.class_close_amfan"/> দিন</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.class_close_flood"/> দিন</td>
                        </tr>
                        <tr>
                            <td><label>৬. প্রতিষ্ঠান স্থানান্তর করতে হয়েছে</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_replace_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_replace_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_replace_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>৭. প্রতিষ্ঠানে আসার রাস্তা আংশিক ক্ষতিগ্রস্থ হয়েছে</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.road_partial_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.road_partial_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.road_partial_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>৮. প্রতিষ্ঠানে আসার রাস্তা পুরা ক্ষতিগ্রস্থ হয়েছ</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.road_full_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.road_full_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.road_full_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>৯. প্রতিষ্ঠান খোলা ছিল, কিন্তু শিক্ষকদের স্কুল আসতে খু সমস্যা হয়েছিল</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.teach_problem_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.teach_problem_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.teach_problem_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>১০. শিক্ষকদের দুর্যোগ সহায়তা কাজে নিয়োজিত হবার জন্য অন্যত্র যেতে হয়েছিল
                                    অন্তত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.teach_volantier_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.teach_volantier_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.teach_volantier_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>১১.পানি সরবরাহ ব্যবস্থা ভেঙ্গে পড়েছিল অন্তত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.water_sup_fail_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.water_sup_fail_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.water_sup_fail_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>১২. টয়লেট ব্যবস্থা ভেঙ্গে পড়েছিল অন্তত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.sanit_fail_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.sanit_fail_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.sanit_fail_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>১৩. প্রতিষ্ঠানটি আশ্রয় কেন্দ্র হিসেবে ব্যবহৃত হয়েছিল অন্তত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_shelter_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_shelter_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.inst_shelter_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>১৪. খেলার মাঠ ব্যবহার অনুপযোগী হয়ে পড়েছিল</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.playground_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.playground_damage_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.playground_damage_flood"/> বার</td>
                        </tr>
                        <tr>
                            <td><label>১৫. কারিকুলাম সটিকভাবে শেষ করা যায়নি অন্তত</label>
                            </td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.syllabus_damage_last"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.psyllabus_amfan"/> বার</td>
                            <td><input type="number" class="w-50" v-model="data.climate_disaster_manage_infos.syllabus_flood"/> বার</td>
                    </table>
                </div>
                <div><label class="align-middle">৩.১২.৬ সর্বশেষ দুর্যোগের ফলে শিক্ষার্থীঝরে পড়ার
                        সংখ্যা:</label>
                    <table class="table table-bordered table-striped">

                        <tr>
                            <td rowspan="2" style="width: 100px">দুর্যোগের প্রকৃতি</td>
                            <td rowspan="2">দুর্যোগের নাম</td>
                            <td colspan="3" class="text-center">ঝড়ে পড়া শিক্ষার্থীর সংখ্যা</td>
                        </tr>
                        <tr>
                            <td class="text-center">ছাত্র</td>
                            <td class="text-center">ছাত্রী</td>
                            <td class="text-center">মোট</td>
                        </tr>
                        <tr>
                            <td rowspan="3">প্রাকৃতিক</td>
                            <td>১. <input type="text" class="w-75" v-model="data.climate_disaster_manage_infos.natural_disaster_name1"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_male1"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_female1"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_total1"></td>
                        </tr>
                        <tr>
                            <td>২. <input type="text" class="w-75" v-model="data.climate_disaster_manage_infos.natural_disaster_name2"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_male2"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_female2"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_total2"></td>
                        </tr>
                        <tr>
                            <td>৩. <input type="text" class="w-75" v-model="data.climate_disaster_manage_infos.natural_disaster_name3"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_male3"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_female3"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.natural_dis_dropout_total3"></td>

                        </tr>
                        <tr>
                            <td rowspan="3">মানব সৃষ্ট</td>
                            <td>১. <input type="text" class="w-75" v-model="data.climate_disaster_manage_infos.human_disaster_name1"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_male1"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_female1"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_total1"></td>

                        </tr>
                        <tr>
                            <td>২. <input type="text" class="w-75" v-model="data.climate_disaster_manage_infos.human_disaster_name2"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_male2"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_female2"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_total2"></td>
                        </tr>
                        <tr>
                            <td>৩. <input type="text" class="w-75" v-model="data.climate_disaster_manage_infos.human_disaster_name3"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_male3"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_female3"></td>
                            <td><input type="number" v-model="data.climate_disaster_manage_infos.human_dis_dropout_total3"></td>
                        </tr>
                    </table>
                </div>

                <div>
                    <label class="align-middle font-weight-bold">
                        ৩.১২.৭ সর্বশেষ দুর্যোগের পর কোন ধরনের ক্ষয়ক্ষতি কাটিয়ে ওঠা যায় নি? (একাধিক টিক হতে পারে)
                    </label>
                    <table class="table table-bordered">
                        <tr>
                            <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.building_damage_yn">ভবনের ক্ষয়ক্ষতি</td>
                            <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.furniture_damage_yn">আসবাবপত্র</td>
                            <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.roof_damage_yn">ছাদ</td>
                            <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.door_damage_yn">দরজা/জানালা</td>
                        </tr>
                        <tr>
                            <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.water_supply_damage_yn">পানীয় জলের ব্যবস্থা
                            </td>
                            <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.sanitation_damage_yn">স্যানিটেশন ব্যবস্থা
                            </td>
                            <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.connecting_road_damageyn">সংযোগ রাস্তা</td>
                            <td> অন্যান্য: <input class="w-75" type="text" v-model="data.climate_disaster_manage_infos.others_damage_details"></td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="align-middle">৩.১২.৮ দুর্যোগের ফলে ছাত্র-ছাত্রীরা কোন বিষয়সমূহে ক্ষতিগ্রস্ত হয়/পিছিয়ে
                            পড়ে? (ক্ষতিগ্রস্ত বিষয় (টিক চিহ্ন দিন))</label>
                        <table class="table table-bordered table-striped text-center">
                            <tr>
                                <td rowspan="2" style="width:150px">বিষয়</td>
                                <td colspan="3" class="text-center">ক্ষতির মাত্রা (টিক চিহ্ন দিন)</td>

                            </tr>
                            <tr>
                                <td>বাড়িতে চালিয়ে নিতে পারে</td>
                                <td>স্কুলে না আসলে খুবই সমস্যায় পড়ে</td>
                                <td>পিছিয়ে পড়ার ফলে স্থায়ী ক্ষতি হয়</td>
                            </tr>
                            <tr>
                                <td>বাংলা (১)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_bangla"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_bangla"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.permanent_damage_bangla"></td>

                            </tr>
                            <tr>
                                <td>ইংরেজি (২)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_english"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_english"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.permanent_damage_english"></td>
                            </tr>
                            <tr>
                                <td>গণিত (৩)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_math"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_math"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.permanent_damage_math"></td>
                            </tr>
                            <tr>
                                <td>বিজ্ঞান (৪)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_science"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_science"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.damage_subject_science"></td>
                            </tr>
                            <tr>
                                <td>সমাজ বিজ্ঞান (৫)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_social"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_social"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.permanent_damage_social"></td>
                            </tr>

                            <tr>
                                <td>হিসাব বিজ্ঞান (৬)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_accounts"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_accounts"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.damage_subject_accounts"></td>
                            </tr>
                            <tr>
                                <td>ধর্ম (৭)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_religion"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_religion"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.damage_subject_religion"></td>
                            </tr>
                            <tr>
                                <td>অন্যান্য (৮)</td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.manageable_other"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.problem_other"></td>
                                <td><input class="mr-2" type="checkbox" v-model="data.climate_disaster_manage_infos.damage_subject_other"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <label>৩.১২.৯ দুর্যোগ মোকাবেলায় সক্ষমতা বাড়ানোর জন্য কী কী পদক্ষেপ
                            গ্রহণ করা হয়েছে? </label>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <select class="contentBox"  v-model="data.climate_disaster_manage_infos.disaster_recover_step">
                                    <option>SELECT</option>
                                    <option value="1">উল্লেখযোগ্য কোন পদক্ষেপ গ্রহণ করা হয়নি-১</option>
                                    <option value="2">সমস্যাসমূহ সনাক্ত ও তালিকাভুক্ত করা হয়েছে-২</option>
                                    <option value="3">প্রশাসনকে লিখিতভাবে জানানো হয়েছে-৩</option>
                                    <option value="4"> বিভিন্ন আলোচনা সভায় উত্থাপন করা হয়েছে-৪</option>
                                    <option value="5"> পিটিএ ও এসএমসি সভায় আলোচনা হয়েছে-৫</option>
                                    <option value="6">অন্যান্য-৬</option>
                                </select>

                            </tr>
                        </table>
                        <label>৩.১২.১০ প্রতিষ্ঠানটি প্রতিবছর এবং দীর্ঘমেয়াদী দুর্যোগ ঝুঁকি
                            সংক্রান্ত কোন মূল্যায়ন প্রতিবেদন করেছে/পাঠিয়েছে কী? </label>
                        <table class="table table-bordered table-striped">

                            <tr>
                                <select class="contentBox"  v-model="data.climate_disaster_manage_infos.disaster_reporting">
                                    <option>SELECT</option>
                                    <option value="1"> হ্যাঁ, বিভাগীয় ছক ও নির্দেশনা অনুযায়ী পাঠানো হয়-১</option>
                                    <option value="2">সমস্যাসমূহ সনাক্ত ও তালিকাভুক্ত করা হয়েছে-২</option>
                                    <option value="3"> ফোনে প্রতিষ্ঠান প্রধান কর্তৃপক্ষকে অবহিত করেছেন-৩</option>
                                    <option value="4"> ভালোভাবে নিজেদের জন্য করেছে-৪</option>
                                    <option value="5"> কখনো এভাবে চিন্তা করা হয়নি-৫</option>
                                    <option value="6">অন্যান্য-৬</option>
                                </select>
                            </tr>
                        </table>

                    </div>
                </div>

            </div>
        </div>
        {{--Covid-19 related info--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১৩</span>
                </div>
                <div class="form-control bg-number-label">কোভিড-১৯ সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">

                    <tr>
                        <td>৩.১৩.১ করোনাকালীন শিক্ষার্থীদের পড়াশোনার ক্ষেত্রে আপনার প্রতিষ্ঠানের ভূমিকা কী ছিল?</td>
                        <td>
                            <label>৩.১৩.২ সংসদ টেলিভিশনে প্রচারিত শিখন-শেখানো কার্যক্রমে আপনার শিক্ষা প্রতিষ্ঠানের
                                শিক্ষার্থীদের অংশগ্রহণ কেমন?</label>
                            <select class="contentBox" v-model="data.covid_infos.tv_prog_std_participant">
                                <option value="Satisfaction">সন্তোষজনক-১</option>
                                <option value="Average">মোটামুটি-২</option>
                                <option value="Not Satisfaction">সন্তোষজনক নয়-৩</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" v-model="data.covid_infos.online_class_yn">অনলাইন ক্লাসের আয়োজন করা
                            হয়েছে-১
                        </td>
                        <td>
                            <label>৩.১৩.৩ আপনার প্রতিষ্ঠানে স্বাস্থ্যবিধি নিশ্চিত করে পাঠদান কার্যক্রম পরিচালনা করা
                                সম্ভব হচ্ছে কি না?</label>
                            <select class="contentBox"  v-model="data.covid_infos.class_start_yn">
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" v-model="data.covid_infos.tele_monitoring_yn">শিক্ষার্থীদের পড়াশোনার
                            বিষয়ে টেলিফোনিক তদারকি করা হয়েছে-২
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" v-model="data.covid_infos.lockdown_no_action_yn">লকডাউনের কারণে কোন উদ্যোগ
                            নেওয়া যায়নি-৩
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" v-model="data.covid_infos.online_exam_yn">অনলাইনে পরীক্ষা নিয়েছেন
                            কিনা-৪
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">

                    <tr>
                        <td colspan="6">৩.১৩.৪ করোনায় আক্রান্ত শিক্ষার্থী, শিক্ষক ও কর্মচারীদের তথ্য:</td>
                        <td colspan="6">৩.১৩.৫ করোনায় মৃত্যুবরণকারী শিক্ষার্থী, শিক্ষক ও কর্মচারীদের তথ্য:</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2">শিক্ষার্থী</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">কর্মচারী</td>
                        <td colspan="2">শিক্ষার্থী</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">কর্মচারী</td>
                    </tr>
                    <tr class="text-center">
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tr class="text-center">
                        <td><input type="number" class="w-75" v-model="data.covid_infos.infected_std_total"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.infected_std_girl"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.infected_tea_total"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.infected_tea_female"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.infected_staff_total"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.infected_staff_female"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.died_std_total"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.died_std_girl"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.died_tea_total"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.died_tea_female"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.died_staff_total"></td>
                        <td><input type="number" class="w-75" v-model="data.covid_infos.died_staff_female"></td>
                </table>
            </div>
        </div>
            <div align="center"><button type="button" @click="submitData" class="btn btn-success">Submit</button></div>

        </div>
        <div v-show="dataLoadingError">
            <span class="d-flex justify-content-center btn-warning">Error in Fetching Data, Please contact System Administrator!</span>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/fifthPage.js') }}" type="module" defer></script>
@stop
