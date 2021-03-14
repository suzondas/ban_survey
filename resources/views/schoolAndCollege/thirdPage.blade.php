@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        {{--Banner--}}
        @include('../components/banner')
        {{--Navbar--}}
        @include('schoolAndCollege.navBar')
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
                    <label for="labYN">৩.১.১। প্রতিষ্ঠানে কম্পিউটার ল্যাব আছে কি?</label>
                    <select class="contentBoxInput" id="labYN">
                        <option>হ্যাঁ</option>
                        <option>না</option>
                    </select>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <td rowspan="2">ক্রমিক</td>
                                <td rowspan="2">মোট কম্পিউটার</td>
                                <td colspan="2">সচল</td>
                                <td rowspan="2">মেরামতযোগ্য</td>
                                <td rowspan="2">অচল</td>
                                <td rowspan="2">প্রদানকারী সংস্থা</td>
                            </tr>
                            <tr>
                                <td>ডেস্কটপ</td>
                                <td>ল্যাপটপ</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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
                                <label for="shikkhokBatayonTeacher"> ৩.২.১। শিক্ষক বাতায়নে সদস্য শিক্ষকের সংখ্যা</label>
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
        {{--Drinking Water--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৩</span>
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
                <div class="form-control bg-number-label">খাবার পানি সংক্রান্ত</div>
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
                                </tr>
                                <tr>
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
                            <label>৩.২.১। প্রতিষ্ঠানে সাবান পানিসহ হাত ধোয়ার ব্যবস্থা থাকলে কোন ধরনের ব্যবস্থা আছে</label>
                            <table>
                                <tr>
                                    <td>ছাত্রদের জন্য সাবান / সাবান জাতীয় উপাদান দিয়ে হাত ধোয়ার ব্যবস্থা</td>
                                    <td>ছাত্রীদের জন্য সাবান / সাবান জাতীয় উপাদান দিয়ে হাত ধোয়ার ব্যবস্থা</td>
                                    <td>শিক্ষকদের জন্য সাবান / সাবান জাতীয় উপাদান দিয়ে হাত ধোয়ার ব্যবস্থা</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/> </td>
                                    <td><input type="checkbox"/> </td>
                                    <td><input type="checkbox"/> </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Footer--}}
        @include('components/footer');

    </div>
@endsection
