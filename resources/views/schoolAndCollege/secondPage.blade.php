@extends('template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')

        School Second Page
        <hr>
        <div class="container">
            <div class="body">
                <label>১.৭.১ জমির অবস্থান:</label>
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
                        <label class="label-number">বিবরণ</label> &nbsp <br><br>
                        <label class="label-number">শতাংশ</label>
                    </div>
                    <div class="col">
                        <label class="label-number" for="">প্রতিষ্ঠানের ভবন</label>
                        <input type="number" class="form-control" name=""
                               id="">
                    </div>
                    <div class="col">
                        <label class="label-number" for="phone">খেলার মাঠ</label>
                        <input type="number" class="form-control" name="phone"
                               id="phone">
                    </div>
                    <div class="col">
                        <label class="label-number" for="email">ছাত্রাবাস</label> &nbsp &nbsp
                        <input type="text" class="form-control" name="email"
                               id="email">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">শিক্ষক আবাসন</label>
                        <input type="text" class="form-control" name="website"
                               id="website">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">আবাদি জমি</label>
                        <input type="text" class="form-control" name="website"
                               id="website">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">পুকুর</label> <br><br>
                        <input type="text" class="form-control" name=""
                               id="">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">বাগান</label> <br><br>
                        <input type="text" class="form-control" name="website"
                               id="website">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">শহিদ মিনার</label>
                        <input type="text" class="form-control" name="website"
                               id="website">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">অব্যবহৃত</label> &nbsp
                        <input type="text" class="form-control" name="website"
                               id="website">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">অন্যান্য</label> &nbsp <br><br>
                        <input type="text" class="form-control" name="website"
                               id="website">
                    </div>
                    <div class="col">
                        <label class="label-number" for="website">মোট</label> &nbsp <br><br>
                        <input type="text" class="form-control" name="website"
                               id="website">
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

                <div class="row border border-info py-1 mt-2">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th scope="col" colspan="7">ভবন সংখ্যা</th>
                                <th scope="col" colspan="2">মালিকানা অনুসারে ভবন সংখ্যা</th>
                                <th scope="col" colspan="3">ধরন অনুযায়ী ভবন সংখ্যা</th>
                                <th scope="col" colspan="4">অবস্থা অনুযায়ী ভবন সংখ্যা</th>
                                <th scope="col">মোট  কক্ষ সংখ্যা</th>
                            </tr>
                            <tr>
                                <th scope="col" >১ তলা</th>
                                <th scope="col" >২ তলা</th>
                                <th scope="col" >৩ তলা</th>
                                <th scope="col" >৪ তলা</th>
                                <th scope="col">৫ তলা</th>
                                <th scope="col">৫ তলা+</th>
                                <th scope="col">মোট</th>
                                <th scope="col" >নিজস্ব</th>
                                <th scope="col" >ভাড়া</th>
                                <th scope="col" >পাকা</th>
                                <th scope="col" >আধাপাকা</th>
                                <th scope="col" >কাঁচা</th>
                                <th scope="col" >নতুন</th>
                                <th scope="col" >পুরাতন</th>
                                <th scope="col" >জরাজীর্ণ</th>
                                <th scope="col" >কর্তৃপক্ষ কর্তৃক পরিত্যাক্ত</th>
                                <th scope="col" ></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id=""></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row mt-2">
                    <lavel>১.৭.১০ ভবন/গৃহের ব্যাবহার</lavel>
                </div>
                <div class="row border border-info py-1 mt-2">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th scope="col">ভবন/কক্ষ</th>
                                <th scope="col">অফিস কক্ষ</th>
                                <th scope="col">প্রতিষ্ঠান প্রধানের কক্ষ</th>
                                <th scope="col">শিক্ষক মিলনায়তন</th>
                                <th scope="col">সাধারণ শ্রেণি কক্ষ</th>
                                <th scope="col">মাল্টিমিডিয়া শ্রেণি কক্ষ</th>
                                <th scope="col">বিজ্ঞানাগার</th>
                                <th scope="col">গ্রন্থাগার কক্ষ</th>
                                <th scope="col">কম্পিউটার ল্যাব</th>
                                <th scope="col">ছাত্র কমন রুমব্যামাগার</th>
                                <th scope="col">সিক রুম</th>
                                <th scope="col">ছাত্রাবাসের সংখ্যা</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">সংখ্যা</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>

                            </tr>
                            <tr>
                                <td scope="row">আয়তন (বর্গফুট)</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
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
                                <th scope="col">ভবন/কক্ষ</th>
                                <th scope="col">ছাত্রাবাসের সিট সংখ্যা</th>
                                <th scope="col">ছাত্রাবাসে অবস্থানকারী শিক্ষার্থী</th>
                                <th scope="col">ছাত্রীনিবাসে অবস্থানকারী শিক্ষার্থী</th>
                                <th scope="col">প্রতিষ্ঠান প্রধানের আবাসন</th>
                                <th scope="col">শিক্ষক আবাসিক ভবন সংখ্যা</th>
                                <th scope="col">আবাসিক শিক্ষক সংখ্যা</th>
                                <th scope="col">শিক্ষক আআবাসন সিট সংখ্যা</th>
                                <th scope="col">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর বিশ্রামাগার</th>
                                <th scope="col">কাউন্সিলিং রুম</th>
                                <th scope="col">শিক্ষা উপকরণ সংরক্ষণের জন্য পৃথক কক্ষ</th>
                                <th scope="col">অন্যান্য</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">সংখ্যা</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>

                            </tr>
                            <tr>
                                <td scope="row">আয়তন (বর্গফুট)</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row mt-2">
                    <lavel>১.৭.১১ ভবনভিত্তিক তলা ও উর্ধ্মূখী সম্প্রসারণ ইত্যাদি সম্পর্কিত তথ্য</lavel>
                </div>
                <div class="row border border-info py-1 mt-2">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th scope="col">ভবন নং</th>
                                <th scope="col">ভবনের নাম</th>
                                <th scope="col">কত তলা ফাউন্ডেশন</th>
                                <th scope="col">কত তলা নির্মিত</th>
                                <th scope="col">নির্মানের বছর</th>
                                <th scope="col">উর্ধ্মুখী সম্প্রসারণ যোগ্য কিনা? হাঁ-১, না-২</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">১</td>
                                <td scope="row"> <input type="text" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row">   <select class="custom-select" name="english_version">
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td scope="row">২</td>
                                <td scope="row"> <input type="text" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row">   <select class="custom-select" name="english_version">
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td scope="row">৩</td>
                                <td scope="row"> <input type="text" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row">   <select class="custom-select" name="english_version">
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td scope="row">৪</td>
                                <td scope="row"> <input type="text" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row">   <select class="custom-select" name="english_version">
                                        <option value="1">হ্যাঁ-১</option>
                                        <option value="2">না-২</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td scope="row">৫</td>
                                <td scope="row"> <input type="text" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row">   <select class="custom-select" name="english_version">
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
                    <select class="custom-select" name="english_version">
                        <option value="1">মসজিদ</option>
                        <option value="2">নামাজ ঘর</option>
                        <option value="3">মন্দির</option>
                        <option value="4">গীর্জা</option>
                        <option value="5">প্যাগোডা</option>
                        <option value="6">অন্যান্য</option>
                    </select>
                </div>
                <div class="row mt-2">
                    <lavel>১.৭.১৩ শ্রেণী ভিত্তিক কক্ষ সংখ্যা ও আয়তনঃ</lavel>
                </div>
                <div class="row border border-info py-1 mt-2">
                    <div class="col">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th scope="col">স্তর</th>
                                <th scope="col">শ্রেণি/পর্ব</th>
                                <th scope="col" colspan="3">কক্ষ সংখ্যা</th>
                                <th scope="col" colspan="3">কক্ষের আয়তন (বর্গফুট)</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">পাকা</th>
                                <th scope="col">আধা-পাকা</th>
                                <th scope="col">কাঁচা</th>
                                <th scope="col">পাকা</th>
                                <th scope="col">আধা-পাকা</th>
                                <th scope="col">কাঁচা</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row"  rowspan="3">নিম্ন মাধ্যমিক</td>
                                <td scope="row">৬ ষ্ঠ</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>

                                <td scope="row">৭ম</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>

                                <td scope="row">৮ম</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>
                                <td scope="row"  rowspan="2">মাধ্যমিক</td>
                                <td scope="row">৯ম</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>

                                <td scope="row">১০ম</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>

                            <tr>
                                <td scope="row"  rowspan="2">উচ্চ মাধ্যমিক</td>
                                <td scope="row">১ম বর্ষ(১১শ)</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>

                                <td scope="row">২য় বর্ষ(১২শ)</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>
                                <td scope="row"  rowspan="3">স্নাতক পাশ</td>
                                <td scope="row">১ম বর্ষ</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>

                                <td scope="row">২য় বর্ষ</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>

                                <td scope="row">৩য় বর্ষ</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>
                                <td scope="row"  >স্নাতক সম্মান</td>
                                <td scope="row">-</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>
                            <tr>
                                <td scope="row" >স্নাতকোত্তর</td>
                                <td scope="row">-</td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                                <td scope="row"> <input type="number" class="form-control" name="" id="" ></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="row">
                    ১.৭.১৪ প্রতিষ্ঠানটির কী কী অবকাঠামো/ সুবিধা রয়েছে ?
                </div>
                <div class="row border border-info py-1 mt-2 col-7">

                    <div class="col">
                        <label class="label-number" for="">শহীদ মিনার</label>
                        <input type="checkbox"  class="form-control" name="" id="" value="1" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">পতাকা স্ট্যান্ড </label>
                        <input type="checkbox"  class="form-control" name="" id="" value="2" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">সততা স্টোর</label>
                        <input type="checkbox"  class="form-control" name="" id="" value="3" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">গ্যাস সংযোগ</label>
                        <input type="checkbox"  class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">হ্যান্ড স্যানিটাইজার</label>
                        <input type="checkbox"  class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">টয়লেট পেপার</label>
                        <input type="checkbox"  class="form-control" name="" id="" value="4" style="width: 20px">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">সাবান</label> &nbsp
                        <input type="checkbox"  class="form-control " name="" id="" value="4" style="width: 20px">
                    </div>
                </div>

                <div class="row mt-2 col-4">
                    ১.৭.১৫ প্রতিষ্ঠানের সীমানা প্রাচীর আছে কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-3">
                    ১.৭.১৬ উত্তর হ্যাঁ হলে, প্রাচীরের অবস্থাঃ
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">সম্পূর্ণ</option>
                        <option value="2">আংশিক</option>
                    </select>
                </div>
                <div class="row mt-2 col-2">
                    ১.৭.১৭ প্রাচীরের ধরন
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">পাকা</option>
                        <option value="2">আধাপাকা</option>
                        <option value="3">কাঁচা</option>
                        <option value="4">প্রাকৃতিক</option>
                    </select>
                </div>

                <div class="row mt-2 col-4">
                    ১.৮ লাইব্রেরির জন্য পৃথক ভবন আছে কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-3">
                    ১.৮.১ লাইব্রেরির জন্য কক্ষ আছে কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>

                <div class="row mt-2">
                    ১.৮.২ লাইব্রেরিতে বইয়ের সংখ্যা
                </div>

                <div class="row border border-info py-1 col-3">
                    <div class="col">
                        <label class="label-number" for="">পাঠ্যপুস্তক</label> &nbsp
                        <input type="number"  class="form-control" name="" id="">
                    </div>
                    <div class="col">
                        <label class="label-number" for="">সহায়ক</label> &nbsp
                        <input type="number"  class="form-control" name="" id="">
                    </div>
                </div>
                <div class="row mt-2 col-3">
                    ১.৮.৩ শিক্ষার্থীদের লাইব্রেরি থেকে বই ইস্যু করা হয় কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-3">
                    ১.৮.৪ উত্তর হ্যাঁ হলে, নিয়মিত বই ইস্যু করা হয় কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-4">
                    ১.৮.৫ উত্তর হ্যাঁ হলে, মাসে ইস্যুকৃত বই এর সংখ্যা
                    <input type="number"  class="form-control" name="" id="">
                </div>
                <div class="row mt-2 col-4">
                    ১.৮.৬ উত্তর হ্যাঁ হলে, নিয়মিত বই ইস্যু করা হয় কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-4">
                    ১.৮.৭ লাইব্রেরির পুস্তকাদির ক্যাটালগিং কম্পিউটারাইজড কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-4">
                    ১.৮.৮ লাইব্রেরি পরিচালনার জন্য সহকারী লাইব্রেরিয়ান আছে কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-4">
                    ১.৮.৯ লাইব্রেরি বিষয়ে সহকারী লাইব্রেরিয়ানের প্রশিক্ষণ আছে কি?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>
                <div class="row mt-2 col-4">
                    ১.৮.১০ লাইব্রেরি আওয়ার ক্লাস রুটিনে অনর্ভুক্ত আছে কি ?
                    <select class="custom-select " name="english_version" style="width: 90px">
                        <option value="1">হ্যাঁ</option>
                        <option value="2">না</option>
                    </select>
                </div>

            </div>
        </div>

        @include('components/footer')

    </div>
@endsection
