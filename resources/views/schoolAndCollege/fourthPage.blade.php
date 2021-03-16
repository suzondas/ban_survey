@extends('schoolAndCollege/template')
@section('content')
    {{--Banner--}}
    @include('../components/banner')
    {{--Navbar--}}
    @include('schoolAndCollege.navBar')
    <hr>
    <div class="container">
        <h3 class="text-center">বিবিধ তথ্য (২)</h3>
        {{--Curriculam--}}
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
                            <label>৩.৫ প্রতিষ্ঠানে পাঠ পরিকল্পনা করা হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৫.১ সৃজনশীল প্রশ্ন নিজেরা তৈরি করেন কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.২ একজন শিক্ষককে সপ্তাহে গড়ে কতটি ক্লাস নিতে হয় ? </label>
                            <input type="text"/>
                        </td>
                        <td>
                            <label>৩.৫.৩ অতিরক্তি ক্লাস নেয়া হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.৪ উত্তর হ্যাঁ হলে, কখন নেয়া হয়?</label>
                            <select class="contentBoxInput">
                                <option>স্কুল সময়ে</option>
                                <option>স্কুল সময়ের বাইরে</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৫.৫ প্রতি পিরিয়ডে পাঠদানের জন্য নির্ধারিত সময় কত?</label>
                            <input type="text"/> মিনিট
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <label>৩.৫.৬ সপ্তাহে কত ঘন্টা বিজ্ঞানাগার ব্যবহার করা হয়?</label>
                            <input type="text"/> ঘন্টা
                        </td>
                        <td>
                            <label>৩.৫.৭ বিজ্ঞানাগারে ব্যবহৃত প্রধান ৪টি এ্যাপারেটাস ও কেমিক্যালস এর নাম:</label>
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
                            <label>৩.৫.১০ শিক্ষার গুণগত মান বৃদ্ধির জন্য কী কী পদক্ষেপ নিয়েছেন?(In
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
                            <label>৩.৫.১১ পাঠ্যক্রম সম্পর্কে আপনার মতামত?</label>
                            <select class="contentBoxInput">
                                <option>১-যথাযথ</option>
                                <option>২-অতিরিক্ত</option>
                                <option>৩-অপর্যাপ্ত</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.১২ শিক্ষক ডায়েরি ব্যবহার করা হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.৫.১৩ নিয়মিত শিক্ষার্থী সমাবেশ হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.১৪ ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থীদের জন্য দ্বিভাষিক শিক্ষা ও শিখন কার্যক্রম চালু
                                আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.৫.১৫ ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থীদের নিজস্ব ভাষায় পাঠদান করা হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                            <label>৩.৫.১৬ উত্তর হ্যাঁ হলে, কোন ভাষায় পাঠদান করা হয়?</label>
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
                            <label>৩.৫.১৮ পূর্ববর্তী বছর (২০১৯) সালে কত কার্য দিবস পাঠদান কর হয়েছে </label>
                            <input type="text" class="w-25"/>
                        </td>
                        <td>
                            <label>৩.৬ প্রতিষ্ঠানটিতে মাদক বিরোধী কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.১ প্রতিষ্ঠানটিতে সন্ত্রাস বিরোধী কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.২ প্রতিষ্ঠানটিতে জঙ্গীবাদ বিরোধী কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৩ প্রতিষ্ঠানটিতে কমিউনিটি ইন্টারেকশন আছে কি না?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.৪ প্রতিষ্ঠানটিতে বাল্যবিবাহ প্রতিরোধ কার্যক্রম আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৫ প্রতিষ্ঠানটিতে নিরাপদ সড়ক বিষয়ে সচেতনতামূলক কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.৬ প্রতিষ্ঠানটিতে জাতীয় শুদ্ধাচার কৌশল বিষয়ে কোন কার্যক্রম পরিচালিত হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৭ প্রতিষ্ঠানটিতে ইনোভেশন বিষয়ে কোন কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.৮ শ্রেণিকক্ষে নৈতিকতার ওপর আলোচনা হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৯ প্রতিষ্ঠানটিতে কৃতি শিক্ষার্থীদের যোগাযোগের ঠিকানা সম্বলিত তালিকা আছে
                                কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.১০ প্রতিষ্ঠানটিতে নিয়মিত শরীরচর্চা করানো হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.১১ বার্ষিক শিক্ষা সফর হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.১২ বার্ষিক বৃক্ষ রোপণ/গার্ডেনিং কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৭.৯ সহপাঠ কার্যক্রম পরিচালিত হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৭.৯.১ উত্তর হ্যাঁ হলে, নির্দিষ্ট ঘরে টিক চিহ্ণ দিন।</label><br>
                            <input type="checkbox"> বার্ষিক ক্রীড়া &nbsp;
                            <input type="checkbox"> বিতর্ক &nbsp;
                            <input type="checkbox"> ভলিবল &nbsp;
                            <input type="checkbox"> সংগীত &nbsp;
                            <input type="checkbox"> বৃক্ষরোপণ &nbsp;
                            <input type="checkbox"> সাংস্কৃতিক অনুষ্ঠান &nbsp;
                            <input type="checkbox"> ক্রিকেট &nbsp;
                            <input type="checkbox"> ক্যারাম &nbsp;
                            <input type="checkbox"> নাটক &nbsp;
                            <input type="checkbox"> বিজ্ঞান মেলা &nbsp;
                            <input type="checkbox"> কাবাডি &nbsp;
                            <input type="checkbox"> ফুটবল &nbsp;
                            <input type="checkbox"> হ্যান্ডবল &nbsp;
                            <input type="checkbox"> আবৃত্তি &nbsp;
                            <input type="checkbox"> মিলাদ &nbsp;
                            <input type="checkbox"> অন্যান্য ইনডোর গেমস &nbsp;
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Audit infos--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.২</span>
                </div>
                <div class="form-control bg-number-label">অডিট সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td><label> ৩.৭ প্রতিষ্ঠানটিতে অভ্যন্তরীণ বার্ষিক অডিট হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১ ডিআইএ কর্তৃক অডিট সম্পন্ন হয়েছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২ উত্তর হ্যাঁ হলে, সর্বশেষ কোন সালে ডিআইএ কর্তৃক অডিট সম্পন্ন হয়েছে </label>
                            <input type="number" class="w-25"/>
                        </td>
                    </tr>
                    <tr>

                        <td><label> ৩.৭.৩ উত্তর হ্যাঁ হলে অডিট আপত্তি হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.৪ উত্তর হ্যাঁ হলে, আপত্তির সংখ্যা </label>
                            <input type="number" class="w-25"/>
                        </td>
                        <td><label>৩.৭.৫ অর্থের পরিমাণ</label>
                            <input type="number" class="w-25"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.৬ আপত্তির বিষয়</label>
                            <input type="number" class="w-25"/>
                        </td>
                        <td><label> ৩.৭.৮ বার্ষিক উন্নয়ন পরিকল্পনা প্রণয়ন করা হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.৭ প্রতিষ্ঠানটিতে রাজস্ব অডিট হয় কি (সরকারি প্রতিষ্ঠানের ক্ষেত্রে
                                প্রযোজ্য)</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.১৪ জাতীয় দিবসগুলো যথাযথভাবে পালন করা হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৫ প্রতিষ্ঠানে সংবাদপত্র রাখা হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৬ উত্তর হ্যাঁ হলে, কয়টি দৈনিক সংবাদপত্র রাখা হয় </label>
                            <input type="numnber" class="w-25"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.১৮ প্রতিষ্ঠানটি পাবলিক পরীক্ষা কেন্দ্র হিসেবে ব্যবহৃত হয় কি না?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৯ শিক্ষার্থীদের ইউনিফরম আছে কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৭ পাবলিক পরীক্ষা দিবস কমানোর ক্ষেত্রে আপনার পরামর্শ কী? </label>
                            <input type="numnber" class="w-25"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.২০ শিক্ষার্থীদের পরিচয়পত্র আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২১ একাধারে ১০ (দশ) দিনের বেশি অনুপস্থিত শিক্ষার্থী আছে কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২২ একাডেমিক ক্যালেন্ডার আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.২৩ অভিভাবক দিবস পালিত হয় কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২৪ বিভিন্ন অনুষ্ঠান/দিবসের বর্ষপঞ্জি আছে কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২৫ শিক্ষক ও কর্মচারীদের নিদির্ষ্ট কোন পোশাক আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.২৬ প্রতিষ্ঠানটির বিরুদ্ধে কোন মামলা আছে কি?</label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২৭ উত্তর হ্যাঁ হলে, মামলার সংখ্যা </label>
                            <input type="text" class="w-25"/>
                        </td>
                        <td><label> ৩.৭.২৮ উত্তর হ্যাঁ হলে, মামলার বিষয়</label>
                            <input type="text" class="w-100"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.২৯ প্রতিষ্ঠানটিতে নিম্নের রেজিস্ট্রার বহি আছে কি?</label><br>
                            <input type="checkbox"/> SMC সদস্যদের উপস্থিতি রেজিস্ট্রারবহি<br>
                            <input type="checkbox"/> PTA সদস্যদের উপস্থিতি রেজিস্ট্রারবহি
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Library Area deleted by suzon and moved on bibid 1--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩</span>
                </div>
                <div class="form-control bg-number-label">কমিউনিটি সার্ভিস  সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <label>৩.৭.১০ প্রতিষ্ঠানের সহায়তামূলক ও কমিউনিটি সার্ভিস গ্রহণকারী শিক্ষার্থী সংখ্যা:</label>
                    <tr>
                        <td>সার্ভিসের ধরন</td>
                        <td>স্কাউট</td>
                        <td>গার্লস ইন গাইড</td>
                        <td>রোভার স্কাউট</td>
                        <td>কাব</td>
                        <td>বিএনসিসি</td>
                        <td>রেড ক্রিসেন্ট</td>
                        <td>স্টুডেন্টস কেবিনেট</td>
                        <td>স্বাস্থ্য সেবা</td>
                        <td>কাউন্সেলিং সেবা</td>
                        <td>পরিবহন সুবিধা</td>
                        <td>ক্যান্টিন</td>
                    </tr>
                    <tr>
                        <td>সদস্য/ছাত্র-ছাত্রীর সংখ্যা</td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                        <td class="text-center"><input type="checkbox" /> </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>৩.৭.১১ প্রতিষ্ঠানের সহায়তামূলক ও কমিউনিটি সার্ভিস পরিচালনার জন্য কোন পৃথক ব্যাংক হিসাব আছে কি?
                            <select class="contentBoxInput">
                                <option>১. হ্যাঁ</option>
                                <option>২. না</option>
                            </select>
                        </td>
                        <td>৩.৭.১২ প্রতিষ্ঠানের স্কাউট/গার্লস গাইড পরিচালনার জন্য কোন পৃথক ব্যাংক হিসাব আছে কি?
                            <select class="contentBoxInput">
                                <option>১. হ্যাঁ</option>
                                <option>২. না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>৩.৭.১৩ প্রতিষ্ঠানের স্কাউটের ট্রুপমিটিং করা হয় কি?
                            <select class="contentBoxInput">
                                <option>১. হ্যাঁ</option>
                                <option>২. না</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{--Footer--}}
    @include('components/footer');

    </div>
@endsection
