@extends('schoolAndCollege/template')
@section('content')
    {{--Banner--}}
    @include('../components/banner')
    {{--Navbar--}}
    @include('schoolAndCollege.navBar')
    <hr>
    <div class="container">
        <h3 class="text-center">বিবিধ তথ্য (১)</h3>

        {{--LAB--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১</span>
                </div>
                <div class="form-control bg-number-label">ল্যাব সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="labYN">৩.১.১। প্রতিষ্ঠানে কম্পিউটার ল্যাব আছে কি?</label>
                            <select class="contentBoxInput" id="labYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="labYN">৩.১.১। প্রতিষ্ঠানে কম্পিউটার ল্যাবের সংখ্যা</label>
                            <input type="text"/> টি
                        </div>
                    </div>
                    {{--if Lab Available--}}
                    <div class="container">
                        <table class="table table-bordered text-center font-weight-bold">
                            <tbody>
                            <tr>
                                <td rowspan="2">ক্রমিক</td>
                                <td rowspan="2">মোট কম্পিউটার</td>
                                <td colspan="2">সচল</td>
                                <td rowspan="2">মেরামতযোগ্য</td>
                                <td rowspan="2">অচল</td>
                                <td rowspan="2">প্রতিষ্ঠার তারিখ</td>
                                <td rowspan="2">প্রদানকারী সংস্থা</td>
                                <td rowspan="2">প্রতিদিন কত ঘন্টা ব্যবহার হয়</td>
                                <td rowspan="2">ব্যবহারকারী শিক্ষার্থীর সংখ্যা</td>
                            </tr>
                            <tr>
                                <td>ডেস্কটপ</td>
                                <td>ল্যাপটপ</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><select>
                                        <option value=""></option>
                                        <option value="">শিক্ষা মন্ত্রণালয়</option>
                                        <option value="">মাউশি</option>
                                        <option value="">প্রকল্প</option>
                                        <option value="">শিক্ষাবোর্ড</option>
                                        <option value="">বিসিসি</option>
                                        <option value="">এনজিও</option>
                                        <option value="">ক্রয়কৃত</option>
                                        <option value="">স্থানীয় সরকার</option>
                                        <option value="">অন্যান্য</option>
                                    </select></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <label for="labYN">৩.১.২। ল্যাব ব্যতিত অন্য কম্পিউটার আছে কি?</label>
                    <select class="contentBoxInput" id="labYN">
                        <option>হ্যাঁ</option>
                        <option>না</option>
                    </select>
                    {{--if Lab Available--}}
                    <div class="container">
                        <table class="table table-bordered text-center font-weight-bold">
                            <tbody>
                            <tr>
                                <td rowspan="2">মোট কম্পিউটার</td>
                                <td colspan="2">সচল</td>
                                <td rowspan="2">মেরামতযোগ্য</td>
                                <td rowspan="2">অচল</td>
                            </tr>
                            <tr>
                                <td>ডেস্কটপ</td>
                                <td>ল্যাপটপ</td>
                            </tr>
                            <tr>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                                <td><input type="text" class="contentBoxInput w-50"/></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <label>৩.১.৩। কম্পিউটার প্রদানকারী সংস্থা অনুযায়ী সংখ্যা:</label>
                    <table class="table table-bordered text-center font-weight-bold">
                        <tr>
                            <td>সংস্থার নাম</td>
                            <td>শিক্ষা মন্ত্রণালয়</td>
                            <td>মাউশি</td>
                            <td>প্রকল্প</td>
                            <td>শিক্ষাবোর্ড</td>
                            <td>বিসিসি</td>
                            <td>এনজিও</td>
                            <td>ক্রয়কৃত</td>
                            <td>স্থানীয় সরকার</td>
                            <td>অন্যান্য</td>
                        </tr>
                        <tr>
                            <td>সংখ্যা</td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                            <td><input type="text" class="contentBoxInput w-50"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        {{--Multimedia Classroom/Projector--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.২</span>
                </div>
                <div class="form-control bg-number-label">মাল্টিমিডিয়া ক্লাসরুম সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td class="">
                            <label for="multimediaClassroom">৩.২.১। মাল্টিমিডিয়া ক্লাসরুমের সংখ্যা</label>
                            <input class="" id="multimediaClassroom" type="text"/>
                        </td>
                        <td>
                            ৩.২.১। মাল্টিমিডিয়া ক্লাসরুমের ব্যবহারে সক্ষম শিক্ষকের সংখ্যা<br>
                            <div class="row">
                                <div class="col-md-6 input-group form-inline">
                                    মহিলাঃ <input class="" id="" type="text"/>
                                </div>
                                <div class="col-md-6 input-group form-inline">
                                    পুরুষ <input class="" id="" type="text"/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            <label for="">৩.২.১। মাল্টিমিডিয়া ব্যবহার করে প্রতিদিন কয়টি ক্লাস নেওয়া হয়</label>
                            <input style="width: 40px;" id="" type="text"/> টি
                        </td>
                        <td>
                            ৩.১.১। মাল্টিমিডিয়া ক্লাসরুমের ব্যবহার করে ক্লাস নেওয়ার<br> পর
                            ড্যাসবোর্ডে এন্ট্রি দেওয়া হয় কি?
                            <select class="" id="dashboardEntry">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            <label for="projectorYN">৩.১.১। মাল্টিমিডিয়া প্রজেক্টর আছে কি?</label>
                            <select class="" id="projectorYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td class="">
                            <label for="">৩.২.১। মাল্টিমিডিয়া প্রজেক্টরের সংখ্যা</label>
                            <input class="" id="" type="text"/> টি
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--ICT--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৩</span>
                </div>
                <div class="form-control bg-number-label">আইসিটি সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td colspan="2">
                            <label for="ictClassYN">৩.২.১। আইসিটি বিষয়ে পাঠদান করা হয় কি?</label>
                            <select class="contentBoxInput" id="ictClassYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ictTeacherYN">৩.২.১। আইসিটি বিষয়ে শিক্ষক আছে কি?</label>
                            <select class="contentBoxInput" id="ictTeacherYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label for="ictTeacherQualification">৩.২.১। আইসিটি বিষয়ে পাঠদানকারী শিক্ষকের শিক্ষাগত
                                যোগ্যতা কী (সর্বোচ্চ)?</label>
                            <select class="contentBoxInput" id="ictTeacherQualification">
                                <option>১. স্নাতক (পাস)</option>
                                <option>২. বিএসসি ইঞ্জি:(কম্পিউটার)</option>
                                <option>৩. ডিপ্লোম ইঞ্জি:(কম্পিউটার)</option>
                                <option>৪. স্নাতোত্তর</option>
                                <option>৫. স্নাতক সম্মান</option>
                                <option>৬. অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nonIctTeacherQualification">৩.২.১। আইসিটি বিষয়ে ডিগ্রিধারী নয় এমন শিক্ষকের
                                শিক্ষাগত যোগ্যতা কী (সর্বোচ্চ)?</label>
                            <select class="contentBoxInput" id="nonIctTeacherQualification">
                                <option>১. স্নাতক (পাস)</option>
                                <option>২. স্নাতকোত্তর</option>
                                <option>৩. অন্যান্য</option>
                            </select>
                        </td>
                        <td>
                            <label for="ictTeacherTraining"> ৩.২.১। আইসিটি বিষয়ে ডিগ্রিধারী নয় এমন শিক্ষক কী ধরনের
                                প্রশিক্ষণ গ্রহণ করেছেন</label>
                            <select class="contentBoxInput" id="ictTeacherTraining">
                                <option>১. সার্টিফিকেট কোর্স</option>
                                <option>২. ডিপ্লোমা কোর্স</option>
                                <option>৩. অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="shikkhokBatayonYN">৩.২.১। প্রতিষ্ঠানের শিক্ষকগণ শিক্ষক বাতায়নের সদস্য
                                কি?</label>
                            <select class="contentBoxInput" id="shikkhokBatayonYN">
                                <option>১. হ্যাঁ</option>
                                <option>২. না</option>
                            </select>
                        </td>
                        <td>
                            <div class="">
                                <label for="shikkhokBatayonTeacher"> ৩.২.১। শিক্ষক বাতায়নে সদস্য শিক্ষকের
                                    সংখ্যা</label>
                                <input class="contentBoxInput" id="" type="text"/> জন
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="digitalHajiraYN">৩.২.১। প্রতিষ্ঠানে ডিজিটাল হাজিরা ব্যবহৃত হয় কি?</label>
                            <select class="contentBoxInput" id="digitalHajiraYN">
                                <option>১. হ্যাঁ</option>
                                <option>২. না</option>
                            </select>
                        </td>
                        <td>
                            <label for="digitalHajiraType">৩.২.১। প্রতিষ্ঠানে ডিজিটাল হাজিরা কাদের জন্য ব্যবহৃত
                                হয়?</label>
                            <select class="contentBoxInput" id="digitalHajiraType">
                                <option>১. শিক্ষার্থীর জন্য</option>
                                <option>২. শিক্ষক ও কর্মচারীর জন্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="languageClubYN">৩.২.১। প্রতিষ্ঠানে ল্যাংগুয়েজ ক্লাব আছে কি?</label>
                            <select class="contentBoxInput" id="languageClubYN">
                                <option>১. হ্যাঁ</option>
                                <option>২. না</option>
                            </select>
                        </td>
                        <td>
                            <label for="languageClubType">৩.২.১। ল্যাংগুয়েজ ক্লাবে কোন ধরনের ভাষার চর্চা
                                হয়?</label>
                            <select class="contentBoxInput" id="languageClubType">
                                <option>১. বাংলা</option>
                                <option>২. ইংরেজি</option>
                                <option>২. আরবি</option>
                                <option>২. চাইনিজ</option>
                                <option>২. কোরিয়ান</option>
                                <option>২. জাপানি</option>
                                <option>২. রুশ</option>
                                <option>২. স্প্যানিশ</option>
                                <option>২. অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="internetYN">৩.২.১। ইন্টারনেট সংযোগ আছে কি?</label>
                            <select class="contentBoxInput" id="internetYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label for="wifiYN">৩.২.১। প্রতিষ্ঠানে WiFi সংযোগ আছে কি?</label>
                            <select class="contentBoxInput" id="wifiYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ccCameraYN">৩.২.১। প্রতিষ্ঠানে সিসি ক্যামেরা আছে কি?</label>
                            <select class="contentBoxInput" id="ccCameraYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label for="ccCameraAmount">৩.২.১। প্রতিষ্ঠানে সিসি ক্যামেরার সংখ্যা?</label>
                            <input class="contentBoxInput" id="" type="text"/> টি
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="internetType">৩.২.১। ইন্টারনেট সংযোগের ধরণ?</label>
                            <select class="contentBoxInput" id="internetType">
                                <option>১-মডেম</option>
                                <option>২-ব্রডব্যান্ড</option>
                            </select>
                        </td>
                        <td>
                            <label for="bandwidth">৩.২.১। ইন্টারনেট সংযোগ ব্রডব্যান্ড হলে ব্যান্ডউইথ কত?</label>
                            <input class="contentBoxInput" id="bandwidth" type="text"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <label for="computerInPedagogy">৩.২.১। Pedagogical(শিখন-শেখানো) কাজে কম্পিউটার ব্যবহৃত
                                হয়
                                কি?</label>
                            <select class="contentBoxInput" id="computerInPedagogy">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label for="computerInPedagogyAmount">৩.২.১। শিখন-শেখানো কাজে ব্যবহহৃত কম্পিউটার
                                সংখ্যা?</label>
                            <table class="table-bordered">
                                <tr>
                                    <td>ডেস্কটপ</td>
                                    <td>ল্যাপটপ</td>
                                    <td>মোট</td>
                                </tr>
                                <tr>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="internetInPedagogy">৩.২.১। শিখন-শেখানো কাজে ইন্টারনেট ব্যবহৃত হয় কি?</label>
                            <select class="contentBoxInput" id="internetInPedagogy">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label for="internetInPedagogyUser">৩.২.১। শিখন-শেখানো কাজে ইন্টারনেট কে ব্যবহার
                                করে?</label>
                            <select class="contentBoxInput" id="internetInPedagogyUser">
                                <option>১. শিক্ষার্থী</option>
                                <option>২. শিক্ষক</option>
                                <option>৩. শিক্ষক ও শিক্ষার্থী</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <label for="computerBasicCourseYN">৩.২.১। প্রতিষ্ঠানটিতে Computer Basic Course পাঠদান
                                করানো
                                হয় কি?</label>
                            <select class="contentBoxInput" id="computerBasicCourseYN">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label for="computerBasicCourseStudents">৩.২.১। Computer Basic Course পাঠদানরত মোট
                                শিক্ষার্থীর সংখ্যা?</label>
                            <table class="table-bordered">
                                <tr>
                                    <td>শ্রেণি</td>
                                    <td>মোট</td>
                                    <td>ছাত্রী</td>
                                </tr>
                                <tr>
                                    <td>৬ষ্ঠ-৮ম</td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                </tr>
                                <tr>
                                    <td>৯ম-১০ম</td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                </tr>
                                <tr>
                                    <td>১১তম-১২তম</td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                </tr>
                                <tr>
                                    <td>স্নাতক(পাস)</td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                </tr>
                                <tr>
                                    <td>স্নাতক(সম্মান)</td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                </tr>
                                <tr>
                                    <td>স্নাতকোত্তর</td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                    <td><input class="contentBoxInput w-50" id="" type="text"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Infrustructure AND Facilities--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৩</span>
                </div>
                <div class="form-control bg-number-label">অবকাঠামো/সুবিধা সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <div class="row">
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
                </div>
                <div class="col-md-6">
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
        {{--Drinking Water--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৪</span>
                </div>
                <div class="form-control bg-number-label">খাবার পানি সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td class="align-middle">
                            <label>৩.২.১। শিক্ষক ও শিক্ষার্থীদের জন্য নিরাপদ খাবার পানির ব্যবস্থা আছে কি ?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। উত্তর হাঁ হলে খাবার পানির উৎস কী ? (একাধিক হতে পারে)</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td><input class="mr-2" type="checkbox" name="kup" id="kup"
                                               value="1">কূপ
                                    </td>
                                    <td><input class="mr-2" type="checkbox" name="tubewl" id="tubewl"
                                               value="2">নলকূপ
                                    </td>
                                    <td><input class="mr-2" type="checkbox" name="deepTubewel"
                                               id="deepTubewel" value="3" checked="checked">গভীর
                                        নলকূপ
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="mr-2" type="checkbox" name="supplyWater"
                                               id="supplyWater" value="4">সাপ্লাই পানি
                                    </td>
                                    <td><input class="mr-2" type="checkbox" name="jhorna" id="jhorna"
                                               value="5">ঝর্ণা
                                    </td>
                                    <td><input class="mr-2" type="checkbox" name="bottleWater"
                                               id="bottleWater" value="6">বোতল জাত পানি/পানির
                                        জার
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><input class="mr-2" type="checkbox" name="rainWater"
                                                           id="rainWater" value="7">বৃষ্টির পানি
                                        হার্ভেস্টিং
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। পানির উৎস নলকূপ হলে আর্সেনিক পরীক্ষা করা হয়েছে কি ?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। পানির আর্সেনিক পরীক্ষার ফলাফল কী ?</label>
                            <select class="contentBoxInput">
                                <option>১-মাত্রা সহনীয়</option>
                                <option>২-মাত্রা অসহনীয়</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। পানির ম্যাঙ্গানিজ পরীক্ষা করা হয়েছে কি ?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। পানির ম্যাঙ্গানিজ পরীক্ষা করা হয়েছে কি?</label>
                            <select class="contentBoxInput">
                                <option>১-মাত্রা সহনীয়</option>
                                <option>২-মাত্রা অসহনীয়</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>৩.২.১। পানি বিশুদ্ধকরণ মেশিন / সুবিধা আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Toilet Facilites--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৩</span>
                </div>
                <div class="form-control bg-number-label">টয়লেট ও ওয়াশব্লক সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td class="align-middle">
                            <label>৩.২.১। প্রতিষ্ঠানটিতে টয়লেট সুবিধা আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td class="w-50">
                            <label>৩.২.১। উত্তর হাঁ হলে কোন ধরনের টয়লেট (সংখ্যা)</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>স্লাব টয়লেট</td>
                                    <td>ফ্লাশসহ টয়লেট</td>
                                    <td>ফ্লাশ ছাড়া টয়লেট</td>
                                    <td>কাঁ‍‌‍‍‌‌‌চা টয়লেট</td>
                                </tr>
                                <tr>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। অবস্থা অনুযায়ী টয়লেট সংখ্যা</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>ব্যবহার যোগ্য</td>
                                    <td>ব্যবহার অযোগ্য</td>
                                    <td>মোট</td>
                                </tr>
                                <tr>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                </tr>
                            </table>
                        </td>
                        <td class="align-middle">
                            <label>৩.২.১।প্রতিষ্ঠান প্রধানের জন্য সংযুক্ত টয়লেটের সুবিধা আছে কি ?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><label>৩.২.১। ছাত্রীদের জন্য পৃথক টয়লেটের ব্যবস্থা আছে কি ?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label>৩.২.১। ছাত্রীদের পৃথক টয়লেট সংখ্যা:</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>নতুন</td>
                                    <td>পুরাতন</td>
                                    <td>মোট</td>
                                </tr>
                                <tr>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.২.১। ছাত্রদের পৃথক টয়লেট সংখ্যা:</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>নতুন</td>
                                    <td>পুরাতন</td>
                                    <td>মোট</td>
                                </tr>
                                <tr>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                </tr>
                            </table>
                        </td>
                        <td><label>৩.২.১। শিক্ষকদের পৃথক টয়লেট সংখ্যা:</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>নতুন</td>
                                    <td>পুরাতন</td>
                                    <td>মোট</td>
                                </tr>
                                <tr>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.২.১। কর্মচারীর পৃথক টয়লেট সংখ্যা:</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>নতুন</td>
                                    <td>পুরাতন</td>
                                    <td>মোট</td>
                                </tr>
                                <tr>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                </tr>
                            </table>
                        </td>
                        <td><label>৩.২.১। যৌথ ব্যবহার্য টয়লেট সংখ্যা:</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>নতুন</td>
                                    <td>পুরাতন</td>
                                    <td>মোট</td>
                                </tr>
                                <tr>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                    <td><input class="w-50"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীদের জন্য পৃথক টয়লেট আছে কি ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। টয়লেট পরিষ্কার পরিচ্ছন্ন রাখা হয় কি ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। ব্যবহারের জন্য পর্যাপ্ত পানির ব্যবস্থা আছে কি ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানে সাবান পানিসহ হাত ধোয়ার ব্যবস্থা আছে কি ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>৩.২.১। প্রতিষ্ঠানে সাবান পানিসহ হাত ধোয়ার ব্যবস্থা থাকলে কোন ধরনের ব্যবস্থা
                                আছে</label>
                            <table>
                                <tr>
                                    <td>ছাত্রদের জন্য সাবান / সাবান জাতীয় উপাদান দিয়ে হাত ধোয়ার ব্যবস্থা</td>
                                    <td>ছাত্রীদের জন্য সাবান / সাবান জাতীয় উপাদান দিয়ে হাত ধোয়ার ব্যবস্থা</td>
                                    <td>শিক্ষকদের জন্য সাবান / সাবান জাতীয় উপাদান দিয়ে হাত ধোয়ার ব্যবস্থা</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td><input type="checkbox"/></td>
                                    <td><input type="checkbox"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.২.১। ওয়াশ ব্লক আছে কি ? ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select></td>
                        <td><label>৩.২.১। ওয়াশ ব্লক পরিষ্কার পরিচ্ছন্ন রাখা হয় কি ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label>৩.২.১। ওয়াশ ব্লকের সংখ্যা ?</label>
                            <input type="text"/> টি
                        </td>
                        <td><label>৩.২.১। ওয়াশ ব্লক সংখ্যা পর্যাপ্ত কি ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>৩.২.১। ট্যাংক হতে ট্যাপের মাধ্যমে (Running Water)পানি সরবারহের
                                ব্যবস্থা আছে কি ?</label>
                            <select class="" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Electricity--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৩</span>
                </div>
                <div class="form-control bg-number-label">বিদ্যুৎ সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>প্রতিষ্ঠানে বিদ্যুৎ সংযোগ আছে কি?
                            <select class="contentBoxInput" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select></td>
                        <td>প্রতিষ্ঠানে কোন ধরনের সংযোগ আছে?
                            <select class="contentBoxInput" id="">
                                <option>বিদ্যুৎ</option>
                                <option>সোলার প্যানেল</option>
                                <option>ফুয়েল গ্যাস জেনারেটর</option>
                                <option>অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>প্রতিষ্ঠানে সোলার প্যানেল আছে কি?<select class="contentBoxInput" id="">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select></td>
                        <td>সোলার প্যানেলে কতটি লাইট ফ্যান চলে?
                            <div class="row">
                                <div class="col">ফ্যান: <input type="text"/></div>
                                <div class="col">লাইট: <input type="text"/></div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Library--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৩</span>
                </div>
                <div class="form-control bg-number-label">লাইব্রেরী সংক্রান্ত তথ্য</div>
            </div>
            <tr class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            ১.৮ লাইব্রেরির জন্য পৃথক ভবন আছে কি?
                            <select name="english_version">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            ১.৮.১ লাইব্রেরির জন্য কক্ষ আছে কি?
                            <select name="english_version">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            ১.৮.২ লাইব্রেরিতে বইয়ের সংখ্যা
                            <div class="row">
                                <div class="col form-inline"><label class="label-number" for="">পাঠ্যপুস্তক</label>
                                    <input type="number" class="w-50 ml-2 form-control" name="" id=""></div>
                                <div class="col form-inline"><label class="label-number" for="">সহায়ক</label>
                                    <input type="number" class="w-50 ml-2 form-control" name="" id=""></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ১.৮.৩ শিক্ষার্থীদের লাইব্রেরি থেকে বই ইস্যু করা হয় কি?
                            <select name="english_version">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            ১.৮.৪ উত্তর হ্যাঁ হলে, নিয়মিত বই ইস্যু করা হয় কি?
                            <select name="english_version">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            ১.৮.৫ উত্তর হ্যাঁ হলে, মাসে ইস্যুকৃত বই এর সংখ্যা
                            <input type="number" class="form-control w-25" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ১.৮.৬ উত্তর হ্যাঁ হলে, নিয়মিত বই ইস্যু করা হয় কি?
                            <select name="english_version">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            ১.৮.৭ লাইব্রেরির পুস্তকাদির ক্যাটালগিং কম্পিউটারাইজড কি?
                            <select name="english_version">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            ১.৮.৮ লাইব্রেরি পরিচালনার জন্য সহকারী লাইব্রেরিয়ান আছে কি?
                            <select name="english_version" style="width: 90px">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ১.৮.৯ লাইব্রেরি বিষয়ে সহকারী লাইব্রেরিয়ানের প্রশিক্ষণ আছে কি?
                            <select name="english_version" style="width: 90px">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            ১.৮.১০ লাইব্রেরি আওয়ার ক্লাস রুটিনে অনর্ভুক্ত আছে কি ?
                            <select name="english_version" style="width: 90px">
                                <option value="">select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
    {{--Footer--}}
    @include('components/footer');
@endsection
