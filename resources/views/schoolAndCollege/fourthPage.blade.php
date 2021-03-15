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
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.২</span>
                </div>
                <div class="form-control bg-number-label">লাইব্রেরি সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <label> ১.৮ লাইব্রেরির জন্য পৃথক ভবন আছে কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label> ১.৮.১ লাইব্রেরির জন্য কক্ষ আছে কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td style="width: 370px">
                            <label> ১.৮.২ লাইব্রেরিতে বইয়ের সংখ্যা</label><br>
                            পাঠ্যপুস্তক: <input type="number" class="w-25">টি &nbsp; &nbsp;
                            সহায়ক: <input type="number" class="w-25">টি
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> ১.৮.৩ শিক্ষার্থীদের লাইব্রেরি থেকে বই ইস্যু করা হয় কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label> ১.৮.৪ উত্তর হ্যাঁ হলে, নিয়মিত বই ইস্যু করা হয় কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label> ১.৮.৫ উত্তর হ্যাঁ হলে, মাসে ইস্যুকৃত বইয়ের সংখ্যা: </label>
                             <input type="number" class="w-25">টি
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>১.৮.৬ লাইব্রেরির পুস্তকাদির ক্যাটালগিং কম্পিউটারাইজড কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>১.৮.৭ লাইব্রেরি পরিচালনার জন্য সহকারী লাইব্রেরিয়ান আছে কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label> ১.৮.৮ লাইব্রেরি বিষয়ে সহকারী লাইব্রেরিয়ানের প্রশিক্ষণ আছে কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> ১.৮.৯ লাইব্রেরি আওতায় ক্লাস রুটিনে অন্তর্ভুক্ত আছে কি?</label>
                            <select name="">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
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
