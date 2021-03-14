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
                            <label>৩.২.১। প্রতিষ্ঠানটিতে সন্ত্রাস বিরোধী কার্যক্রম পরিচালিত হয় কি?  </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে জঙ্গীবাদ বিরোধী কার্যক্রম পরিচালিত হয় কি?  </label>
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
                            <label>৩.২.১। প্রতিষ্ঠানটিতে নিরাপদ সড়ক বিষয়ে সতেচনতা মূলক কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.২.১। প্রতিষ্ঠানটিতে জাতীয় শুদ্ধাচার কৌশল বিষয়ে কোন কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput">
                                <option>হ্যাঁ</option>
                                <option>না</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        {{--Footer--}}
        @include('components/footer');

    </div>
@endsection
