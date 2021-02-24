@extends('template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')

        School Second Page
        <hr>
        <div class="container">
            <div>
                <br>
                <lavel>১.৭.১ জমির অবস্থান:</lavel>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">দখল স্বত্বে</th>
                        <th scope="col"> </th>
                        <th scope="col">দখল স্বত্বে নয় </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">মৌজার নাম: </th>
                        <td><input type="text" name=""></td>
                        <th scope="row">মৌজার নাম: </th>
                        <td><input type="text" name=""></td>

                    </tr>
                    <tr>
                        <th scope="row">খতিয়ান নং:</th>
                        <td><input type="text" name=""></td>
                        <th scope="row">খতিয়ান নং:</th>
                        <td><input type="text" name=""></td>
                    </tr>
                    <tr>
                        <th scope="row">দাগ নং:</th>
                        <td><input type="text" name=""></td>
                        <th scope="row">দাগ নং:</th>
                        <td><input type="text" name=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td scope="row">অখন্ড………….শতাংশ</td>
                        <td></td>
                        <td scope="row">অখন্ড………….শতাংশ</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="row" style="align-content: end">
                <label for="totalLand"> ১.৭ প্রতিষ্ঠানটির মোট জমির পরিমাণ:</label>
                <div>
                    <label for="">(১) দখল স্বত্বে (শতাংশ):</label> <input type="number" name="">
                    <label for="">(২) দখল স্বত্বে নয় (শতাংশ):</label><input type="number" name="">
                    <label for=""> মোট (শতাংশ):</label><input type="number" name="">
                </div>
                <div>

                </div>

            </div>
            <div>
                <lavel>১.৭.২ জমির ব্যবহার ও পরিমাণ (শতাংশে):</lavel>
                <input type="number" name="">
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

        @include('components/footer')

    </div>
@endsection
