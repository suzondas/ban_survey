@extends('components.template')
@section('content')
    <div class="container" id="firstPage">
        <h3 class="text-center" style="margin-top: 10px">সেকশন ১: মৌলিক তথ্য (ক)</h3>
        <div class="row">
            <div class="col-md-6">
                <label for="">ইআইআইএন (EIIN): &nbsp</label>
                <input type="text" v-model="data.eiin" readonly disabled>
            </div>
            <div class="col-md-6 d-flex flex-row-reverse">
                <table class="" style="width:300px;" border="1">
                    <tr>
                        <td rowspan="2" class="align-middle">GIS(জিআইএস)</td>
                        <td class="text-center">অক্ষাংশ (Latitude)</td>
                        <td class="text-center">দ্রাঘিমাংশ(Longititude)</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="" name="latitude" v-model="data.latitude" readonly></td>
                        <td><input type="text" class="" name="longitude" v-model="data.longitude" readonly></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১</span>
                </div>
                <div class="form-control bg-number-label">সাধারণ তথ্য</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td colspan="2" class="font-weight-bold">১.১ প্রতিষ্ঠানের নাম:</td>
                    </tr>
                    <tr>

                        <td style="width:50%"><label class="" for="bangla_name"> বাংলায় (অনুমতি/স্বীকৃতিপত্র
                                অনুযায়ী অভ্র/ইউনিকোড ব্যবহার করে লিখুন):
                            </label>
                            <input type="text" class="form-control" name="institute_name_bangla"
                                   v-model="data.institute_name_bangla">
                        </td>
                        <td>
                            <label class="" for="english_name" style="text-align: right">ইংরেজিতে (ব্লক লেটার): </label>
                            &nbsp
                            <input type="text" class="form-control" name="institute_name_new"
                                   v-model="data.institute_name_new">
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td colspan="5"><b>১.১.১ ঠিকানা:</b></td>
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="holding_no">হোল্ডিং নম্বর/রোড:</label> &nbsp
                            <input type="text" class="form-control" name="location" v-model="data.location">
                        </td>
                        <td>
                            <label class="" for="post_office">ডাকঘর:</label> &nbsp
                            <input type="text" class="form-control" name="post_office" v-model="data.post_office">
                        </td>
                        <td>
                            <label class="" for="post_code">পোস্ট কোড:</label> &nbsp
                            <input type="number" class="form-control" name="post_code" v-model="data.post_code">
                        </td>
                        <td>
                            <label class="" for="division">বিভাগ:</label>
                            <select class="form-control" name="division">
                                <option value="" selected>Select</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="district">জেলা:</label>
                            <select class="form-control" name="district">
                                <option value="" selected>Select</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="" for="upazila">উপজেলা/থানা:</label>
                            <select class="form-control" name="upazila">
                                <option value="" selected>Select</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="mouza">মৌজা:</label>
                            <select class="form-control" name="mouza">
                                <option value="" selected>Select</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="union">ইউনিয়ন/ওয়ার্ড:</label>
                            <select class="form-control" name="union">
                                <option value="" selected>Select</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="mobile">মোবাইল নম্বর:</label> &nbsp
                            <input type="number" class="form-control" name="mobphone" v-model="data.mobphone">
                        </td>
                        <td>
                            <label class="" for="alt_mobile">বিকল্প মোবাইর নম্বর:</label> &nbsp
                            <input type="number" class="form-control" name="mobphone_alternate"
                                   v-model="data.mobphone_alternate">
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <label class="" for="phone">ফোন:</label> &nbsp
                            <input type="number" class="form-control" name="telephone" v-model="data.telephone">
                        </td>
                        <td>
                            <label class="" for="email">ই-মেইল:</label> &nbsp
                            <input type="text" class="form-control" name="e_mail" v-model="data.e_mail">
                        </td>
                        <td>
                            <label class="" for="website">ওয়েবসাইট:</label> &nbsp
                            <input type="text" class="form-control" name="web_site" v-model="data.web_site">
                        </td>
                        <td>
                            <label class="" for="constituency_area">নির্বাচনী এলাকা (জাতীয় নম্বর):</label> &nbsp
                            <input type="text" class="form-control" name="ec_national_code"
                                   v-model="data.ec_national_code">
                        </td>
                        <td>
                            <label class="" for="constituency_dist">নির্বাচনী এলাকা (জেলা নম্বর):</label> &nbsp
                            <input type="text" class="form-control" name="ec_district_code"
                                   v-model="data.ec_district_code">

                        </td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- General Info ends here--}}
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১</span>
                </div>
                <div class="form-control bg-number-label">প্রতিষ্ঠান সংক্রান্ত তথ্য</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td colspan="3">
                            <label class="" for="">১.২.১প্রতিষ্ঠানের ধরনঃ</label>
                            <select class="" name="institute_type_id" v-model="data.institute_type_id">
                                <option value="">Select</option>
                                <option value="1">১.স্কুল</option>
                                <option value="3">২.কলেজ</option>
                                <option value="4">৩. স্কুল এন্ড কলেজ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="education_level">১.২ প্রতিষ্ঠানের স্তর :</label>
                            <select class="" name="education_level" v-model="data.education_level_id" disabled>
                                <option value="">Select</option>
                                <option value="12">নিম্ন মাধ্যমিক</option>
                                <option value="13">মাধ্যমিক</option>
                                <option value="11">৮ম শ্রেণি পর্যন্ত সরকারি প্রাথমিক বিদ্যালয়</option>
                                <option value="31">উচ্চ মাধ্যমিক</option>
                                <option value="32">স্নাতক (পাস)</option>
                                <option value="33">স্নাতক (সম্মান)</option>
                                <option value="34">স্নাতকোত্তর</option>
                            </select>
                        </td>
                        <td v-if="data.institute_type_id !=3">
                            <label class="" for="education_group">১.২.১ গ্রুপ স্কুল শাখা (একাধিক হতে
                                পারে):</label>
                            <div class="row">
                                <div class="col">মানবিক <input type="checkbox" v-model="data.arts_group"/></div>
                            </div>
                            <div class="row">
                                <div class="col">বিজ্ঞান <input type="checkbox" v-model="data.science_group"/></div>
                            </div>
                            <div class="row">
                                <div class="col">ব্যবসায় শিক্ষা <input type="checkbox" v-model="data.commerce_group"/>
                                </div>
                            </div>
                        </td>
                        <td v-if="data.institute_type_id !=1">
                            <label class="" for="education_group_col">১.২.২ গ্রুপ কলেজ শাখা:(একাধিক হতে
                                পারে)</label>
                            <div class="row">
                                <div class="col">মানবিক <input type="checkbox" v-model="data.arts_group_col"/></div>
                                <div class="col">বিজ্ঞান <input type="checkbox" v-model="data.science_group_col"/></div>
                            </div>

                            <div class="row">
                                <div class="col">ব্যবসায় শিক্ষা <input type="checkbox"
                                                                       v-model="data.commerce_group_col"/></div>
                                <div class="col">সামাজিক বিজ্ঞান <input type="checkbox"
                                                                        v-model="data.social_science_group"/></div>
                            </div>
                            <div class="row">
                                <div class="col">ইসলামী শিক্ষা <input type="checkbox"
                                                                      v-model="data.islamic_stadies_group"/></div>
                                <div class="col">গার্হস্থ্য বিজ্ঞান <input type="checkbox"
                                                                           v-model="data.home_economic_group"/></div>
                            </div>
                            <div class="row">
                                <div class="col">সংগীত<input type="checkbox" v-model="data.music_group"/></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="education_group_col">১.২.৩ সংযুক্ত কারিগরি শাখার ধরন (প্রযোজ্য
                                ক্ষেত্রে):</label>
                            <div class="row">
                                <div class="col">এসএসসি (ভোক)<input type="checkbox"
                                                                    v-model="data.technical_branch_type"></div>
                                <div class="col">এইচএসসি(ভোক)<input type="checkbox"
                                                                    v-model="data.technical_branch_type_hscvoc"></div>
                            </div>
                            <div class="row">
                                <div class="col">এইচএসসি (বিএম)<input type="checkbox"
                                                                      v-model="data.technical_branch_type_bm"></div>
                                <div class="col">ডিপ্লোমা ইন ফিশারিজ<input type="checkbox"
                                                                           v-model="data.technical_branch_type_fish">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">ডিপ্লোমা ইন এগ্রিকালচার<input type="checkbox"
                                                                               v-model="data.technical_branch_type_agro">
                                </div>
                            </div>
                        </td>

                        <td>
                            <label class="label-date" for="establish_date">১.২.৪ প্রতিষ্ঠার তারিখ :</label> &nbsp
                            <div class="input-group date">
                                <input type="text" v-model="data.establish_date"></i></span>
                            </div>
                        </td>
                        <td>
                            <label>১.২.৫ প্রতিষ্ঠানটিতে ইংরেজি ভার্সনে পাঠদান হয় কি?</label>
                            <select class="" name="english_ver_yn" v-model="data.english_ver_yn">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">১.২.৭ </span>
                </div>
                <div class="form-control bg-number-label">ব্যবস্থাপনা সংক্রান্ত:</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <label class="" for="management">১.২.৭ ব্যবস্থাপনা </label>
                            <select class="" name="management" v-model="data.management">
                                <option value="">Select</option>
                                <option value="1">সরকারি</option>
                                <option value="2">বেসরকারি</option>
                                <option value="3">স্থানীয় সরকার</option>
                                <option value="4">স্বায়ত্তশাসিত</option>
                                <option value="5">খ্রিষ্টান মিশনারি</option>
                                <option value="6">অন্যান্য</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="nationalization_date">১.২.৮ সরকারি হলে জাতীয়করণের তারিখ :</label>
                            <input type="text" v-model="data.nationalization_date"></span>
                        </td>
                        <td>
                            <label>১.২.৯ প্রতিষ্ঠানে শিক্ষার্থীর ধরন:</label>
                            <select class="" name="for_whom" v-model="data.for_whom">
                                <option value="">Select</option>
                                <option value="1">বালক</option>
                                <option value="2">বালিকা</option>
                                <option value="3">সহশিক্ষা একত্রে</option>
                                <option value="4">সহশিক্ষা আলাদা</option>
                            </select>
                        </td>
                        <td>
                            <label>১.৩ ভৌগলিক অবস্থান:</label>
                            <select name="geographical_status" v-model="data.geographical_status">
                                <option value="">Select</option>
                                <option value="1">সমতল</option>
                                <option value="2">পাহাড়ি</option>
                                <option value="3">সমুদ্র উপকূল (বাঁধের ভিতর)</option>
                                <option value="4">সমুদ্র উপকূল (বাঁধের বাইরে)</option>
                                <option value="5">হাওড়/বিল(বাঁধের ভিতরে)</option>
                                <option value="6">হাওড়/বিল(বাঁধের বাইরে)</option>
                                <option value="7">চরাঞ্চল</option>
                                <option value="8">জলাবদ্ধ এলাকা</option>
                                <option value="9">শিল্পাঞ্চল</option>
                                <option value="10">সীমান্ত এলাকা</option>
                                <option value="11">চাবাগান</option>
                                <option value="12">দ্বীপ</option>
                                <option value="13">অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <td>
                        <label>১.৩.১ প্রতিষ্ঠানটি কোন এলাকায়?</label>
                        <select class="" name="area_status1" v-model="data.area_status1">
                            <option value="">Select</option>
                            <option value="1">গ্রামীণ</option>
                            <option value="2">জেলা সদর পৌরসভা</option>
                            <option value="3">উপজেলা সদর পৌরসভা</option>
                            <option value="4">উপজেলা সদর পৌরসভা নয়</option>
                            <option value="5">সিটি কর্পোরেশন</option>
                            <option value="6">অন্যান্য পৌর এলাকা</option>
                        </select>
                    </td>
                    <td class="form-inline">
                        <label>১.৩.২ প্রশাসনিক ইউনিটের সাথে যোগাযোগ ব্যবস্থার
                            ধরন:</label>
                        <select name="admin_unit_communication" v-model="data.admin_unit_communication">
                            <option value="">Select</option>
                            <option value="1">উত্তম</option>
                            <option value="2">মোটমুটি</option>
                            <option value="3">দুর্গম</option>
                        </select>
                    </td>
                    <td>
                        <label>১.৩.৩ নিকটবর্তী অনুরুপ শিক্ষা প্রতিষ্ঠানের দূরত্ব: &nbsp;</label>
                        <input type="text" class="w-25" v-model="data.nearest_inst_distant">কি.মি.
                    </td>
                    <td>
                        <label>১.৪ মূল প্রতিষ্ঠান ব্যতীত অন্যত্র শাখা আছে কি</label>
                        <select class="" name="branch_yn" v-model="data.branch_yn">
                            <option value="">Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <label>১.৪.১ উত্তর হ্যাঁ হলে, শাখা সংখ্যা</label> &nbsp
                            <input type="number" class="w-25" v-model="data.branch_no">
                        </td>
                        <td>
                            <label>১.৪.২ প্রতিষ্ঠানটিতে ডাবল-শিফট আছে কি? </label>
                            <select name="double_shipt_yn" v-model="data.double_shipt_yn">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                        <td>
                            <label>১.৪.৩ প্রতিষ্ঠানটির নিজস্ব ক্যাম্পাস আছে
                                কি?</label>
                            <select name="campus_yn" v-model="data.campus_yn">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                        <td>
                            <label>১.৪.৪ প্রতিষ্ঠানটির ক্যাম্পাস অন্য কোন শিক্ষা
                                প্রতিষ্ঠান আছে?</label>
                            <select name="attach_inst_yn" v-model="data.attach_inst_yn">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                    <tr>
                        <td>
                            <label>১.৪.৫ উত্তর হ্যাঁ হলে, প্রতিষ্ঠানটির ধরন: </label>
                            <select name="">
                                <option value="" selected>Select</option>
                                <option value="1">প্রাথমিক বিদ্যালয়</option>
                                <option value="2">কিন্ডার গার্টেন</option>
                                <option value="3">এবতেদায়ী মাদ্রাসা</option>
                                <option value="4">মাধ্যমিক স্কুল</option>
                                <option value="5">কলেজ</option>
                                <option value="6">অন্যান্য</option>
                            </select>
                        </td>
                        <td>
                            <label>১.৫ প্রতিষ্ঠানটি এমপিওভুক্ত কি?</label>
                            <select class="" name="mpo_status" v-model="data.mpo_status">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                                <option value="3">প্রযোজ্য নয়-৩</option>
                            </select>
                        </td>
                        <td colspan="2">
                            <label>১.৫.১ কারিগরি শাখা এমপিওভুক্ত কি?</label>
                            <select name="technical_branch_mpo_status" v-model="data.technical_branch_mpo_status">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                                <option value="3">প্রযোজ্য নয়-৩</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <label class="font-weight-bold">১.২.৬ স্বীকৃতি সংক্রান্ত তথ্য (সরকারি প্রতিষ্ঠানের ক্ষেত্রে
                            প্রযোজ্য
                            নয়):</label>
                        <table class="table table-bordered">
                            <tr class="custom-table-header">
                                <td style="text-align:center">স্তর</td>
                                <td style="text-align:center">স্বীকৃতি/অনুমতি (টিক চিহ্ন দিন)</td>
                                <td style="text-align:center">প্রথম অনুমতির তারিখ</td>
                                <td style="text-align:center">প্রথম স্বীকৃতির তারিখ</td>
                                <td style="text-align:center">সর্বশেষ স্বীকৃতি/ অনুমতি মেয়াদ শেষ হওয়ার তারিখ</td>
                            </tr>
                            <tbody>
                            <tr v-for="item in data.institutes_recognition">
                                <td>@{{ levelName(item.education_level_id) }}</td>
                                <td><select class="" name="" v-model="item.recognition_status">
                                        <option value="">Select</option>
                                        <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                        <option value="2">অনুমতি প্রাপ্ত</option>
                                        <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                <td>
                                    <input type="text" v-model="item.permitted_date"/>
                                </td>
                                <td>
                                    <input type="text" v-model="item.recognition_date">
                                </td>
                                <td>
                                    <input type="text" v-model="item.recognition_expire_date">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-md-6">
                        <label class="font-weight-bold">১.৫.২ প্রতিষ্ঠানটি এমপিও ভূক্ত হলে স্তর ও তারিখ:</label>
                        <table class="table table-bordered" style="text-align:center">
                            <tr class="custom-table-header">
                                <td>এমপিওভুক্তির স্তর</td>
                                <td>এমপিও ভুক্তির তারিখ</td>
                            </tr>
                            <tbody>
                            <tr v-for="mpo in data.institutes_mpo_status">
                                <td>@{{levelMpo(mpo.education_level_id) }}</td>
                                <td>
                                    <input type="text" v-model="mpo.mpo_date"/>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">১.৬</span>
                </div>
                <div class="form-control bg-number-label">কমিটি সংক্রান্ত তথ্য</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <label>১.৬ কমিটির ধরন:</label>
                            <select class="custom-select" v-model="data.committees[0].type" style="width:120px">
                                <option value="">Select</option>
                                <option value="1">ম্যানেজিং কমিটি</option>
                                <option value="2">গর্ভনিং বডি</option>
                                <option value="3">এডহক কমিটি</option>
                                <option value="4">নির্বাহী কমিটি</option>
                                <option value="5">প্রযোজ্য নয়</option>
                                <option value="6">অন্যান্য</option>
                            </select>
                        </td>
                        <td><label>১.৬.১ কমিটি থাকলে: </label>
                            <table class="table table-bordered" style="text-align:center">
                                <tr>
                                    <td>অনুমোদনের তারিখ</td>
                                    <td>মেয়াদ উত্তীর্ণের তারিখ</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="text" v-model="data.committees[0].approve_date"/>
                                    </td>
                                    <td>
                                        <input type="text" v-model="data.committees[0].expire_date"/>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td><label>১.৬.২ কমিটিতে সদস্য সংখ্যা:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="total"> মোট:</label>
                                    <input type="number" class="form-control" v-model="data.committees[0].total_member">
                                </div>
                                <div class="col-md-4">
                                    <label for="female"> মহিলা: </label>
                                    <input type="number" class="form-control" v-model="data.committees[0].total_female">
                                </div>
                            </div>
                        </td>
                        <td><label>১.৬.৩ কমিটি না থাকলে বিগত কমিটির মেয়াদ শেষ হওয়ার তারিখ</label>
                            <input type="text" v-model="data.committees[0].last_commitee_expire_date">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="row">
                                <div class="col-md-6"><label> ৩.১ ২০২০ সালে ম্যানেজিং কমিটির কতটি সভা হয়েছে? </label>
                                </div>
                                <div><input type="text" class="w-25" v-model="data.committees[0].last_yr_meeting"> টি
                                </div>
                            </div>

                        </td>
                        <td colspan="2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="" for="pti_meeting"> ৩.২ ২০২১ সালে পিটিএ এর কতগুলো সভা
                                        হয়েছে? </label></div>
                                <div><input type="text" class="w-25" v-model="data.committees[0].last_yr_pta_meeting">
                                    টি
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label class="" for="meeting_discuss">৩.১.১ ম্যানেজিং কমিটির সভায় শিক্ষার
                                মানোন্নয়ন সম্পর্কিত বিষয়ে কী কী আলোচনা হয়েছে?</label>
                            <table class="table table-bordered">

                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_teacher_training">শিক্ষক প্রশিক্ষণ
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_teacher_std_presents">শিক্ষক ও শিক্ষার্থীর উপস্থিতি
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_awarness_program">সচেতনতা মূলক কার্যক্রম
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_eve_teasing">ইভটিজিং
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="mr-2" type="checkbox" v-model="data.committees[0].mc_bulling_related" >নিগ্রহ/পীড়ন
                                        (বুলিং)
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_early_marriage">বাল্যবিবাহ
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_poor_std">পিছিয়ে পড়া
                                        শিক্ষার্থী
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_disabled_std">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_std_transport">শিক্ষার্থীদের যাতায়াতে নিরাপত্তা
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_anti_drug">মাদক বিরোধী
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_dropout">ঝড়ে পড়া রোধ
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].mc_saferoad">নিরাপদ সড়ক
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input class="mr-2" type="checkbox" v-model="data.committees[0].mc_other">অন্যান্য
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">
                            <label class="" for="pti_discuss">৩.২.১ পিটিএ সভায় কী কী বিষয় আলোচনা ও সিদ্ধান্ত
                                গৃহীত হয়েছ?</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_std_present">শিক্ষার্থীর
                                        উপস্থিতি
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].ptaawarnessprogram">সচেতনতামূলক
                                        কার্যক্রম
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_bulling_related">নিগ্রহ/পীড়ন
                                        (বুলিং)
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_early_marriage">বাল্যবিবাহ
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_eve_teasing">ইভটিজিং
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_militant">জঙ্গীবাদ দমন
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_std_transport">শিক্ষার্থীদের
                                        যাতায়াতে নিরাপত্তা
                                    </td>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_anti_drug">মাদক বিরোধী
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_acid_throw">এসিড নিক্ষেপ
                                    </td>
                                    <td colspan="2">
                                        <input class="mr-2" type="checkbox" v-model="data.committees[0].pta_other">অন্যান্য
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
{{--Page wise js--}}
@section('javascript')
    <script src="{{ asset('js/firstPage.js') }}" type="module" defer></script>
@stop