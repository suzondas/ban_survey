@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')

        
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="eiin">ইআইআইএন (EIIN): &nbsp</label><input type="number" id="eiin"><br>
                </div>
                <div class="col-md-6 d-flex flex-row-reverse">
                        <table class="" style="width:300px;" border="1">
                            <tr>
                                <td rowspan="2" class="align-middle">GIS(জিআইএস)</td>
                                <td class="text-center">অক্ষাংশ (Latitude)</td>
                                  <td class="text-center">দ্রাঘিমাংশ(Longititude)</td>
                            </tr>
                              <tr>
                                <td> <input type="text" class="" name="lat"
                               id="lat"></td>
                                  <td> <input type="text" class="" name="long"
                               id="long"></td>
                            </tr>
                             
                        </table>
                </div>
            </div>

            <div class="header">
                <h3 style="text-align:center">সেকশন ১: মৌলিক তথ্য</h3>
            </div>
            <div class="body">
                <div class="row border border-info py-1">
                    <div class="col">
                        <label class="label-text" for="bangla_name">১.১ প্রতিষ্ঠানের নাম: বাংলায় (অনুমতি/স্বীকৃতিপত্র
                            অনুযায়ী): </label> &nbsp;
                        <input type="text" class="form-control" name="bangla_name"
                               id="bangla_name">
                    </div>

                    <div class="col">
                        <label class="label-text" for="english_name">ইংরেজিতে (ব্লক লেটার): </label> &nbsp
                        <input type="text" class="form-control" name="english_name"
                               id="english_name">
                    </div>
                </div>
                <br>

                <div class="row border border-info py-1">
                    <div class="col">
                        <label class="label-number" for="holding_no">১.১.১ ঠিকানা: গ্রাম/হোল্ডিং নম্বর:</label> &nbsp
                        <input type="text"  class="form-control" name="holding_no" id="holding_no">
                    </div>
                    <div class="col">
                        <label class="label-number" for="road">রোড:</label> &nbsp
                        <input type="text"  class="form-control" name="road" id="road">
                    </div>
                    <div class="col">
                        <label class="label-number" for="post_office">ডাকঘর:</label> &nbsp
                        <input type="text"  class="form-control" name="post_office" id="post_office">
                    </div>
                    <div class="col">
                        <label class="label-number" for="post_code">পোস্ট কোড:</label> &nbsp
                        <input type="number"  class="form-control" name="post_code" id="post_code">
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col">
                        <label class="label-number" for="division">বিভাগ:</label>
                        <select class="custom-select" name="division">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-number" for="district">জেলা:</label>
                        <select class="custom-select" name="district">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-number" for="upazila">উপজেলা/থানা:</label>
                        <select class="custom-select" name="upazila">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-number" for="mouza">মৌজা:</label>
                        <select class="custom-select" name="mouza">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-number" for="union">ইউনিয়ন/ওয়ার্ড:</label>
                        <select class="custom-select" name="union">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                </div>
                <br>
                   <div class="row border border-info py-1">
                    <div class="col">
                        <label class="label-number" for="mobile">১.১.২ মোবাইল নম্বর:</label> &nbsp
                        <input type="number"  class="form-control" name="mobile"
                               id="mobile">
                    </div>
                    <div class="col">
                        <label class="label-number" for="alt_mobile">বিকল্প মোবাইর নম্বর:</label> &nbsp
                        <input type="number"  class="form-control" name="alt_mobile"
                               id="alt_mobile">
                    </div>
                    <div class="col">
                        <label class="label-number" for="phone">ফোন:</label> &nbsp
                        <input type="number"  class="form-control" name="phone"
                               id="phone">
                    </div>
                    <div class="col">
                        <label class="label-number" for="email">ই-মেইল:</label> &nbsp
                        <input type="text"  class="form-control" name="email"
                               id="email">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">ওয়েবসাইট:</label> &nbsp
                        <input type="text"  class="form-control" name="website"
                               id="website">
                    </div>
                </div>
                <br>
                    <div class="row border border-info py-1">
                    <div class="col-md-2">
                        <label class="label-number" for="constituency_area">নির্বাচনী এলাকা (জাতীয় নম্বর):</label> &nbsp
                        <input type="text"  class="form-control" name="constituency_area"
                               id="constituency_area">
                    </div>
                    <div class="col-md-2">
                        <label class="label-number" for="constituency_dist">নির্বাচনী এলাকা (জেলা নম্বর):</label> &nbsp
                        <input type="text"  class="form-control" name="constituency_dist"
                               id="constituency_dist">
                    </div>
                   </div>
                   <br>
                <div class="row border border-info py-1">
                    <div class="col">
                        <label class="label-number" for="education_level">১.২  প্রতিষ্ঠানের স্তর :</label>
                        <select class="custom-select" name="education_level">
                            <option value="" selected>Select</option>
                            <option value="1">নিম্ন মাধ্যমিক</option>
                            <option value="2">মাধ্যমিক</option>
                            <option value="3">৮ম শ্রেণি পর্যন্ত সরকারি প্রাথমিক বিদ্যালয়</option>
                            <option value="4">উচ্চ মাধ্যমিক</option>
                            <option value="4">স্নাতক (পাস)</option>
                            <option value="5">স্নাতক (সম্মান)</option>
                            <option value="6">স্নাতকোত্তর</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-number" for="education_group">১.২.১ গ্রুপ স্কুল শাখা (একাধিক হতে পারে):</label>
                        <select class="custom-select" name="education_group">
                            <option value="" selected>Select</option>
                            <option value="1">মানবিক</option>
                            <option value="2">বিজ্ঞান</option>
                            <option value="3">ব্যবসা শিক্ষা</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-number" for="education_group_col">১.২.২ গ্রুপ কলেজ শাখা:(একাধিক হতে পারে)</label>
                        <select class="custom-select" name="education_group_col">
                            <option value="" selected>Select</option>
                            <option value="1">মানবিক</option>
                            <option value="2">বিজ্ঞান</option>
                            <option value="3">ব্যবসায় শিক্ষা</option>
                            <option value="4">সামাজিক বিজ্ঞান</option>
                            <option value="4">ডিপ্লোমা ইন ফিশারিজ</option>
                            <option value="5">ডিপ্লোমা ইন কৃষি</option>
                            <option value="6">ইসলামী শিক্ষা </option>
                            <option value="7">গার্হস্থ্য বিজ্ঞান</option>
                            <option value="8">সংগীত</option>
                        </select>
                    </div>
                     <div class="col">
                        <label class="label-number" for="education_group_col">১.২.৩  সংযুক্ত কারিগরি শাখার ধরন (প্রযোজ্য ক্ষেত্রে):</label>
                        <select class="custom-select" name="education_group_col">
                            <option value="" selected>Select</option>
                            <option value="1">এসএসসি (ভোক)</option>
                            <option value="2">এইচএসসি (বিএম)</option>
                            <option value="3">এইচএসসি (ভোক)</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col-md-4">
                        <label class="label-date" for="establish_date">১.২.৪  প্রতিষ্ঠার তারিখ :</label> &nbsp
                        <div class="input-group date">
                      <input type="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                     <!-- $('#sandbox-container .input-group.date').datepicker({
                    format: "dd/mm/yyyy"
                }); -->
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="label-number" for="english_version">১.২.৫ প্রতিষ্ঠানটিতে ইংরেজি ভার্সনে পাঠদান হয় কি?</label>
                        <select class="custom-select" name="english_version">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
            </div>
            <br>
            <div class="row border border-info py-1">
                    <div class="col">
                        <div class=""><label>১.২.৬ স্বীকৃতি সংক্রান্ত তথ্য (সরকারি প্রতিষ্ঠানের ক্ষেত্রে প্রযোজ্য নয়):</label>
                        </div>
                        <table class="table table-bordered" style="text-align:center">
                              <thead>
                                <tr>
                                  <th scope="col">স্তর</th>
                                  <th scope="col">স্বীকৃতি/অনুমতি (টিক চিহ্ন দিন)</th>
                                  <th scope="col">প্রথম অনুমতির তারিখ</th>
                                  <th scope="col">প্রথম স্বীকৃতির তারিখ</th>
                                  <th scope="col">সর্বশেষ স্বীকৃতি/অনুমতি মেয়াদ শেষ হওয়ার তারিখ</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row">১। নিম্ন মাধ্যমিক</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="nimmo_first_recog" id="nimmo_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="nimmo_first_approve" id="nimmo_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="nimmo_not_apply" id="nimmo_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                  <td scope="row">২। মাধ্যমিক</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="maddo_first_recog" id="maddo_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="maddo_first_approve" id="maddo_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="maddo_not_apply" id="maddo_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                 <tr>
                                  <td scope="row">৩। উচ্চ মাধ্যমিক (এইচএসসি)</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="uccho_first_recog" id="uccho_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="uccho_first_approve" id="uccho_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="uccho_not_apply" id="uccho_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                 <tr>
                                  <td scope="row">৪। স্নাতক (পাস)</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="degpass_first_recog" id="degpass_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="degpass_first_approve" id="degpass_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="degpass_not_apply" id="degpass_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                <td scope="row">৫। স্নাতক (সম্মান)</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="honors_first_recog" id="honors_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="honors_first_approve" id="honors_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="honors_not_apply" id="honors_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                <td scope="row">৬। স্নাতকোত্তর</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="masters_first_recog" id="masters_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="masters_first_approve" id="masters_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="masters_not_apply" id="masters_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>

                                <tr>
                                <td scope="row">৭। এসএসসি ভোক</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="sscvoc_first_recog" id="sscvoc_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="sscvoc_first_approve" id="sscvoc_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="sscvoc_not_apply" id="sscvoc_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                <td scope="row">৮। এইচএসসি ভোক</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="hscvoc_first_recog" id="hscvoc_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="hscvoc_first_approve" id="hscvoc_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="hscvoc_not_apply" id="hscvoc_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                <td scope="row">৯। এইচএসসি বিএম</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="hscbm_first_recog" id="hscbm_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="hscbm_first_approve" id="hscbm_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="hscbm_not_apply" id="hscbm_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                <td scope="row">১০। ডিপ্লোমা ও সমমান</td>
                                   <td><select class="custom-select" style="width: 150px" name="nimmo_recog">
                                    <option value="" selected>Select</option>
                                    <option value="1">স্বীকৃতি প্রাপ্ত</option>
                                    <option value="2">অনুমতি প্রাপ্ত</option>
                                    <option value="3">প্রযোজ্য নয়</option>
                                    </select></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="diploma_first_recog" id="diploma_first_recog" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                         <input type="date" name="diploma_first_approve" id="diploma_first_approve" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                    <td> <div class="input-group date">
                                        <input type="date" name="diploma_not_apply" id="diploma_not_apply" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                              </tbody>
                            </table>
                    </div>
            </div>
            <br>
            <div class="row border border-info py-1">
                <div class="col">
                    <label class="label-number" for="management">১.২.৭ ব্যবস্থাপনা:</label>
                        <select class="custom-select" name="management">
                            <option value="" selected>Select</option>
                            <option value="1">সরকারি</option>
                            <option value="2">বেসরকারি</option>
                            <option value="3">স্থানীয় সরকার</option>
                            <option value="4">স্বায়ত্তশাসিত</option>
                            <option value="5">খ্রিষ্টান মিশনারি</option>
                            <option value="6">অন্যান্য</option>
                        </select>
                </div>
                <div class="col">
                    <label class="label-number" for="nationalization_date">সরকারি হলে জাতীয়করণের তারিখ  :</label>
                    <div class="input-group date">
                     <input type="date" name="nationalization_date" id="nationalization_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
               </div>
                <div class="col">
                    <label class="label-number" for="for_whom">১.২.৯ প্রতিষ্ঠানে শিক্ষার্থীর ধরন:</label>
                        <select class="custom-select" name="for_whom">
                            <option value="" selected>Select</option>
                            <option value="1">বালক</option>
                            <option value="2">বালিকা</option>
                            <option value="3">সহশিক্ষা একত্রে</option>
                            <option value="4">সহশিক্ষা আলাদা</option>
                        </select>
                </div>
                 <div class="col">
                    <label class="label-number" for="geographical_location">১.৩ ভৌগলিক অবস্থান:</label>
                        <select class="custom-select" name="geographical_location">
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
                </div>
                <div class="col">
                    <label class="label-number" for="geographical_area">১.৩.১ প্রতিষ্ঠানটি কোন এলাকায়?</label>
                        <select class="custom-select" name="geographical_area">
                            <option value="" selected>Select</option>
                            <option value="1">গ্রামীণ</option>
                            <option value="2">জেলা সদর পৌরসভা</option>
                            <option value="3">উপজেলা সদর পৌরসভা</option>
                            <option value="4">উপজেলা সদর পৌরসভা নয়</option>
                            <option value="5">সিটি কর্পোরেশন</option>
                            <option value="6">অন্যান্য পৌর এলাকা</option>
                        </select>
                </div>
            </div>
            <br>
            <div class="row border border-info py-1">
                <div class="col">
                    <label class="label-number" for="admin_unit">১.৩.২ প্রশাসনিক ইউনিটের সাথে যোগাযোগ ব্যবস্থার ধরন:</label>
                        <select class="custom-select" name="admin_unit" style="width:200px">
                            <option value="" selected>Select</option>
                            <option value="1">উত্তম</option>
                            <option value="2">মোটমুটি</option>
                            <option value="3">দুর্গম</option>
                        </select>
                </div>
                <div class="col">
                    <label class="label-number" for="near_inst">১.৩.৩ নিকটবর্তী অনুরুপ শিক্ষা প্রতিষ্ঠানের দূরত্ব (কি.মি.)</label>
                        <input type="nuber"  class="form-control" name="near_inst"
                        id="near_inst">
                </div>
                <div class="col">
                    <label class="label-number" for="branch">১.৪ মূল প্রতিষ্ঠান ব্যতীত অন্যত্র শাখা আছে কি?</label> &nbsp
                       <select class="custom-select" name="admin_unit">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
                <div class="col">
                    <label class="label-number" for="branch_no">১.৪.১ উত্তর হ্যাঁ হলে, শাখা সংখ্যা</label> &nbsp
                        <input type="number"  class="form-control" name="branch_no"
                        id="branch_no">
                </div>
            </div>
            <br>
            <div class="row border border-info py-1">
                <div class="col">
                    <label class="label-number" for="double_shift">১.৪.২ প্রতিষ্ঠানটিতে ডাবল-শিফ্ট আছে কি? </label>
                       <select class="custom-select" name="double_shift">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
                <div class="col">
                    <label class="label-number" for="own_campus">১.৪.৩ প্রতিষ্ঠানটির নিজস্ব ক্যাম্পাস আছে কি?</label>
                       <select class="custom-select" name="own_campus">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
                <div class="col">
                    <label class="label-number" for="other_inst">১.৪.৪ প্রতিষ্ঠানটির ক্যাম্পাস অন্য কোন শিক্ষা প্রতিষ্ঠান আছে?</label>
                       <select class="custom-select" name="other_inst">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
                <div class="col">
                    <label class="label-number" for="other_insttype">১.৪.৫ উত্তর হ্যাঁ হলে, প্রতিষ্ঠানটির ধরন: </label>
                       <select class="custom-select" name="other_insttype">
                            <option value="" selected>Select</option>
                            <option value="1">প্রাথমিক বিদ্যালয়</option>
                            <option value="2">কিন্ডার গার্টেন</option>
                            <option value="3">এবতেদায়ী মাদ্রাসা</option>
                            <option value="4">মাধ্যমিক স্কুল</option>
                            <option value="5">কলেজ</option>
                            <option value="6">অন্যান্য</option>
                        </select>
                </div>
            </div>
            <br>
            <div class="row border border-info py-1">
                <div class="col">
                    <label class="label-number" for="mpo_yn">১.৫ প্রতিষ্ঠানটি এমপিওভুক্ত কি?</label>
                       <select class="custom-select" name="mpo_yn">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
                 <div class="col">
                    <label class="label-number" for="technical_mpo_yn">১.৫.১ কারিগরি শাখা এমপিওভুক্ত কি?</label>
                       <select class="custom-select" name="technical_mpo_yn">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
                <div class="col">
                    <label class="label-number" for="technical_mpo_yn">১.৫.১ কারিগরি শাখা এমপিওভুক্ত কি?</label>
                       <select class="custom-select" name="technical_mpo_yn">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                </div>
            </div>
            <br>
            <div class="row border border-info py-1">
                    <div class="col">
                        <div class=""><label>১.৫.২ প্রতিষ্ঠানটি এমপিও ভূক্ত হলে স্তর ও তারিখ:</label>
                        </div>

                        <table class="table table-bordered" style="text-align:center">
                              <thead>
                                <tr>
                                  <th scope="col">এমপিওভুক্তির স্তর</th>
                                  <th scope="col">এমপিও ভুক্তির তারিখ</th>
                                  <th scope="col">এমপিওভুক্তির স্তর</th>
                                  <th scope="col">এমপিও ভুক্তির তারিখ</th>
                                  <th scope="col">এমপিওভুক্তির স্তর</th>
                                  <th scope="col">এমপিও ভুক্তির তারিখ</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row">১। নিম্ন মাধ্যমিক</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="nimmo_mpo" id="nimmo_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                  <td scope="row">২। মাধ্যমিক (এসএসসি)</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="maddo_mpo" id="maddo_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                  <td scope="row">৩। উচ্চ মাধ্যমিক (এইচএসসি)</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="uchho_mpo" id="uchho_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                  <td scope="row">৪। স্নাতক</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="deg_mpo" id="deg_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                  <td scope="row">৫। স্নাতক (সম্মান)</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="honours_mpo" id="honours_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                  <td scope="row">৬। স্নাতকো্ত্তর</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="masters_mpo" id="masters_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                 <tr>
                                  <td scope="row">৭।এসএসসি ভোক</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="sscvoc_mpo" id="sscvoc_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                  <td scope="row">৮। এইচএসসি ভোক</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="hscvoc_mpo" id="hscvoc_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                  <td scope="row">৯। এইচএসসি বিএম</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="hscbm_mpo" id="hscbm_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                                <tr>
                                  <td scope="row">১০। ডিপ্লোমা ইন ফিশারিজ</td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="dip_fish_mpo" id="dip_fish_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                  <td scope="row">১১। ডিপ্লোমা ইন এগ্রিকালচার </td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="dip_agri_mpo" id="dip_agri_mpo" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
            <br>
             <div class="row border border-info py-1">
                <div class="row container">
                    <nav class="navbar navbar-light bg-light">
                        <span class="navbar-brand font-weight-bold">কমিটি সংক্রান্ত তথ্য</span></nav>
                </div>
                <div class="row container">
                    <div class="col">
                        <div class=""><label>১.৬ কমিটির ধরন:</label>
                            <select class="custom-select" name="committee_type">
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
                <div class="col table table-bordered">
                    <div class=""><label>১.৬.২ কমিটিতে সদস্য সংখ্যা:</label>
                    </div>
                    <div class="row ">
                        <div class="col-md-4">
                          <label for="men"> পুরুষ: </label>
                        <input type="number"  class="form-control" name="men"
                               id="men">  
                        </div>
                        <div class="col-md-4">
                            <label for="female"> মহিলা: </label>
                        <input type="number"  class="form-control" name="female"
                               id="female">
                        </div>
                        <div class="col-md-4">
                             <label for="total"> মোট:</label>
                        <input type="number"  class="form-control" name="total"
                               id="total">
                        </div>
                           </div>
                </div>
                 <div class="col">
                        <div class=""><label>১.৬.১  কমিটি থাকলে: </label>
                        </div>
                        <table class="table table-bordered" style="text-align:center">
                              <thead>
                                <tr>
                                  <th scope="col">অনুমোদনের তারিখ</th>
                                  <th scope="col">মেয়াদ উত্তীর্ণের তারিখ</th>

                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td> <div class="input-group date">
                                        <input type="date" name="committee_appdate" id="committee_appdate" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                     <td> <div class="input-group date">
                                        <input type="date" name="committee_expdate" id="committee_expdate" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <div class="col table table-bordered ml-2">
                    <div class=""><label>১.৬.৩ কমিটি না থাকলে বিগত কমিটির মেয়াদ শেষ হওয়ার তারিখ</label>
                    </div>
                    <div class="input-group date">
                                        <input type="date" name="committee_appdate" id="committee_appdate" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></div>

                </div>
                </div>   
            </div>
        </div>

        @include('components/footer')

    </div>
@endsection
