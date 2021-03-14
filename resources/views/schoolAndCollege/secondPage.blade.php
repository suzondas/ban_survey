@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')

        <hr>
        <div class="container">
          <div>
             <h5>১.৭.১ জমির অবস্থান:</h5>
              <div class="row">
                  <div class="col-md"></div>
                  <div class="col-md">
                      দখল স্বত্বে
                  </div>
                  <div class="col-md"></div>
                  <div class="col-md">
                      দখল স্বত্বে নয়
                  </div>
              </div>
              <div class="row">
                  <div class="col-md">মৌজার নাম:</div>
                  <div class="col-md"><input type="text" class="form-control" name=""></div>
                  <div class="col-md">মৌজার নাম:</div>
                  <div class="col-md"><input type="text" class="form-control" name=""></div>

              </div>
              <div class="row">
                  <div class="col-md">খতিয়ান নং:</div>
                  <div class="col-md"><input type="number" class="form-control" name=""></div>
                  <div class="col-md">খতিয়ান নং:</div>
                  <div class="col-md"><input type="number" class="form-control" name=""></div>

              </div>
              <div class="row">
                  <div class="col-md">দাগ নং:</div>
                  <div class="col-md"><input type="number" class="form-control" name=""></div>
                  <div class="col-md">দাগ নং:</div>
                  <div class="col-md"><input type="number" class="form-control" name=""></div>

              </div>
              <div class="row">
                  <div class="col-md">অখন্ড (শতাংশ)</div>
                  <div class="col-md"><input type="number" class="form-control" name=""></div>
                  <div class="col-md">অখন্ড (শতাংশ)</div>
                  <div class="col-md"><input type="number" class="form-control" name=""></div>
              </div>

          </div>

                <div class=" row mt-2">
                    <label>১.৭ প্রতিষ্ঠানটির মোট জমির পরিমাণ:</label>
                </div>
                <div class="row mt-2">
                    <div class="col-">
                        <label for="">(১) দখল স্বত্বে (শতাংশ):</label>
                    </div>
                    <div class="col-sm">
                        <input type="number" name="" style="width:70px">
                    </div>
                    <div class="col-">
                        <label for="">(২) দখল স্বত্বে নয় (শতাংশ):</label>
                    </div>
                    <div class="col-md">
                        <input type="number" name="" style="width:70px">
                    </div>
                    <div class="col-sm">
                        <label for=""> মোট (শতাংশ):</label>
                    </div>

                    <div class="col-md">
                        <input type="number" name="" style="width:70px">
                    </div>

                    <div>
                    </div>
                </div>
                <div class="row mt-2">
                    <lavel class="label-text">১.৭.২ জমির ব্যবহার ও পরিমাণ (শতাংশে):</lavel>
                </div>
            <div class="row border border-info py-1 mt-2">
                <div class="col">
                    <table class="table table-bordered" style="text-align:center">
                        <thead>
                        <tr>
                            <th >বিবরণ</th>
                            <th >প্রতিষ্ঠানের ভবন</th>
                            <th >খেলার মাঠ</th>
                            <th >ছাত্রাবাস</th>
                            <th >শিক্ষক আবাসন</th>
                            <th >আবাদি জমি</th>
                            <th >পুকুর</th>
                            <th >বাগান</th>
                            <th >শহিদ মিনার</th>
                            <th >অব্যবহৃত</th>
                            <th >অন্যান্য</th>
                            <th >মোট</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td >শতাংশ</td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>

                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>


                <div class="row mt-2 col-8">
                    <div class="col-6">
                        ১.৭.৩ প্রতিষ্ঠানের সবচেয়ে পুরাতন ভবনটি নির্মাণের বছর
                    </div>
                    <div class="col col-2">
                        <input type="number" name="" class="form-control">
                    </div>
                </div>
                <div class="row mt-2 col-8">
                    <div class="col-6">
                        ১.৭.৪ প্রতিষ্ঠানের সর্বশেষ নতুন ভবনটি নির্মাণের বছর
                    </div>
                    <div class="col col-2">
                        <input type="number" name="" class="form-control">
                    </div>
                </div>
                <div class="row mt-2 col-8">
                    <div class="col-6">
                        ১.৭.৫ সর্বশেষ ভবনটি নির্মাণে অর্থের উৎস
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="1">সরকার-১</option>
                            <option value="2">প্রকল্প-২</option>
                            <option value="2">নিজস্ব-৩</option>
                            <option value="2">এনজিও-৪</option>
                            <option value="2">ব্যাক্তি-৫</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-2 col-8">
                    <div class="col-6">
                        ১.৭.৬ সর্বশেষ নির্মিত ভবনের আয়তন(বর্গফুট)
                    </div>
                    <div class="col col-2">
                        <input type="number" name="" class="form-control">
                    </div>
                </div>
                <div class="row mt-2 col-8">
                    <div class="col-6">
                        ১.৭.৭ সকল ভবনের মোট আয়তন(বর্গফুট)
                    </div>
                    <div class="col col-2">
                        <input type="number" name="" class="form-control">
                    </div>
                </div>
                <div class="row mt-2 col-8">
                    <div class="col-6">
                        ১.৭.৮ প্রতিষ্ঠানটির অবস্থান:
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version" style="width: 130px">
                            <option value="1">নিজস্ব জমিতে</option>
                            <option value="2">ভাড়া বাড়িতে</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <lavel>১.৭.৯ ভবন গৃহের মালিকানা, ধরন ও অবস্থা অনুযায়ী সংখ্যাঃ</lavel>
                </div>

                <div class="row  py-1 mt-2">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th  colspan="7">ভবন সংখ্যা</th>
                                <th  colspan="2">মালিকানা অনুসারে ভবন সংখ্যা</th>
                                <th  colspan="3">ধরন অনুযায়ী ভবন সংখ্যা</th>
                                <th  colspan="4">অবস্থা অনুযায়ী ভবন সংখ্যা</th>
                                <th >মোট কক্ষ সংখ্যা</th>
                            </tr>
                            <tr>
                                <th >১ তলা</th>
                                <th >২ তলা</th>
                                <th >৩ তলা</th>
                                <th >৪ তলা</th>
                                <th >৫ তলা</th>
                                <th >৫ তলা+</th>
                                <th >মোট</th>
                                <th >নিজস্ব</th>
                                <th >ভাড়া</th>
                                <th >পাকা</th>
                                <th >আধাপাকা</th>
                                <th >কাঁচা</th>
                                <th >নতুন</th>
                                <th >পুরাতন</th>
                                <th >জরাজীর্ণ</th>
                                <th >কর্তৃপক্ষ কর্তৃক পরিত্যাক্ত</th>
                                <th ></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:30px;"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row mt-2">
                    <lavel>১.৭.১০ ভবন/গৃহের ব্যাবহার</lavel>
                </div>
                <div class="row  py-1 mt-2 ">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th >ভবন/কক্ষ</th>
                                <th >অফিস কক্ষ</th>
                                <th >প্রতিষ্ঠান প্রধানের কক্ষ</th>
                                <th >শিক্ষক মিলনায়তন</th>
                                <th >সাধারণ শ্রেণি কক্ষ</th>
                                <th >মাল্টিমিডিয়া শ্রেণি কক্ষ</th>
                                <th >বিজ্ঞানাগার</th>
                                <th >গ্রন্থাগার কক্ষ</th>
                                <th >কম্পিউটার ল্যাব</th>
                                <th >ছাত্র কমন রুম</th>
                                <th >ছাত্রী কমন রুম</th>
                                <th >ব্যামাগার</th>
                                <th >সিক রুম</th>
                                <th >ছাত্রাবাসের সংখ্যা</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td >সংখ্যা</td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                                <td ><input type="number" class="form-control" name="" id="" style="width:40px;"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row border border-info py-1 mt-2">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th >ভবন/কক্ষ</th>
                                <th >ছাত্রাবাসের সিট সংখ্যা</th>
                                <th >ছাত্রাবাসে অবস্থানকারী</th>
                                <th >ছাত্রীনিবাসে অবস্থানকারী</th>
                                <th >প্রতিষ্ঠান প্রধানের আবাসন</th>
                                <th >শিক্ষক আবাসিক ভবন</th>
                                <th >আবাসিক শিক্ষক সংখ্যা</th>
                                <th >শিক্ষক আআবাসন সিট</th>
                                <th >বিশেষ চাহিদা সম্পন্ন</th>
                                <th >কাউন্সিলিং রুম</th>
                                <th >শিক্ষা উপকরণ</th>
                                <th >অন্যান্য</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td >সংখ্যা</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row mt-2">
                    <lavel>১.৭.১১ ভবনভিত্তিক তলা ও উর্ধ্মূখী সম্প্রসারণ ইত্যাদি সম্পর্কিত তথ্য</lavel>
                </div>
                <div class="row border border-info py-1 mt-2 col-7">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th >ভবন নং</th>
                                <th >ভবনের নাম</th>
                                <th >কত তলা ফাউন্ডেশন</th>
                                <th >কত তলা নির্মিত</th>
                                <th >নির্মানের বছর</th>
                                <th >উর্ধ্মুখী সম্প্রসারণ যোগ্য কিনা? হাঁ-১, না-২</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td >১</td>
                                <td ><input type="text" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><select class="custom-select" name="english_version" >
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td >২</td>
                                <td ><input type="text" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><select class="custom-select" name="english_version">
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td >৩</td>
                                <td ><input type="text" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><select class="custom-select" name="english_version">
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td >৪</td>
                                <td ><input type="text" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><select class="custom-select" name="english_version">
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td >৫</td>
                                <td ><input type="text" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><select class="custom-select" name="english_version">
                                        <option value="">select</option>
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row mt-2 col-3">
                    ১.৭.১১ প্রতিষ্ঠানের প্রার্থনা গৃহঃ
                </div>
                <div class="row border border-info py-1 mt-2 col-7">
                    <div class="col">
                        <label class="label-number" for="">মসজিদ</label>
                        <input type="checkbox" class="form-control" name="" id="" value="1" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">নামাজ ঘর</label>
                        <input type="checkbox" class="form-control" name="" id="" value="2" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">মন্দির</label>
                        <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">গীর্জা</label>
                        <input type="checkbox" class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">প্যাগোডা</label>
                        <input type="checkbox" class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">অন্যান্য</label>
                        <input type="checkbox" class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                </div>

                <div class="row mt-2">
                    <lavel>১.৭.১৩ শ্রেণী ভিত্তিক কক্ষ সংখ্যা ও আয়তনঃ</lavel>
                </div>
                <div class="row border border-info py-1 mt-2">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th >স্তর</th>
                                <th >শ্রেণি/পর্ব</th>
                                <th  colspan="3">কক্ষ সংখ্যা</th>
                                <th  colspan="3">কক্ষের আয়তন (বর্গফুট)</th>
                            </tr>
                            <tr>
                                <th ></th>
                                <th ></th>
                                <th >পাকা</th>
                                <th >আধা-পাকা</th>
                                <th >কাঁচা</th>
                                <th >পাকা</th>
                                <th >আধা-পাকা</th>
                                <th >কাঁচা</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td  rowspan="3">নিম্ন মাধ্যমিক</td>
                                <td >৬ ষ্ঠ</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td >৭ম</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td >৮ম</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td  rowspan="2">মাধ্যমিক</td>
                                <td >৯ম</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td >১০ম</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>

                            <tr>
                                <td  rowspan="2">উচ্চ মাধ্যমিক</td>
                                <td >১ম বর্ষ(১১শ)</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td >২য় বর্ষ(১২শ)</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td  rowspan="3">স্নাতক পাশ</td>
                                <td >১ম বর্ষ</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td >২য় বর্ষ</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>

                                <td >৩য় বর্ষ</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td >স্নাতক সম্মান</td>
                                <td >-</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            <tr>
                                <td >স্নাতকোত্তর</td>
                                <td >-</td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                                <td ><input type="number" class="form-control" name="" id=""></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="row mt-2">
                    ১.৭.১৪ প্রতিষ্ঠানটির কী কী অবকাঠামো/ সুবিধা রয়েছে ?
                </div>
                <div class="row border border-info py-1 mt-2 col-7">

                    <div class="col">
                        <label class="label-number" for="">শহীদ মিনার</label>
                        <input type="checkbox" class="form-control" name="" id="" value="1" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">পতাকা স্ট্যান্ড </label>
                        <input type="checkbox" class="form-control" name="" id="" value="2" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">সততা স্টোর</label>
                        <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">গ্যাস সংযোগ</label>
                        <input type="checkbox" class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">হ্যান্ড স্যানিটাইজার</label>
                        <input type="checkbox" class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">টয়লেট পেপার</label>
                        <input type="checkbox" class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col-1">
                        <label class="label-number" for="">সাবান</label>&nbsp
                        <input type="checkbox" class="form-control " name="" id="" value="4" style="width: 20px">
                    </div>
                </div>

                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৭.১৫ প্রতিষ্ঠানের সীমানা প্রাচীর আছে কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৭.১৬ উত্তর হ্যাঁ হলে, প্রাচীরের অবস্থাঃ
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">সম্পূর্ণ</option>
                            <option value="2">আংশিক</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৭.১৭ প্রাচীরের ধরন
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">পাকা</option>
                            <option value="2">আধাপাকা</option>
                            <option value="3">কাঁচা</option>
                            <option value="4">প্রাকৃতিক</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-2 col-9">

                    <div class="col-7">
                        ১.৮ লাইব্রেরির জন্য পৃথক ভবন আছে কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.১ লাইব্রেরির জন্য কক্ষ আছে কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.২ লাইব্রেরিতে বইয়ের সংখ্যা
                    </div>
                    <div class="col col-2">
                        <label class="label-number" for="">পাঠ্যপুস্তক</label>
                        <input type="number" class="form-control" name="" id="">
                        <label class="label-number" for="">সহায়ক</label>
                        <input type="number" class="form-control" name="" id="">
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.৩ শিক্ষার্থীদের লাইব্রেরি থেকে বই ইস্যু করা হয় কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.৪ উত্তর হ্যাঁ হলে, নিয়মিত বই ইস্যু করা হয় কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.৫ উত্তর হ্যাঁ হলে, মাসে ইস্যুকৃত বই এর সংখ্যা
                    </div>
                    <div class="col col-2">
                        <input type="number" class="form-control" name="" id="">
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.৬ উত্তর হ্যাঁ হলে, নিয়মিত বই ইস্যু করা হয় কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.৭ লাইব্রেরির পুস্তকাদির ক্যাটালগিং কম্পিউটারাইজড কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.৮ লাইব্রেরি পরিচালনার জন্য সহকারী লাইব্রেরিয়ান আছে কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version" style="width: 90px">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.৯ লাইব্রেরি বিষয়ে সহকারী লাইব্রেরিয়ানের প্রশিক্ষণ আছে কি?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version" style="width: 90px">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 col-9">
                    <div class="col-7">
                        ১.৮.১০ লাইব্রেরি আওয়ার ক্লাস রুটিনে অনর্ভুক্ত আছে কি ?
                    </div>
                    <div class="col col-2">
                        <select class="custom-select " name="english_version" style="width: 90px">
                            <option value="">select</option>
                            <option value="1">হ্যাঁ</option>
                            <option value="2">না</option>
                        </select>
                    </div>
                </div>
        </div>

        @include('components/footer')

    </div>
@endsection
