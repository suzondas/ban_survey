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

                <div class="row mt-2">
                    <lavel>১.৭.৩ প্রতিষ্ঠানের সবচেয়ে পুরাতন ভবনটি নির্মাণের বছর</lavel> &nbsp &nbsp
                    <input type="number" name="" class="">
                </div>
                <div class="row mt-2">
                    <lavel>১.৭.৪ প্রতিষ্ঠানের সর্বশেষ নতুন ভবনটি নির্মাণের বছর</lavel> &nbsp &nbsp
                    <input type="number" name="">
                </div>
                <div class="row mt-2">
                    <lavel>১.৭.৫ সর্বশেষ ভবনটি নির্মাণে অর্থের উৎস</lavel>

                </div>
                <div class="row mt-2">
                    <lavel>১.৭.৬ সর্বশেষ নির্মিত ভবনের আয়তন:-----------বর্গফুট</lavel>

                </div>
                <div class="row mt-2">
                    <lavel>১.৭.৭ সকল ভবনের মোট আয়তন:----------------বর্গফুট</lavel>
                </div>
                <div class="row mt-2">
                    <lavel>১.৭.৮ প্রতিষ্ঠানটির অবস্থান:</lavel>

                </div>


            </div>


        </div>

        @include('components/footer')

    </div>
@endsection
