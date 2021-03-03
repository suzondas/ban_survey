@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৭.২৭ উত্তর হ্যাঁ হলে মামলার সংখ্যা ?
            </div>
            <div class="col col-2">
                <input type="number" class="form-control" name="" id="">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৭.২৮ উত্তর হ্যাঁ হলে মামলার বিষয় ?
            </div>
            <div class="col col-5">
                <input type="test" class="form-control" name="" id="">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৭.২৯ প্রতিষ্ঠান্টিতে উল্লেখিত রেজিস্টার বই আছে কি ?
            </div>
            <div class="col col-5">
                <label class="label-number" for="">SMC সদস্যদের উপস্থিতি রেজিস্ট্রার বহি </label>
                <select class="custom-select " name="english_version" style="width: 104px;">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
                <label class="label-number" for="">PTA সদস্যদের উপস্থিতি রেজিস্ট্রার বহি </label>
                <select class="custom-select " name="english_version" style="width: 104px">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮ আইসিটি বিষয়ে পাঠদান করা হয় কি?
            </div>
            <div class="col col-2">
                <select class="custom-select " name="english_version">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>

        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.১ আইসিটি বিষয়ে শিক্ষক আছে কি?
            </div>
            <div class="col col-2">
                <select class="custom-select " name="english_version">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.১.১ উত্তর হ্যাঁ হলে, আইসিটি বিষয়ে পাঠদানকারী শিক্ষকের শিক্ষাগত যোগ্যতা কী(সর্বোচ্চ)?
            </div>
            <div class="col col-3">
                <select class="custom-select " name="english_version">
                    <option value="1">১. স্নাতক(পাস)</option>
                    <option value="2">২. বিএসসি ইঞ্জি. (কম্পিউটার)</option>
                    <option value="3">৩. ডিপ্লোমা ইঞ্জি. (কম্পিউটার)</option>
                    <option value="4">৪. স্নাতকোত্তর</option>
                    <option value="5">৫. অন্যান্য</option>
                    <option value="6">৬. স্নাতক সম্মান</option>
                </select>
            </div>

        </div>

        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.২ আইসিটি বিষয়ে ডিগ্রিধারী নয় এমন শিক্ষকের শিক্ষাগত যোগ্যতা কী(সর্বোচ্চ)?
            </div>
            <div class="col col-3">
                <select class="custom-select " name="english_version">
                    <option value="1">১. স্নাতক(পাস)</option>
                    <option value="2">২. স্নাতকোত্তর</option>
                    <option value="3">৩. অন্যান্য</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.৩ কী ধরনের প্রশিক্ষণ নিয়েছেন? (আইসিটি বিষয়ে ডিগ্রিধারী নয় এমন শিক্ষক)
            </div>
            <div class="col col-3">
                <select class="custom-select " name="english_version">
                    <option value="1">১. সার্টিফিকেট কোর্স</option>
                    <option value="2">২. ডিপ্লোমা কোর্স</option>
                    <option value="3">৩. অন্যান্য</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.৪ প্রতিষ্ঠানের শিক্ষকগণ শিক্ষক বাতায়নের সদস্য কি?
            </div>
            <div class="col col-2">
                <select class="custom-select " name="english_version">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.৫ উত্তর হ্যাঁ হলে কতজন?
            </div>
            <div class="col col-2">
                <label class="label-number" for="">মোটঃ</label>
                <input type="number" class="form-control" name="" id="">
                <label class="label-number" for="">মহিলাঃ</label>
                <input type="number" class="form-control" name="" id="">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.৬ প্রতিদিন কতঘন্টা কম্পিউটার(আইসিটি) ল্যাব ব্যাবহার করা হয়?
            </div>
            <div class="col col-2">
                <input type="number" class="form-control" name="" id="">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.৭ প্রতিষ্ঠানে ডিজিটাল হাজিরা সংক্রান্ত তথ্য
            </div>
        </div>
        <div class="row border border-info py-1 mt-2 col-7">
            <div class="col">
                <label class="label-number" for="">শিক্ষার্থীর জন্য</label>
                <input type="checkbox" class="form-control" name="" id="" value="1" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">শিক্ষক ও কর্মচারীর জন্য</label>
                <input type="checkbox" class="form-control" name="" id="" value="2" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">নাই</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.৮ Language club আছে কি?
            </div>
            <div class="col col-2">
                <select class="custom-select " name="english_version">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৮.৮.১ উত্তর হ্যাঁ হলে, কোন কোন ভাষা চর্চা হয়?
            </div>
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <label class="label-number" for="">বাংলা</label>
                <input type="checkbox" class="form-control" name="" id="" value="1" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">ইংরেজি</label>
                <input type="checkbox" class="form-control" name="" id="" value="2" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">আরবি</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">চাইনিজ</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">কোরিয়ান</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">জাপানি</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">রুশ</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">স্প্যানিশ</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
            <div class="col">
                <label class="label-number" for="">অন্যান্য</label>
                <input type="checkbox" class="form-control" name="" id="" value="3" style="width: 20px">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯ প্রতিষ্ঠানে কম্পিউটার ল্যাব আছে কি ?
            </div>
            <div class="col col-2">
                <select class="custom-select " name="english_version">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.১ উত্তর হ্যাঁ হলে কম্পিউটার ল্যাবের সংখ্যা ?
            </div>
            <div class="col col-2">
                <input type="number" class="form-control" name="" id="">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.২ ল্যাবে মোট কম্পিউটার সংখ্যা ?
            </div>
            <div class="col col-2">
                <input type="number" class="form-control" name="" id="">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.৩ ল্যাবে কম্পিউটারের সংখ্যা ?
            </div>
        </div>
        <div class="row border border-info py-1 mt-2 col-5">
            <div class="col">
                <label class="label-number" for="">সচল</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
            <div class="col">
                <label class="label-number" for="">মেরামতযোগ্য</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
            <div class="col">
                <label class="label-number" for="">অচল</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
            <div class="col">
                <label class="label-number" for="">মোট</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.৪ ল্যাব প্রতিষ্ঠার তারিখ?
            </div>
            <div class="col col-2">
                <input type="number" class="form-control" name="" id="">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.৫ কম্পিউটার ল্যাব প্রদানকারী সংস্থা অনুযায়ী সংখ্যা ?
            </div>
        </div>
        <div class="row border border-info py-1 mt-2 col-9">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col">শিক্ষা মন্ত্রণালয়</th>
                        <th scope="col">*মাউশি</th>
                        <th scope="col">প্রকল্প</th>
                        <th scope="col">শিক্ষাবোর্ড</th>
                        <th scope="col">বিসিসি</th>
                        <th scope="col">এনজিও</th>
                        <th scope="col">ক্রয়কৃত</th>
                        <th scope="col">স্থানীয় সরকার</th>
                        <th scope="col">অন্যান্য</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row"><input type="text" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.৬ ল্যাব ব্যাতিত অন্য কম্পিউটার আছে কি ?
            </div>
            <div class="col col-2">
                <select class="custom-select " name="english_version">
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.৭ উত্তর হ্যাঁ হলে, অন্যান্য কম্পিউটারের সংখ্যা ?
            </div>
        </div>
        <div class="row border border-info py-1 mt-2 col-5">
            <div class="col">
                <label class="label-number" for="">সচল</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
            <div class="col">
                <label class="label-number" for="">মেরামতযোগ্য</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
            <div class="col">
                <label class="label-number" for="">অচল</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
            <div class="col">
                <label class="label-number" for="">মোট</label>
                <input type="number" class="form-control" name="" id="" >
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.৮ কম্পিউটার ল্যাব প্রদানকারী সংস্থা অনুযায়ী সংখ্যা ?
            </div>
        </div>
        <div class="row border border-info py-1 mt-2 col-10">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col">সংস্থার নামঃ</th>
                        <th scope="col">শিক্ষা মন্ত্রণালয়</th>
                        <th scope="col">*মাউশি</th>
                        <th scope="col">প্রকল্প</th>
                        <th scope="col">শিক্ষাবোর্ড</th>
                        <th scope="col">বিসিসি</th>
                        <th scope="col">এনজিও</th>
                        <th scope="col">ক্রয়কৃত</th>
                        <th scope="col">স্থানীয় সরকার</th>
                        <th scope="col">অন্যান্য</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">সংখ্যাঃ</td>
                        <td scope="row"><input type="text" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ৩.৯.১০ ধরন অনুযায়ী প্রতিষ্ঠানের সচল কম্পিউটারের (ল্যাব+ অন্যান্য কম্পিউটার) সংখ্যা ?
            </div>
        </div>
        <div class="row border border-info py-1 mt-2 col-5">
            <div class="col">
                <label class="label-number" for="">ডেস্কটপ</label>
                <input type="number" class="form-control" name="" id=""  style="width: 70px">
            </div>
            <div class="col">
                <label class="label-number" for="">ল্যাপটপ</label>
                <input type="number" class="form-control" name="" id=""  style="width: 70px">
            </div>
            <div class="col">
                <label class="label-number" for="">মোট</label>
                <input type="number" class="form-control" name="" id=""  style="width: 70px">
            </div>
        </div>
        @include('components/footer')
    </div>
@endsection
