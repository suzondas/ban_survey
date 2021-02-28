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
                <div class="row">
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

                <div class="row">
                    <div class="col-md-3">
                        <label class="label-number" for="holding_no">১.১.১ ঠিকানা: গ্রাম/হোল্ডিং নম্বর:</label> &nbsp
                        <input type="text"  class="form-control" name="holding_no" id="holding_no">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="road">রোড:</label> &nbsp
                        <input type="text"  class="form-control" name="road" id="road">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="post_office">ডাকঘর:</label> &nbsp
                        <input type="text"  class="form-control" name="post_office" id="post_office">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="post_code">পোস্ট কোড:</label> &nbsp
                        <input type="number"  class="form-control" name="post_code" id="post_code">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class="label-number" for="division">বিভাগ:</label>
                        <select class="custom-select" name="division">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="district">জেলা:</label>
                        <select class="custom-select" name="district">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="upazila">উপজেলা/থানা:</label>
                        <select class="custom-select" name="upazila">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="mouza">মৌজা:</label>
                        <select class="custom-select" name="mouza">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="union">ইউনিয়ন/ওয়ার্ড:</label>
                        <select class="custom-select" name="union">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                </div>
                   <div class="row">

                    <div class="col-md-3">
                        <label class="label-number" for="mobile">১.১.২ মোবাইল নম্বর:</label> &nbsp
                        <input type="number"  class="form-control" name="mobile"
                               id="mobile">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="alt_mobile">বিকল্প মোবাইর নম্বর:</label> &nbsp
                        <input type="number"  class="form-control" name="alt_mobile"
                               id="alt_mobile">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="phone">ফোন:</label> &nbsp
                        <input type="number"  class="form-control" name="phone"
                               id="phone">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="email">ই-মেইল:</label> &nbsp
                        <input type="text"  class="form-control" name="email"
                               id="email">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="website">ওয়েবসাইট:</label> &nbsp
                        <input type="text"  class="form-control" name="website"
                               id="website">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="constituency_area">নির্বাচনী এলাকা (জাতীয় নম্বর):</label> &nbsp
                        <input type="text"  class="form-control" name="constituency_area"
                               id="constituency_area">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="constituency_dist">নির্বাচনী এলাকা (জেলা নম্বর):</label> &nbsp
                        <input type="text"  class="form-control" name="constituency_dist"
                               id="constituency_dist">
                    </div>
                   </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="label-number" for="education_level">প্রতিষ্ঠানের স্তর :</label>
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
                    <div class="col-md-4">
                        <label class="label-number" for="education_group">১.২.১ গ্রুপ স্কুল শাখা (একাধিক হতে পারে):</label>
                        <select class="custom-select" name="education_group">
                            <option value="" selected>Select</option>
                            <option value="1">মানবিক</option>
                            <option value="2">বিজ্ঞান</option>
                            <option value="3">ব্যবসা শিক্ষা</option>
                        </select>
                    </div>
                    <div class="col-md-4">
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
                </div>
            </div>
        </div>

        @include('components/footer')

    </div>
@endsection
