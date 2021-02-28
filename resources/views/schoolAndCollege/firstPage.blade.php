@extends('template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')

        School First Page
        <hr>
        <div class="container">
            <div class="row">
                <div class="col text-right">
                    <label for="eiin">ইআইআইএন (EIIN): &nbsp</label><input type="number" id="eiin"><br>
                    <label for="lat">অক্ষাংশ (Latitude):&nbsp</label><input type="number" id="lat"><br>
                    <label for="long">দ্রাঘিমাংশ (Longitude):&nbsp</label><input type="number" id="long">
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
                              </tbody>
                            </table>
                    </div>

            </div>
        </div>

        @include('components/footer')

    </div>
@endsection
