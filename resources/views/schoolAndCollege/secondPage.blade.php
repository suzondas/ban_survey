@extends('schoolAndCollege/template')
@section('content')
    @include('../components/banner')
    @include('schoolAndCollege.navBar')
    <hr>
    <div class="container" style="font-size:13px !important;">
        <h3 class="text-center">সেকশন ১: মৌলিক তথ্য (খ)</h3>

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
                                <td><input type="text" class="form-control" name=""></td>
                                <td>মৌজার নাম:</td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>খতিয়ান নং:</td>
                                <td><input type="number" class="form-control" name=""></td>
                                <td>খতিয়ান নং:</td>
                                <td><input type="number" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>দাগ নং:</td>
                                <td><input type="number" class="form-control" name=""></td>
                                <td>দাগ নং:</td>
                                <td><input type="number" class="form-control" name=""></td>

                            </tr>
                            <tr>
                                <td>অখন্ড (শতাংশ)</td>
                                <td><input type="number" class="form-control" name=""></td>
                                <td>অন্যত্র (শতাংশ)</td>
                                <td><input type="number" class="form-control" name=""></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <label>১.৭ প্রতিষ্ঠানটির মোট জমির পরিমাণ:</label>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>
                                    <label for="">(১) দখল স্বত্বে<br> (শতাংশ):</label>
                                    <input class="w-100" type="number" name="">
                                </td>
                                <td>
                                    <label for="">(২) দখল স্বত্বে নয়<br> (শতাংশ):</label>
                                    <input class="w-100" type="number" name="">
                                </td>
                                <td>
                                    <label for=""> মোট <br>(শতাংশ):</label>
                                    <input class="w-100" type="number" name="">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <lavel class="label-text container">১.৭.২ জমির ব্যবহার ও পরিমাণ (শতাংশে):</lavel>
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
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>

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
                                    <input type="number" name="" class="form-control">
                                </td>
                                <td>
                                    <label>
                                        ১.৭.৪ প্রতিষ্ঠানের সর্বশেষ নতুন ভবনটি নির্মাণের বছর
                                    </label>
                                    <input type="number" name="" class="form-control">
                                </td>
                                <td>
                                    <label>
                                        ১.৭.৫ সর্বশেষ ভবনটি নির্মাণে অর্থের উৎস
                                    </label>
                                    <select class="" name="english_version">
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
                                    <input type="number" name="" class="form-control">
                                </td>
                                <td>
                                    <label>
                                        ১.৭.৭ সকল ভবনের মোট আয়তন(বর্গফুট)
                                    </label>
                                    <input type="number" name="" class="form-control">
                                </td>
                                <td>
                                    <label>
                                        ১.৭.৮ প্রতিষ্ঠানটির অবস্থান:
                                    </label>
                                    <select name="english_version" style="width: 130px">
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
                            <tr>
                                <td>১</td>
                                <td><input type="text" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><select class="" name="english_version">
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>২</td>
                                <td><input type="text" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><select class="" name="english_version">
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            </tbody>
                        </table>
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
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
                        </td>
                        <td><input type="number" class="form-control" name="" id="" style="">
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
                            <th>মাল্টিমিডিয়া শ্রেণি কক্ষ</th>
                            <th>বিজ্ঞানাগার</th>
                            <th>গ্রন্থাগার কক্ষ</th>
                            <th>কম্পিউটার ল্যাব</th>
                            <th>ছাত্র কমন রুম</th>
                            <th>ছাত্রী কমন রুম</th>
                            <th>ব্যামাগার</th>
                            <th>সিক রুম</th>
                            <th>ছাত্রাবাসের সংখ্যা</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>সংখ্যা</td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
                            </td>
                            <td><input type="number" class="form-control" name="" id="" style="">
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
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>

                        </tr>
                        </tbody>
                    </table>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <lavel>১.৭.১৩ শ্রেণী ভিত্তিক কক্ষ সংখ্যা ও আয়তনঃ</lavel>
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr class="custom-table-header">
                                <th>স্তর</th>
                                <th>শ্রেণি/পর্ব</th>
                                <th colspan="3">কক্ষ সংখ্যা</th>
                                <th colspan="3">কক্ষের আয়তন (বর্গফুট)</th>
                            </tr>
                            <tr>
                                <th></th>
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
                            <tr>
                                <td rowspan="3">নিম্ন মাধ্যমিক</td>
                                <td>৬ ষ্ঠ</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td>৭ম</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td>৮ম</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td rowspan="2">মাধ্যমিক</td>
                                <td>৯ম</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td>১০ম</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>

                            <tr>
                                <td rowspan="2">উচ্চ মাধ্যমিক</td>
                                <td>১ম বর্ষ(১১শ)</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td>২য় বর্ষ(১২শ)</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td rowspan="3">স্নাতক পাশ</td>
                                <td>১ম বর্ষ</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td>২য় বর্ষ</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td>৩য় বর্ষ</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>স্নাতক সম্মান</td>
                                <td>-</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>স্নাতকোত্তর</td>
                                <td>-</td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                                <td><input type="number" class="form-control" name="" id=""></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <label>
                            ১.৭.১১ প্রতিষ্ঠানের প্রার্থনা গৃহঃ
                        </label>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>
                                    <label class="label-number" for="">মসজিদ</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="1"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">নামাজ ঘর</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="2"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">মন্দির</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="3"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">গীর্জা</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="4"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">প্যাগোডা</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="4"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">অন্যান্য</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="4"
                                           style="width: 20px">
                                </td>
                            </tr>
                        </table>
                        <label> ১.৭.১৫ প্রতিষ্ঠানের সীমানা প্রাচীর সংক্রান্ত তথ্য</label>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>
                                    প্রতিষ্ঠানের সীমানা প্রাচীর আছে কি?
                                    <select name="english_version">
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                                <td>
                                    উত্তর হ্যাঁ হলে, প্রাচীরের অবস্থাঃ
                                    <select name="english_version">
                                        <option value="">select</option>
                                        <option value="1">সম্পূর্ণ</option>
                                        <option value="2">আংশিক</option>
                                    </select>
                                </td>
                                <td>
                                    প্রাচীরের ধরন
                                    <select name="english_version">
                                        <option value="">select</option>
                                        <option value="1">পাকা</option>
                                        <option value="2">আধাপাকা</option>
                                        <option value="3">কাঁচা</option>
                                        <option value="4">প্রাকৃতিক</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <label>১.৭.১৪ প্রতিষ্ঠানটির কী কী অবকাঠামো/ সুবিধা রয়েছে ?
                        </label>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td>
                                    <label class="label-number" for="">শহীদ মিনার</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="1"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">পতাকা স্ট্যান্ড </label>
                                    <input type="checkbox" class="form-control" name="" id="" value="2"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">সততা স্টোর</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="3"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">গ্যাস সংযোগ</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="4"
                                           style="width: 20px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label-number" for="">হ্যান্ড স্যানিটাইজার</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="4"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">টয়লেট পেপার</label>
                                    <input type="checkbox" class="form-control" name="" id="" value="4"
                                           style="width: 20px">
                                </td>
                                <td>
                                    <label class="label-number" for="">সাবান</label>&nbsp
                                    <input type="checkbox" class="form-control " name="" id="" value="4"
                                           style="width: 20px">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        @include('components/footer');

    </div>
@endsection
