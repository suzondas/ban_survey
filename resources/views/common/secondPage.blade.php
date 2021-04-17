@extends('components.template')
@section('content')
    <div class="container" style="font-size:13px !important;" id="secondPage">

        <div v-if="!dataLoaded">
            <div class="d-flex justify-content-center">
                <h3 class="p-2">Loading...</h3>
                <div class="spinner-border" role="status">
                </div>
            </div>
        </div>

        <div v-if="dataLoaded">
            <h3 class="text-center" style="margin-top: 10px">সেকশন ১: মৌলিক তথ্য (খ)</h3>

            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">১.৭ </span>
                    </div>
                    <div class="form-control bg-number-label">জমি সংক্রান্ত তথ্য</div>
                </div>
                <div class="contentBoxBody">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="font-weight-bold">১.৭ জমির অবস্থান:</label>
                            <table class="table table-striped table-bordered">
                                <tr class="custom-table-header">
                                    <td colspan="2">
                                        দখল স্বত্বে
                                    </td>
                                    <td colspan="2">
                                        দখল স্বত্বে নয়
                                    </td>
                                </tr>
                                <tr>
                                    <td>মৌজার নাম:</td>
                                    <td><input type="text" class="form-control" name=""
                                               v-model="data.institutes_land_usage[0].attached_land_mauza1"></td>
                                    <td>মৌজার নাম:</td>
                                    <td><input type="text" class="form-control" name=""
                                               v-model="data.institutes_land_usage[0].outside_land_mauza1"></td>
                                </tr>
                                <tr>
                                    <td>খতিয়ান নং:</td>
                                    <td><input type="text" class="form-control" name=""
                                               v-model="data.institutes_land_usage[0].attached_land_khatian1"></td>
                                    <td>খতিয়ান নং:</td>
                                    <td><input type="text" class="form-control" name=""
                                               v-model="data.institutes_land_usage[0].outside_land_khatian1"></td>
                                </tr>
                                <tr>
                                    <td>দাগ নং:</td>
                                    <td><input type="text" class="form-control" name=""
                                               v-model="data.institutes_land_usage[0].attached_land_dag1"></td>
                                    <td>দাগ নং:</td>
                                    <td><input type="text" class="form-control" name=""
                                               v-model="data.institutes_land_usage[0].outside_land_dag1"></td>

                                </tr>
                                <tr>
                                    <td>অখন্ড (শতাংশ)</td>
                                    <td><input type="text" class="form-control" name=""></td>
                                    <td>অন্যত্র (শতাংশ)</td>
                                    <td><input type="text" class="form-control" name=""></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <label>১.৭ প্রতিষ্ঠানটির মোট জমির পরিমাণ:</label>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td>
                                        <label for="">(১) দখল স্বত্বে<br> (শতাংশ):</label>
                                        <input class="w-100" type="text" name=""
                                               v-model="data.institutes_land_usage[0].total_land_under_control">
                                    </td>
                                    <td>
                                        <label for="">(২) দখল স্বত্বে নয়<br> (শতাংশ):</label>
                                        <input class="w-100" type="text" name=""
                                               v-model="data.institutes_land_usage[0].total_land_outof_control">
                                    </td>
                                    <td>
                                        <label for=""> মোট <br>(শতাংশ):</label>
                                        <input class="w-100" type="text" name=""
                                               v-model="data.institutes_land_usage[0].total_land">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <label class="label-text container">১.৭.২ জমির ব্যবহার ও পরিমাণ (শতাংশে):</label>
                    <table class="table table-bordered" style="text-align:center">
                        <thead>
                        <tr class="custom-table-header">
                            <th>বিবরণ</th>
                            <th>প্রতিষ্ঠানের ভবন</th>
                            <th>খেলার মাঠ</th>
                            <th>ছাত্রাবাস</th>
                            <th>শিক্ষক আবাসন</th>
                            <th>আবাদি জমি</th>
                            <th>পুকুর</th>
                            <th>বাগান</th>
                            <th>শহিদ মিনার</th>
                            <th>অব্যবহৃত</th>
                            <th>অন্যান্য</th>
                            <th>মোট</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>শতাংশ</td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].institue_building"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].play_ground"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].hostel"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].teachers_residence"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].cultivable"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].pond"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].garden"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].sahida_minar"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].unused"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].others"></td>
                            <td><input type="number" class="form-control" name="" id=""
                                       v-model="data.institutes_land_usage[0].total"></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">১.৭.৩</span>
                    </div>
                    <div class="form-control bg-number-label">ভবন সংক্রান্ত</div>
                </div>
                <div class="contentBoxBody">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>
                                        <label>
                                            ১.৭.৩ প্রতিষ্ঠানের সবচেয়ে পুরাতন ভবনটি নির্মাণের বছর
                                        </label>
                                        <input type="number" name="" class="form-control"
                                               v-model="data.building_infos[0].oldest_building_estab_year">
                                    </td>
                                    <td>
                                        <label>
                                            ১.৭.৪ প্রতিষ্ঠানের সর্বশেষ নতুন ভবনটি নির্মাণের বছর
                                        </label>
                                        <input type="number" name="" class="form-control"
                                               v-model="data.building_infos[0].latest_building_estab_year">
                                    </td>
                                    <td>
                                        <label>
                                            ১.৭.৫ সর্বশেষ ভবনটি নির্মাণে অর্থের উৎস
                                        </label>
                                        <select class="" name="english_version"
                                                v-model="data.building_infos[0].latest_building_money_source">
                                            <option value="1">সরকার-১</option>
                                            <option value="2">প্রকল্প-২</option>
                                            <option value="2">নিজস্ব-৩</option>
                                            <option value="2">এনজিও-৪</option>
                                            <option value="2">ব্যাক্তি-৫</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label>১.৭.৬ সর্বশেষ নির্মিত ভবনের আয়তন(বর্গফুট)</label>
                                        <input type="number" name="" class="form-control"
                                               v-model="data.building_infos[0].latest_building_area_sft">
                                    </td>
                                    <td>
                                        <label>
                                            ১.৭.৭ সকল ভবনের মোট আয়তন(বর্গফুট)
                                        </label>
                                        <input type="number" name="" class="form-control"
                                               v-model="data.building_infos[0].latest_building_area_sft">
                                    </td>
                                    <td>
                                        <label>
                                            ১.৭.৮ প্রতিষ্ঠানটির অবস্থান:
                                        </label>
                                        <select name="english_version" style="width: 130px"
                                                v-model="data.building_infos[0].total_building_area_sft">
                                            <option value="1">নিজস্ব জমিতে</option>
                                            <option value="2">ভাড়া বাড়িতে</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <label>১.৭.১১ ভবনভিত্তিক তলা ও উর্ধ্মূখী সম্প্রসারণ ইত্যাদি সম্পর্কিত তথ্য</label>
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                <tr class="custom-table-header">
                                    <th>ভবন নং</th>
                                    <th>ভবনের নাম</th>
                                    <th>কত তলা ফাউন্ডেশন</th>
                                    <th>কত তলা নির্মিত</th>
                                    <th>নির্মানের বছর</th>
                                    <th>উর্ধ্মুখী সম্প্রসারণ যোগ্য কিনা? হাঁ-১, না-২</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(item,index) in data.building_details">
                                    <td>@{{index+1}}</td>
                                    <td><input type="text" class="form-control" name="" v-model="item.building_name">
                                    </td>
                                    <td><input type="number" class="form-control" name=""
                                               v-model="item.foundation_floor"></td>
                                    <td><input type="number" class="form-control" name="" v-model="item.build_floor">
                                    </td>
                                    <td><input type="number" class="form-control" name="" v-model="item.build_year">
                                    </td>
                                    <td><select class="" name="" v-model="item.upper_increase_yn">
                                            <option value="">select</option>
                                            <option value="1">হ্যাঁ-১</option>
                                            <option value="2">না-২</option>
                                        </select></td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="button" class="btn-warning" value="Add row" @click="addBuildingDetails()">
                        </div>
                    </div>
                    <label>১.৭.৯ ভবন গৃহের মালিকানা, ধরন ও অবস্থা অনুযায়ী সংখ্যাঃ</label>

                    <table class="table table-bordered" style="text-align:center">
                        <thead>
                        <tr class="custom-table-header">
                            <th colspan="7">ভবন সংখ্যা</th>
                            <th colspan="2">মালিকানা অনুসারে ভবন সংখ্যা</th>
                            <th colspan="3">ধরন অনুযায়ী ভবন সংখ্যা</th>
                            <th colspan="4">অবস্থা অনুযায়ী ভবন সংখ্যা</th>
                            <th>মোট কক্ষ সংখ্যা</th>
                        </tr>
                        <tr>
                            <th>১ তলা</th>
                            <th>২ তলা</th>
                            <th>৩ তলা</th>
                            <th>৪ তলা</th>
                            <th>৫ তলা</th>
                            <th>৫ তলা+</th>
                            <th>মোট</th>
                            <th>নিজস্ব</th>
                            <th>ভাড়া</th>
                            <th>পাকা</th>
                            <th>আধাপাকা</th>
                            <th>কাঁচা</th>
                            <th>নতুন</th>
                            <th>পুরাতন</th>
                            <th>জরাজীর্ণ</th>
                            <th>কর্তৃপক্ষ কর্তৃক পরিত্যাক্ত</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].no_building_1floor">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].no_building_2floor">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].no_building_3floor">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].no_building_4floor">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].no_building_5floor">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].no_building_5plus_floor">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].no_building">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].own_building">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].rented">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].packa">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].semi_packa">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].kancha">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].new_building">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].old_building">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].damage">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].abandoned">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style=""
                                       v-model="data.building_numbers[0].class_room">
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <label>১.৭.১০ ভবন/গৃহের ব্যবহার</label>
                    <div class="table-bordered">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr class="custom-table-header">
                                <th>ভবন/কক্ষ</th>
                                <th>অফিস কক্ষ</th>
                                <th>প্রতিষ্ঠান প্রধানের কক্ষ</th>
                                <th>শিক্ষক মিলনায়তন</th>
                                <th>সাধারণ শ্রেণি কক্ষ</th>
                                <th>বিজ্ঞানাগার</th>
                                <th>গ্রন্থাগার কক্ষ</th>
                                <th>ছাত্র কমন রুম</th>
                                <th>ছাত্রী কমন রুম</th>
                                <th>সিক রুম</th>
                                <th>ছাত্রাবাসের সংখ্যা</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>সংখ্যা</td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].office_room">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].inst_head_room">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].teachers_room">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].class_room">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].laboratory">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].library">
                                </td>

                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].male_common_room">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].female_common_room">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].sick_room">
                                </td>
                                <td><input type="number" class="form-control" name="" id="" style=""
                                           v-model="data.building_use[0].hostel">
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr class="custom-table-header">
                                <th>ভবন/কক্ষ</th>
                                <th>ছাত্রাবাসের সিট সংখ্যা</th>
                                <th>ছাত্রাবাসে অবস্থানকারী</th>
                                <th>ছাত্রীনিবাসের সিট সংখ্যা</th>
                                <th>ছাত্রীনিবাসে অবস্থানকারী</th>
                                <th>প্রতিষ্ঠান প্রধানের আবাসন</th>
                                <th>শিক্ষক আবাসিক ভবন</th>
                                <th>আবাসিক শিক্ষক সংখ্যা</th>
                                <th>শিক্ষক আবাসন সিট</th>
                                <th>বিশেষ চাহিদা সম্পন্ন</th>
                                <th>কাউন্সিলিং রুম</th>
                                <th>শিক্ষা উপকরণ</th>
                                <th>অন্যান্য</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>সংখ্যা</td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].hostal_sit"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].resident_boy_total"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].girls_hostal_sit"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].resident_girl_total"></td>
                                <td><input type="number" class="form-control" name=""></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].teachers_residence"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].resident_teacher_total"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].teachers_residence_sit"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].autistic_rest_room"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].counseling_room"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].edu_instrument_room"></td>
                                <td><input type="number" class="form-control" name=""
                                           v-model="data.building_use[0].others"></td>

                            </tr>
                            </tbody>
                        </table>
                        <label>
                            ১.৭.১১ প্রতিষ্ঠানের প্রার্থনা গৃহঃ
                        </label>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>
                                    <label class="label-number" for="">মসজিদ</label>
                                    <input type="checkbox" class="form-control"  v-model="data.building_use[0].mosjid"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">নামাজ ঘর</label>
                                    <input type="checkbox" class="form-control" v-model="data.building_use[0].prayer_room"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">মন্দির</label>
                                    <input type="checkbox" class="form-control" v-model="data.building_use[0].mondir"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">গীর্জা</label>
                                    <input type="checkbox" class="form-control"  v-model="data.building_use[0].girja"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">প্যাগোডা</label>
                                    <input type="checkbox" class="form-control" v-model="data.building_use[0].pagoda"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">অন্যান্য</label>
                                    <input type="checkbox" class="form-control" v-model="data.building_use[0].other_religious_place"
                                           style="width: 20px">
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <label>১.৭.১৩ শ্রেণী ভিত্তিক কক্ষ সংখ্যা ও আয়তনঃ</label>
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                <tr class="custom-table-header">
                                    <th>শ্রেণি/পর্ব</th>
                                    <th colspan="3">কক্ষ সংখ্যা</th>
                                    <th colspan="3">কক্ষের আয়তন (বর্গফুট)</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>পাকা</th>
                                    <th>আধা-পাকা</th>
                                    <th>কাঁচা</th>
                                    <th>পাকা</th>
                                    <th>আধা-পাকা</th>
                                    <th>কাঁচা</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in data.classwise_room_space">
                                    <td>@{{ className(item.class_id) }}</td>
                                    <td><input type="text" class="form-control" v-model="item.packa"></td>
                                    <td><input type="text" class="form-control" v-model="item.semi_packa"></td>
                                    <td><input type="text" class="form-control" v-model="item.kancha"></td>
                                    <td><input type="text" class="form-control" v-model="item.packa_sft"></td>
                                    <td><input type="text" class="form-control" v-model="item.semi_packa_sft"></td>
                                    <td><input type="text" class="form-control" v-model="item.kancha_sft"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div v-show="dataLoadingError">
            <span class="d-flex justify-content-center btn-warning">Error in Fetching Data, Please contact System Administrator!</span>
        </div>

    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/secondPage.js') }}" type="module" defer></script>
@stop
