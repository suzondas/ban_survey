@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')
        <hr>
        <h3 class="text-center">সেকশন ১: মৌলিক তথ্য (ক)</h3>
        <div class="row">
            <div class="col-md-6">
                <label for="eiin">ইআইআইএন (EIIN): &nbsp</label><input type="number" id="eiin">
            </div>
            <div class="col-md-6 d-flex flex-row-reverse">
                <table class="" style="width:300px;" border="1">
                    <tr>
                        <td rowspan="2" class="align-middle">GIS(জিআইএস)</td>
                        <td class="text-center">অক্ষাংশ (Latitude)</td>
                        <td class="text-center">দ্রাঘিমাংশ(Longititude)</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="" name="lat"
                                   id="lat"></td>
                        <td><input type="text" class="" name="long"
                                   id="long"></td>
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
                        <td colspan="2">১.১ প্রতিষ্ঠানের নাম:</td>
                    </tr>
                    <tr>
                        <td><label class="" for="bangla_name"> বাংলায় (অনুমতি/স্বীকৃতিপত্র
                                অনুযায়ী): </label>
                            <input type="text" class="form-control" name="bangla_name"
                                   id="bangla_name">
                        </td>
                        <td>
                            <label class="" for="english_name" style="text-align: right">ইংরেজিতে (ব্লক লেটার): </label>
                            &nbsp
                            <input type="text" class="form-control" name="english_name"
                                   id="english_name">
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td colspan="4"><b>১.১.১ ঠিকানা:</b></td>
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="holding_no">হোল্ডিং নম্বর:</label> &nbsp
                            <input type="text" class="form-control" name="holding_no" id="holding_no">
                        </td>
                        <td>
                            <label class="" for="road">রোড:</label> &nbsp
                            <input type="text" class="form-control" name="road" id="road">
                        </td>
                        <td>
                            <label class="" for="post_office">ডাকঘর:</label> &nbsp
                            <input type="text" class="form-control" name="post_office" id="post_office">
                        </td>
                        <td>
                            <label class="" for="post_code">পোস্ট কোড:</label> &nbsp
                            <input type="number" class="form-control" name="post_code" id="post_code">
                        </td>
                    </tr>

                    <tr>
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
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="union">ইউনিয়ন/ওয়ার্ড:</label>
                            <select class="form-control" name="union">
                                <option value="" selected>Select</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="mobile">১.১.২ মোবাইল নম্বর:</label> &nbsp
                            <input type="number" class="form-control" name="mobile"
                                   id="mobile">
                        </td>
                        <td>
                            <label class="" for="alt_mobile">বিকল্প মোবাইর নম্বর:</label> &nbsp
                            <input type="number" class="form-control" name="alt_mobile"
                                   id="alt_mobile">
                        </td>
                        <td>
                            <label class="" for="phone">ফোন:</label> &nbsp
                            <input type="number" class="form-control" name="phone"
                                   id="phone">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="email">ই-মেইল:</label> &nbsp
                            <input type="text" class="form-control" name="email"
                                   id="email">
                        </td>
                        <td>
                            <label class="" for="website">ওয়েবসাইট:</label> &nbsp
                            <input type="text" class="form-control" name="website"
                                   id="website">
                        </td>
                        <td>
                            <label class="" for="constituency_area">নির্বাচনী এলাকা (জাতীয় নম্বর):</label> &nbsp
                            <input type="text" class="form-control" name="constituency_area"
                                   id="constituency_area">
                        </td>
                        <td>
                            <label class="" for="constituency_dist">নির্বাচনী এলাকা (জেলা নম্বর):</label> &nbsp
                            <input type="text" class="form-control" name="constituency_dist"
                                   id="constituency_dist">
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
                        <td>
                            <label class="" for="education_level">১.২ প্রতিষ্ঠানের স্তর :</label>
                            <select class="" name="education_level">
                                <option value="" selected>Select</option>
                                <option value="1">নিম্ন মাধ্যমিক</option>
                                <option value="2">মাধ্যমিক</option>
                                <option value="3">৮ম শ্রেণি পর্যন্ত সরকারি প্রাথমিক বিদ্যালয়</option>
                                <option value="4">উচ্চ মাধ্যমিক</option>
                                <option value="4">স্নাতক (পাস)</option>
                                <option value="5">স্নাতক (সম্মান)</option>
                                <option value="6">স্নাতকোত্তর</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="education_group">১.২.১ গ্রুপ স্কুল শাখা (একাধিক হতে
                                পারে):</label>
                            <select class="" name="education_group">
                                <option value="" selected>Select</option>
                                <option value="1">মানবিক</option>
                                <option value="2">বিজ্ঞান</option>
                                <option value="3">ব্যবসা শিক্ষা</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="education_group_col">১.২.২ গ্রুপ কলেজ শাখা:(একাধিক হতে
                                পারে)</label>
                            <select class="" name="education_group_col">
                                <option value="" selected>Select</option>
                                <option value="1">মানবিক</option>
                                <option value="2">বিজ্ঞান</option>
                                <option value="3">ব্যবসায় শিক্ষা</option>
                                <option value="4">সামাজিক বিজ্ঞান</option>
                                <option value="4">ডিপ্লোমা ইন ফিশারিজ</option>
                                <option value="5">ডিপ্লোমা ইন কৃষি</option>
                                <option value="6">ইসলামী শিক্ষা</option>
                                <option value="7">গার্হস্থ্য বিজ্ঞান</option>
                                <option value="8">সংগীত</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="education_group_col">১.২.৩ সংযুক্ত কারিগরি শাখার ধরন (প্রযোজ্য
                                ক্ষেত্রে):</label>
                            <select class="" name="education_group_col">
                                <option value="" selected>Select</option>
                                <option value="1">এসএসসি (ভোক)</option>
                                <option value="2">এইচএসসি (বিএম)</option>
                                <option value="3">এইচএসসি (ভোক)</option>
                            </select>
                        </td>

                        <td>
                            <label class="label-date" for="establish_date">১.২.৪ প্রতিষ্ঠার তারিখ :</label> &nbsp
                            <div class="input-group date">
                                <input type="date" class=""><span class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </div>
                        </td>
                        <td>
                            <label class="" for="english_version">১.২.৫ প্রতিষ্ঠানটিতে ইংরেজি ভার্সনে পাঠদান হয়
                                কি?</label>
                            <select class="" name="english_version">
                                <option value="" selected>Select</option>
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
                    <span class="input-group-text bg-number">১.২.৬ </span>
                </div>
                <div class="form-control bg-number-label">স্বীকৃতি সংক্রান্ত তথ্য (সরকারি প্রতিষ্ঠানের ক্ষেত্রে প্রযোজ্য
                    নয়):
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered" style="text-align:center">
                    <tr>
                        <td>স্তর</td>
                        <td>স্বীকৃতি/অনুমতি (টিক চিহ্ন দিন)</td>
                        <td>প্রথম অনুমতির তারিখ</td>
                        <td>প্রথম স্বীকৃতির তারিখ</td>
                        <td>সর্বশেষ স্বীকৃতি/ অনুমতি মেয়াদ শেষ হওয়ার তারিখ</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>১। নিম্ন মাধ্যমিক</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="nimmo_first_recog" id="nimmo_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="nimmo_first_approve" id="nimmo_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="nimmo_not_apply" id="nimmo_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">২। মাধ্যমিক</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="maddo_first_recog" id="maddo_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="maddo_first_approve" id="maddo_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="maddo_not_apply" id="maddo_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">৩। উচ্চ মাধ্যমিক (এইচএসসি)</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="uccho_first_recog" id="uccho_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="uccho_first_approve" id="uccho_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="uccho_not_apply" id="uccho_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">৪। স্নাতক (পাস)</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="degpass_first_recog" id="degpass_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="degpass_first_approve"
                                   id="degpass_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="degpass_not_apply" id="degpass_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">৫। স্নাতক (সম্মান)</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="honors_first_recog" id="honors_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="honors_first_approve" id="honors_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="honors_not_apply" id="honors_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">৬। স্নাতকোত্তর</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="masters_first_recog" id="masters_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="masters_first_approve"
                                   id="masters_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="masters_not_apply" id="masters_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">৭। এসএসসি ভোক</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="sscvoc_first_recog" id="sscvoc_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="sscvoc_first_approve" id="sscvoc_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="sscvoc_not_apply" id="sscvoc_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">৮। এইচএসসি ভোক</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="hscvoc_first_recog" id="hscvoc_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="hscvoc_first_approve" id="hscvoc_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="hscvoc_not_apply" id="hscvoc_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">৯। এইচএসসি বিএম</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="hscbm_first_recog" id="hscbm_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="hscbm_first_approve" id="hscbm_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="hscbm_not_apply" id="hscbm_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">১০। ডিপ্লোমা ও সমমান</td>
                        <td><select class="" style="widtd: 150px" name="nimmo_recog">
                                <option value="" selected>Select</option>
                                <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                <option value="2">অনুমতি প্রাপ্ত</option>
                                <option value="3">প্রযোজ্য নয়</option>
                            </select></td>
                        <td>
                            <input type="date" name="diploma_first_recog" id="diploma_first_recog"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="diploma_first_approve"
                                   id="diploma_first_approve"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <input type="date" name="diploma_not_apply" id="diploma_not_apply"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                    </tr>
                    </tbody>
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
                            <select class="" name="management">
                                <option value="" selected>Select</option>
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
                            <input type="date" name="nationalization_date" id="nationalization_date"
                                   class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-td"></i></span>
                        </td>
                        <td>
                            <label class="" for="management">১.২.৯ প্রতিষ্ঠানে শিক্ষার্থীর ধরন:</label>
                            <select class="" name="management">
                                <option value="" selected>Select</option>
                                <option value="1">বালক</option>
                                <option value="2">বালিকা</option>
                                <option value="3">সহশিক্ষা একত্রে</option>
                                <option value="4">সহশিক্ষা আলাদা</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="management">১.৩ ভৌগলিক অবস্থান:</label>
                            <select class="" name="management">
                                <option value="" selected>Select</option>
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
                        <label class="" for="management">১.৩.১ প্রতিষ্ঠানটি কোন এলাকায়?</label>
                        <select class="" name="management">
                            <option value="" selected>Select</option>
                            <option value="1">গ্রামীণ</option>
                            <option value="2">জেলা সদর পৌরসভা</option>
                            <option value="3">উপজেলা সদর পৌরসভা</option>
                            <option value="4">উপজেলা সদর পৌরসভা নয়</option>
                            <option value="5">সিটি কর্পোরেশন</option>
                            <option value="6">অন্যান্য পৌর এলাকা</option>
                        </select>
                    </td>
                    <td>
                        <label class="" for="management">১.৩.২ প্রশাসনিক ইউনিটের সাথে যোগাযোগ ব্যবস্থার
                            ধরন:</label>
                        <select class="" name="management">
                            <option value="" selected>Select</option>
                            <option value="1">উত্তম</option>
                            <option value="2">মোটমুটি</option>
                            <option value="3">দুর্গম</option>
                        </select>
                    </td>
                    <td>
                        <label class="" for="branch_no">১.৩.৩ নিকটবর্তী অনুরুপ শিক্ষা প্রতিষ্ঠানের
                            দূরত্ব</label> &nbsp
                        <input type="number" class="form-control" name="branch_no"
                               id="branch_no">
                    </td>
                    <td>
                        <label class="" for="branch_no">১.৪.১ উত্তর হ্যাঁ হলে, শাখা সংখ্যা</label> &nbsp
                        <input type="number" class="form-control" name="branch_no"
                               id="branch_no">
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="" for="double_shift">১.৪.২ প্রতিষ্ঠানটিতে ডাবল-শিফ্ট আছে কি? </label>
                            <select class="" name="double_shift">
                                <option value="" selected>Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="own_campus">১.৪.৩ প্রতিষ্ঠানটির নিজস্ব ক্যাম্পাস আছে
                                কি?</label>
                            <select class="" name="own_campus">
                                <option value="" selected>Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="otder_inst">১.৪.৪ প্রতিষ্ঠানটির ক্যাম্পাস অন্য কোন শিক্ষা
                                প্রতিষ্ঠান আছে?</label>
                            <select class="" name="otder_inst">
                                <option value="" selected>Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>

                        <td>
                            <label class="" for="otder_insttype">১.৪.৫ উত্তর হ্যাঁ হলে, প্রতিষ্ঠানটির
                                ধরন: </label>
                            <select class="" name="otder_insttype">
                                <option value="" selected>Select</option>
                                <option value="1">প্রাথমিক বিদ্যালয়</option>
                                <option value="2">কিন্ডার গার্টেন</option>
                                <option value="3">এবতেদায়ী মাদ্রাসা</option>
                                <option value="4">মাধ্যমিক স্কুল</option>
                                <option value="5">কলেজ</option>
                                <option value="6">অন্যান্য</option>
                            </select>
                        </td>
                    <tr>
                        <td>
                            <label class="" for="mpo_yn">১.৫ প্রতিষ্ঠানটি এমপিওভুক্ত কি?</label>
                            <select class="" name="mpo_yn">
                                <option value="" selected>Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="technical_mpo_yn">১.৫.১ কারিগরি শাখা এমপিওভুক্ত কি?</label>
                            <select class="" name="technical_mpo_yn">
                                <option value="" selected>Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                        <td>
                            <label class="" for="technical_mpo_yn">১.৫.১ কারিগরি শাখা এমপিওভুক্ত কি?</label>
                            <select class="" name="technical_mpo_yn">
                                <option value="" selected>Select</option>
                                <option value="1">হ্যাঁ-১</option>
                                <option value="2">না-২</option>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                </table>

                <div class="row container">
                    <label>১.৫.২ প্রতিষ্ঠানটি এমপিও ভূক্ত হলে স্তর ও তারিখ:</label>
                    <table class="table table-bordered" style="text-align:center">
                        <thead>
                        <tr>
                            <td>এমপিওভুক্তির স্তর</td>
                            <td>এমপিও ভুক্তির তারিখ</td>
                            <td>এমপিওভুক্তির স্তর</td>
                            <td>এমপিও ভুক্তির তারিখ</td>
                            <td>এমপিওভুক্তির স্তর</td>
                            <td>এমপিও ভুক্তির তারিখ</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">১। নিম্ন মাধ্যমিক</td>
                            <td>
                                <input type="date" name="nimmo_mpo" id="nimmo_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                            <td scope="row">২। মাধ্যমিক (এসএসসি)</td>
                            <td>
                                <input type="date" name="maddo_mpo" id="maddo_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                            <td scope="row">৩। উচ্চ মাধ্যমিক (এইচএসসি)</td>
                            <td>
                                <input type="date" name="uchho_mpo" id="uchho_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">৪। স্নাতক</td>
                            <td>
                                <input type="date" name="deg_mpo" id="deg_mpo" class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                            <td scope="row">৫। স্নাতক (সম্মান)</td>
                            <td>
                                <input type="date" name="honours_mpo" id="honours_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                            <td scope="row">৬। স্নাতকো্ত্তর</td>
                            <td>
                                <input type="date" name="masters_mpo" id="masters_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">৭।এসএসসি ভোক</td>
                            <td>
                                <input type="date" name="sscvoc_mpo" id="sscvoc_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                            <td scope="row">৮। এইচএসসি ভোক</td>
                            <td>
                                <input type="date" name="hscvoc_mpo" id="hscvoc_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                            <td scope="row">৯। এইচএসসি বিএম</td>
                            <td>
                                <input type="date" name="hscbm_mpo" id="hscbm_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">১০। ডিপ্লোমা ইন ফিশারিজ</td>
                            <td>
                                <input type="date" name="dip_fish_mpo" id="dip_fish_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                            <td scope="row">১১। ডিপ্লোমা ইন এগ্রিকালচার</td>
                            <td>
                                <input type="date" name="dip_agri_mpo" id="dip_agri_mpo"
                                       class="form-control"><span
                                        class="input-group-addon"><i
                                            class="glyphicon glyphicon-td"></i></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
                <div class="row">
                    <div class="col">
                        <div class=""><label>১.৬ কমিটির ধরন:</label>
                            <select class="custom-select" name="" style="width:100px">
                                <option value="" selected>Select</option>
                                <option value="1">ম্যানেজিং কমিটি</option>
                                <option value="2">গর্ভনিং বডি</option>
                                <option value="3">এডহক কমিটি</option>
                                <option value="4">নির্বাহী কমিটি</option>
                                <option value="5">প্রযোজ্য নয়</option>
                                <option value="6">অন্যান্য</option>
                            </select>
                        </div>
                    </div>
                    <div class="col table table-bordered ">
                        <div class=""><label>১.৬.২ কমিটিতে সদস্য সংখ্যা:</label>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4">
                                <label for="men"> পুরুষ: </label>
                                <input type="number" class="form-control" name="men"
                                       id="men">
                            </div>
                            <div class="col-md-4">
                                <label for="female"> মহিলা: </label>
                                <input type="number" class="form-control" name="female"
                                       id="female">
                            </div>
                            <div class="col-md-4">
                                <label for="total"> মোট:</label>
                                <input type="number" class="form-control" name="total"
                                       id="total">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class=""><label>১.৬.১ কমিটি থাকলে: </label>
                        </div>
                        <table class="table table-bordered" style="text-align:center">
                            <tr>
                                <td>অনুমোদনের তারিখ</td>
                                <td>মেয়াদ উত্তীর্ণের তারিখ</td>
                            </tr>
                            <tbody>
                            <tr>
                                <td>
                                    <input type="date" name="committee_appdate" id="committee_appdate"
                                           class="form-control"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-td"></i></span>
                                </td>
                                <td>
                                    <input type="date" name="committee_expdate" id="committee_expdate"
                                           class="form-control"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-td"></i></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col table table-bordered ml-2">
                        <div class=""><label>১.৬.৩ কমিটি না থাকলে বিগত কমিটির মেয়াদ শেষ হওয়ার তারিখ</label>
                        </div>
                        <div class="input-group date">
                            <input type="date" name="committee_appdate" id="committee_appdate"
                                   class="form-control"><span
                                    class="input-group-addon"><i class="glyphicon glyphicon-td"></i></span>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="label-text" for="meeting_no"> ৩.১ ২০২০ সালে ম্যানেজিং কমিটির কতটি সভা
                                হয়েছে? </label>
                            <input type="text" class="w-50" name="meeting_no"
                                   id="meeting_no">  টি
                        </div>
                        <div class="col-md-4">
                            <label class="label-number" for="meeting_discuss">৩.১.১ ম্যানেজিং কমিটির সভায় শিক্ষার
                                মানোন্নয়ন সম্পর্কিত বিষয়ে কী কী আলোচনা হয়েছে?</label>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">শিক্ষক প্রশিক্ষণ<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">শিক্ষক ও শিক্ষার্থীর উপস্থিতি<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">নিগ্রহ/পীড়ন (বুলিং)<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">বাল্যবিবাহ<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">পিছিয়ে পড়া শিক্ষার্থী<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">শিক্ষার্থীদের যাতায়াতে নিরাপত্তা<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">মাদক বিরোধী <br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">ঝড়ে পড়া রোধ<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">নিরাপদ সড়ক<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">অন্যান্য
                        </div>
                        <div class="col-md-2">
                            <label class="label-text" for="pti_meeting"> ৩.২ ২০২১ সালে পিটিএ এর কতগুলো সভা হয়েছে? </label>
                            <input type="text" class="w-50" name="pti_meeting"
                                   id="pti_meeting" style="width: 100px">  টি
                        </div>
                        <div class="col-md-4">
                            <label class="label-number" for="pti_discuss">৩.২.১ পিটিএ সভায় কী কী বিষয় আলোচনা ও সিদ্ধান্ত
                                গৃহীত হয়েছ?</label>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">শিক্ষার্থীর উপস্থিতি<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">সচেতনতামূলক কার্যক্রম<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">নিগ্রহ/পীড়ন (বুলিং)<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">বাল্যবিবাহ<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">পিছিয়ে পড়া শিক্ষার্থী<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">শিক্ষার্থীদের যাতায়াতে নিরাপত্তা<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">মাদক বিরোধী <br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">ঝড়ে পড়া রোধ<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">নিরাপদ সড়ক<br>
                            <input class="mr-2" type="checkbox" name="kup" id="kup" value="1">অন্যান্য
                        </div>
                    </div>
            </div>
        </div>

    @include('components/footer');

    </div>
@endsection
