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
                <div class="form-control bg-number-label">শিক্ষাক্রম সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে পাঠ পরিকল্পনা করা হয় কি ? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। সৃজনশীল প্রশ্ন নিজেরা তৈরী করেন কি ? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। একজন শিক্ষককে সপ্তাহে গড়ে কতটি ক্লাস নিতে হয় ? </label>
                            <input type="text"/>
                        </td>
                        <td>
                            <label>৩.২.১। অতিরিক্ত ক্লাশ নেওয়া হয় কি ? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। অতিরিক্ত ক্লাশ কখন নেওয়া হয় ? </label>
                            <select class="contentBoxInput">
                                <option>স্কুল সময়ে</option>
                                <option>স্কুল সময়ের বাইরে</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতি বিষয়ে পাঠদানের জন্য নির্ধারিত সময় কত? (প্রতি পিরিয়ড) </label>
                            <input type="text"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <label>৩.২.১। সপ্তাহে কত ঘন্টা বিজ্ঞানাগার ব্যবহার করা হয়? </label>
                            <input type="text"/> ঘন্টা
                        </td>
                        <td>
                            <label>৩.২.১। বিজ্ঞানাগারে ব্যবহৃত প্রধান ৪টি এ্যাপারেটাস ও কেমিক্যালের নাম </label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>এ্যাপারেটাস</td>
                                    <td><input placeholder="১." class="w-100"/></td>
                                    <td><input placeholder="২." class="w-100"/></td>
                                    <td><input placeholder="৩." class="w-100"/></td>
                                    <td><input placeholder="৪." class="w-100"/></td>
                                </tr>
                                <tr>
                                    <td>ক্যামিকেল</td>
                                    <td><input placeholder="১." class="w-100"/></td>
                                    <td><input placeholder="২." class="w-100"/></td>
                                    <td><input placeholder="৩." class="w-100"/></td>
                                    <td><input placeholder="৪." class="w-100"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। শিক্ষার গুণগত মান বৃদ্ধির জন্য কী কী পদক্ষেপ নিয়েছেন (প্রতিষ্ঠান প্রধান) (In
                                English Language with Capital Letter)</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td><input placeholder="১." class="w-100"/></td>
                                    <td><input placeholder="২." class="w-100"/></td>
                                    <td><input placeholder="৩." class="w-100"/></td>
                                    <td><input placeholder="৪." class="w-100"/></td>
                                </tr>
                            </table>
                        </td>
                        <td class="align-middle">
                            <label>৩.২.১। পাঠ্যক্রম সম্পর্কে আপনার মতামত ?</label>
                            <select class="contentBoxInput">
                                <option>১-যথাযথ</option>
                                <option>২-অতিরিক্ত</option>
                                <option>৩-অপর্যাপ্ত</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। প্রধান শিক্ষক / শিক্ষক ডায়েরি ব্যবহার করেন কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.২.১। নিয়মিত শিক্ষার্থী সমাবেশ হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থীদের জন্য দ্বিভাষিক শিক্ষা ও শিখন কার্যক্রম চালু
                                আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.২.১। ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থীদের নিজস্ব ভাষায় পাঠদান করা হয় কি</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                            <label>৩.২.১। কোন ভাষায় পাঠদান করা হয়</label>
                            <select class="contentBoxInput">
                                <option>চাকমা</option>
                                <option>ত্রিপুরা</option>
                                <option>সাদরি</option>
                                <option>মারমা</option>
                                <option>গারো</option>
                                <option>অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। পূর্ববর্তী বছর (২০১৯) সালে কত কার্য দিবস পাঠদান করা হয়েছে </label>
                            <input type="text"/>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে মাদক বিরোধী কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে সন্ত্রাস বিরোধী কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে জঙ্গীবাদ বিরোধী কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে কমিউনিটি ইন্টারেকশন আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে বাল্য বিবাহ প্রতিরোধ কার্যক্রম আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে নিরাপদ সড়ক বিষয়ে সতেচনতা মূলক কার্যক্রম পরিচালিত হয়
                                কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে জাতীয় শুদ্ধাচার কৌশল বিষয়ে কোন কার্যক্রম পরিচালিত হয়
                                কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Natural Disaster--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৬</span>
                </div>
                <div class="form-control bg-number-label">দুর্যোগ সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td class="align-middle">
                            <label>৩.৯.২৯ প্রতিষ্ঠানটি দূর্যোগকালীন আশ্রয় কেন্দ্র হিসেবে ব্যবহৃত হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>

                        <td class="align-middle">
                            <label>৩.৯.৩০ প্রতিষ্ঠানের সকল ধরনের তথ্য সংরক্ষণ পদ্ধতি কোন ধরনের</label>
                            <select class="contentBoxInput">
                                <option>ম্যানুয়েল/হার্ড কপি</option>
                                <option>ডিজিটাল/সফটওয়্যার</option>
                                <option>ম্যানুয়েল ও সফটওয়্যার উভয়</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <label>৩.১০ আপনার প্রতিষ্ঠানটি দুর্যোপপ্রবণ এলাকায় অবস্থিত কি?</label>
                            <select class="contentBox">
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.১০.১ আপনার প্রতিষ্ঠানটি ২০২০ সালে কোন ধরনের দূর্যোগে কবলিত হয়েছিল?</label>
                            <select class="contentBox">
                                <option>জলোচ্ছ্বাস-১</option>
                                <option>সাইক্লোন-২</option>
                                <option>বন্যা-৩</option>
                                <option>জলাবদ্ধতা-৪</option>
                                <option>লবণাক্ততা-৫</option>
                                <option>নদী ভাঙ্গন-৬</option>
                                <option>খরা প্রবণ-৭</option>
                                <option>ভূমিকম্প-৮</option>
                                <option>পাহাড়ধ্বস-৯</option>
                                <option>জোয়ার ভাটা-১০</option>
                                <option>অন্যান্য-১১</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">
                    <label class="align-middle"> ৩.১০.১ আপনার প্রতিষ্ঠানটি ২০২০ সালে কোন ধরনের দূর্যোগে কবলিত
                        হয়েছিল?</label>
                    <tr>
                        <td>ক্ষতির বিবরণ</td>
                        <td>সর্বশেষ (২০২০ সাল)</td>
                        <td>২০২০ এর আম্ফান</td>
                        <td>২০২০ এর বন্যা</td>
                    </tr>
                    <tr>
                        <td><label>১. ছাত্রাবাসের কক্ষ ক্ষতিগ্রস্ত</label>
                        </td>
                        <td><input type="text"/> টি</td>
                        <td><input type="text"/> টি</td>
                        <td><input type="text"/> টি</td>
                    </tr>
                    <tr>
                        <td><label>২. শ্রেণিকক্ষ ক্ষতিগ্রস্ত</label>
                        </td>
                        <td><input type="text"/> টি</td>
                        <td><input type="text"/> টি</td>
                        <td><input type="text"/> টি</td>
                    </tr>
                    <tr>
                        <td><label>৩. বৃক্ষ মারা গিয়াছে অন্তত</label>
                        </td>
                        <td><input type="text"/> টি</td>
                        <td><input type="text"/> টি</td>
                        <td><input type="text"/> টি</td>
                    </tr>
                    <tr>
                        <td><label>৪. শিক্ষা প্রতিষ্ঠান বন্ধ ছিল</label>
                        </td>
                        <td><input type="text"/> দিন</td>
                        <td><input type="text"/> দিন</td>
                        <td><input type="text"/> দিন</td>
                    </tr>
                    <tr>
                        <td><label>৫. প্রতিষ্ঠান খোলা ছিল, কিন্তু ক্লাস নেয়া যায় নি</label>
                        </td>
                        <td><input type="text"/> দিন</td>
                        <td><input type="text"/> দিন</td>
                        <td><input type="text"/> দিন</td>
                    </tr>
                    <tr>
                        <td><label>৬. প্রতিষ্ঠান স্থানান্তর করতে হয়েছে</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>৭. প্রতিষ্ঠানে আসার রাস্তা আংশিক ক্ষতিগ্রস্থ হয়েছে</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>৮. প্রতিষ্ঠানে আসার রাস্তা পুরা ক্ষতিগ্রস্থ হয়েছ</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>৯. প্রতিষ্ঠান খোলা ছিল, কিন্তু শিক্ষকদের স্কুল আসতে খু সমস্যা হয়েছিল</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>১০. শিক্ষকদের দুর্যোগ সহায়তা কাজে নিয়োজিত হবার জন্য অন্যত্র যেতে হয়েছিল অন্তত</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>১১.পানি সরবরাহ ব্যবস্থা ভেঙ্গে পড়েছিল অন্তত</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>১২. টয়লেট ব্যবস্থা ভেঙ্গে পড়েছিল অন্তত</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>১৩. প্রতিষ্ঠানটি আশ্রয় কেন্দ্র হিসেবে ব্যবহৃত হয়েছিল অন্তত</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>১৪. খেলার মাঠ ব্যবহার অনুপযোগী হয়ে পড়েছিল</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                    </tr>
                    <tr>
                        <td><label>১৫. কারিকুলাম সটিকভাবে শেষ করা যায়নি অন্তত</label>
                        </td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                        <td><input type="text"/> বার</td>
                </table>
                <table class="table table-bordered table-striped">
                    <td colspan="5"><label class="align-middle"> ৩.১০.৩ সর্বশেষ দুর্যোগের ফলে শিক্ষার্থীঝরে পড়ার
                            সংখ্যা:</label></td>
                    <td><label class="align-middle"> ৩.১০.৪ সর্বশেষ দুর্যোগের পর কোন ধরনের ক্ষয়ক্ষতি কাটিয়ে ওঠা যায় নি?
                            (একাধিক টিক হতে পারে)</label></td>
                    <tr>
                        <td rowspan="2" style="width: 100px">দুর্যোগের প্রকৃতি</td>
                        <td rowspan="2">দুর্যোগের নাম</td>
                        <td colspan="3" class="text-center">ঝড়ে পড়া শিক্ষার্থীর সংখ্যা</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">ভবনের ক্ষয়ক্ষতি</td>
                    </tr>
                    <tr>
                        <td class="text-center">ছাত্র</td>
                        <td class="text-center">ছাত্রী</td>
                        <td class="text-center">মোট</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">আসবাবপত্র</td>
                    </tr>
                    <tr>
                        <td rowspan="3">প্রাকৃতিক</td>
                        <td>১. <input type="text" class="w-75"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">ছাদ</td>
                    </tr>
                    <tr>
                        <td>২. <input type="text" class="w-75"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">দরজা/জানালা</td>
                    </tr>
                    <tr>
                        <td>৩. <input type="text" class="w-75"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">পানীয় জলের ব্যবস্থা</td>
                    </tr>
                    <tr>
                        <td rowspan="3">মানব সৃষ্ট</td>
                        <td>১. <input type="text" class="w-75"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">স্যানিটেশন ব্যবস্থা</td>
                    </tr>
                    <tr>
                        <td>২. <input type="text" class="w-75"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">সংযোগ রাস্তা</td>
                    </tr>
                    <tr>
                        <td>৩. <input type="text" class="w-75"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td> অন্যান্য: <input class="w-75" type="number" name=""></td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped text-center">
                    <label class="align-middle"> ৩.১০.৫ দুর্যোগের ফলে ছাত্র-ছাত্রীরা কোন বিষয়সমূহে ক্ষতিগ্রস্ত হয়/পিছিয়ে
                        পড়ে? (ক্ষতিগ্রস্ত বিষয় (টিক চিহ্ন দিন))</label>
                    <tr>
                        <td rowspan="2" style="width:150px">বিষয়</td>
                        <td colspan="3" class="text-center">ক্ষতির মাত্রা (টিক চিহ্ন দিন)</td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>বাড়িতে চালিয়ে নিতে পারে</td>
                        <td>স্কুলে না আসলে খুবই সমস্যায় পড়ে</td>
                        <td>পিছিয়ে পড়ার ফলে স্থায়ী ক্ষতি হয়</td>
                        <td style="width:250px">৩.১০.৬ দুর্যোগ মোকাবেলায় সক্ষমতা বাড়ানোর জন্য কী কী পদক্ষেপ
                            গ্রহণ করা হয়েছে?
                        </td>
                        <td style="width:300px">৩.১০.৭ প্রতিষ্ঠানটি প্রতিবছর এবং দীর্ঘমেয়াদী দুর্যোগ ঝুঁকি
                            সংক্রান্ত কোন মূল্যায়ন প্রতিবেদন করেছে/পাঠিয়েছে কী?
                        </td>
                    </tr>
                    <tr>
                        <td>বাংলা (১)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">উল্লেখযোগ্য কোন পদক্ষেপ
                            গ্রহণ করা হয়নি
                        </td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">হ্যাঁ, বিভাগীয় ছক ও
                            নির্দেশনা অনুযায়ী পাঠানো হয়
                        </td>
                    </tr>
                    <tr>
                        <td>ইংরেজি (২)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">সমস্যাসমূহ সনাক্ত ও
                            তালিকাভুক্ত করা হয়েছে
                        </td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">সমস্যাসমূহ সনাক্ত ও
                            তালিকাভুক্ত করা হয়েছে
                        </td>
                    </tr>
                    <tr>
                        <td>গণিত (৩)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">প্রশাসনকে লিখিতভাবে জানানো
                            হয়েছে
                        </td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">ফোনে প্রতিষ্ঠান প্রধান
                            কর্তৃপক্ষকে অবহিত করেছেন
                        </td>
                    </tr>
                    <tr>
                        <td>বিজ্ঞান (৪)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">বিভিন্ন আলোচনা সভায়
                            উত্থাপন করা হয়েছে
                        </td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">ভালোভাবে নিজেদের জন্য
                            করেছে
                        </td>
                    </tr>
                    <tr>
                        <td>সমাজ বিজ্ঞান (৫)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">পিটিএ ও এসএমসি সভায় আলোচনা
                            হয়েছে
                        </td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">কখনো এভাবে চিন্তা করা হয়নি
                        </td>
                    </tr>
                    <tr>
                        <td>সমাজ বিজ্ঞান (৫)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td> অন্যান্য: <input class="mr-2" type="number" name=""></td>
                        <td> অন্যান্য: <input class="mr-2" type="number" name=""></td>
                    </tr>
                    <tr>
                        <td>হিসাব বিজ্ঞান (৬)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                    </tr>
                    <tr>
                        <td>ধর্ম (৭)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                    </tr>
                    <tr>
                        <td>অন্যান্য (৮)</td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1"></td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Covid-19 related info--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৭</span>
                </div>
                <div class="form-control bg-number-label">কোভিড-১৯ সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">

                    <tr>
                        <td>৩.১১ করোনাকালীন শিক্ষার্থীদের পড়াশোনার ক্ষেত্রে আপনার প্রতিষ্ঠানের ভূমিকা কী ছিল?</td>
                        <td>
                            <label>৩.১১.১ সংসদ টেলিভিশনে প্রচারিত শিখন-শেখানো কার্যক্রমে আপনার শিক্ষা প্রতিষ্ঠানের
                                শিক্ষার্থীদের অংশগ্রহণ কেমন?</label>
                            <select class="contentBox">
                                <option>সন্তোষজনক-১</option>
                                <option>মোটামুটি-২</option>
                                <option>সন্তোষজনক নয়-৩</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">অনলাইন ক্লাসের আয়োজন করা
                            হয়েছে-১
                        </td>
                        <td>
                            <label>৩.১১.৪ আপনার প্রতিষ্ঠানে স্বাস্থ্যবিধি নিশ্চিত করে পাঠদান কার্যক্রম পরিচালনা করা সম্ভব হচ্ছে কি না?</label>
                            <select class="contentBox">
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">শিক্ষার্থীদের পড়াশোনার
                            বিষয়ে টেলিফোনিক তদারকি করা হয়েছে-২
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">লকডাউনের কারণে কোন উদ্যোগ
                            নেওয়া যায়নি-৩
                        </td>
                    </tr>
                    <tr>
                        <td><input class="mr-2" type="checkbox" name="kup" id="kup" value="1">অনলাইনে পরীক্ষা নিয়েছেন
                            কিনা-৪
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">

                    <tr>
                        <td colspan="6">৩.১১.২ করোনায় আক্রান্ত শিক্ষার্থী, শিক্ষক ও কর্মচারীদের তথ্য:</td>
                        <td colspan="6">৩.১১.৩ করোনায় মৃত্যুবরণকারী শিক্ষার্থী, শিক্ষক ও কর্মচারীদের তথ্য:</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2">শিক্ষার্থী</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">কর্মচারী</td>
                        <td colspan="2">শিক্ষার্থী</td>
                        <td colspan="2">শিক্ষক</td>
                        <td colspan="2">কর্মচারী</td>
                    </tr>
                    <tr class="text-center">
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tr class="text-center">
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                        <td><input type="number" class="w-75"></td>
                </table>
            </div>
        </div>
    </div>

    {{--Footer--}}
    @include('components/footer');

    </div>
@endsection
