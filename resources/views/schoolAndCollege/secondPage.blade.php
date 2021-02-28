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
                        <input type="number" name="" style="width:70px" >
                    </div>
                    <div class="col-">
                        <label for="">(২) দখল স্বত্বে নয় (শতাংশ):</label>
                    </div>
                   <div class="col-md">
                       <input type="number" name="" style="width:70px" >
                   </div>
                    <div class="col-sm">
                        <label for=""> মোট (শতাংশ):</label>
                    </div>

                   <div class="col-md">
                       <input type="number" name="" style="width:70px" >
                   </div>

                <div>
                </div>
            </div>

            <div class="row mt-2">
                <lavel class="label-text">১.৭.২ জমির ব্যবহার ও পরিমাণ (শতাংশে):</lavel>
            </div>
<div class="row mt-2">
        <div class="col-sm">বিবরণ</div>
        <div class="col-sm">প্রতিষ্ঠানের ভবন</div>
        <div class="col-sm">খেলার মাঠ</div>
        <div class="col-sm">ছাত্রাবাস</div>
        <div class="col-sm"></div>
        <div class="col-sm">শিক্ষক আবাসন</div>
        <div class="col-sm">আবাদি জমি</div>
        <div class="col-sm">পুকুর</div>
        <div class="col-sm">বাগান</div>
        <div class="col-sm">শহিদ মিনার</div>
        <div class="col-sm">অব্যবহৃত</div>
        <div class="col-sm">অন্যান্য</div>
        <div class="col-sm">মোট</div>
</div>
                <div class="row">
                    <div class="col-">শতাংশ</div>
                    <div class="col-"><input type="text" style=" width:70px" name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                    <div class="col-"><input type="text" style=" width:70px" name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                    <div class="col-"><input type="text" style=" width:70px" name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                    <div class="col-"><input type="text" style=" width:70px" name=""></div>
                    <div class="col-"><input type="text" style=" width:70px"  name=""></div>
                </div>
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">বিবরণ</th>
                        <th scope="col">প্রতিষ্ঠানের ভবন</th>
                        <th scope="col">খেলার মাঠ</th>
                        <th scope="col">ছাত্রাবাস</th>
                        <th scope="col">শিক্ষক আবাসন</th>
                        <th scope="col">আবাদি জমি</th>
                        <th scope="col">পুকুর</th>
                        <th scope="col">বাগান</th>
                        <th scope="col">শহিদ মিনার</th>
                        <th scope="col">অব্যবহৃত</th>
                        <th scope="col">অন্যান্য</th>
                        <th scope="col">মোট</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">শতাংশ</th>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                        <td><input type="text" name=""></td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div>
                <lavel>১.৭.৩ প্রতিষ্ঠানের সবচেয়ে পুরাতন ভবনটি নির্মাণের বছর</lavel>
                <input type="number" name="">
            </div>
            <div>
                <lavel>১.৭.৪ প্রতিষ্ঠানের সর্বশেষ নতুন ভবনটি নির্মাণের বছর</lavel>
                <input type="number" name="">
            </div>
            <div>
                <lavel>১.৭.৫ সর্বশেষ ভবনটি নির্মাণে অর্থের উৎস</lavel>

            </div>
            <div>
                <lavel>১.৭.৬ সর্বশেষ নির্মিত ভবনের আয়তন:-----------বর্গফুট</lavel>

            </div>
            <div>
                <lavel>১.৭.৭ সকল ভবনের মোট আয়তন:----------------বর্গফুট</lavel>
            </div>
            <div>
                <lavel>১.৭.৮ প্রতিষ্ঠানটির অবস্থান:</lavel>

            </div>


            </div>


        </div>

        @include('components/footer')

    </div>
@endsection
