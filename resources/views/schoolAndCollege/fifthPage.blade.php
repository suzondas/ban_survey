@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')
        <hr>
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h3 class="text-center"> সেকশন ৩: বিবিধ তথ্য</h3>
                </div>
            </div>
             <div class="body">
                <div class="row">
                    <div class="col-md-2">
                        <label class="label-text" for="meeting_no"> ৩.১ ২০২০ সালে ম্যানেজিং কমিটির কতটি সভা হয়েছে? </label>
                        <input type="text" class="form-control" name="meeting_no"
                               id="meeting_no" style="width: 100px">
                    </div>
                    <div class="col-md-4">
                        <label class="label-number" for="meeting_discuss">৩.১.১ ম্যানেজিং কমিটির সভায় শিক্ষার মানোন্নয়ন সম্পর্কিত বিষয়ে কী কী আলোচনা হয়েছে?</label>
                        <select class="custom-select" name="meeting_discuss" style="width: 120px">
                            <option value="" selected>Select</option>
                            <option value="1">শিক্ষক প্রশিক্ষণ</option>
                            <option value="2">শিক্ষক ও শিক্ষার্থীর উপস্থিতি</option>
                            <option value="3">নিগ্রহ/পীড়ন (বুলিং)</option>
                            <option value="4">বাল্যবিবাহ</option>
                            <option value="5">পিছিয়ে পড়া শিক্ষার্থী</option>
                            <option value="6">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী</option>
                            <option value="7">শিক্ষার্থীদের যাতায়াতে নিরাপত্তা</option>
                            <option value="8">মাদক বিরোধী</option>
                            <option value="9">ঝড়ে পড়া রোধ</option>
                            <option value="10">নিরাপদ সড়ক</option>
                            <option value="11">অন্যান্য</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="label-text" for="pti_meeting"> ৩৩.২ ২০২০ সালে পিটিএ এর কতগুলো সভা হয়েছে? </label>
                        <input type="text" class="form-control" name="pti_meeting"
                               id="pti_meeting" style="width: 100px">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="pti_discuss">৩.২.১ পিটিএ সভায় কী কী বিষয় আলোচনা ও সিদ্ধান্ত গৃহীত হয়েছ?</label>
                        <select class="custom-select" name="pti_discuss" style="width: 120px">
                            <option value="" selected>Select</option>
                            <option value="1">শিক্ষার্থীর উপস্থিতি</option>
                            <option value="2">সচেতনতামূলক কার্যক্রম</option>
                            <option value="3">নিগ্রহ/পীড়ন (বুলিং)</option>
                            <option value="4">ইভটিজিং</option>
                            <option value="5">বাল্যবিবাহ</option>
                            <option value="6">শিক্ষার্থীদের যাতায়াতে নিরাপত্তা</option>
                            <option value="7">মাদক বিরোধী</option>
                            <option value="8">জঙ্গীবাদ দমন</option>
                            <option value="9">এসিড নিক্ষেপ</option>
                            <option value="10">অন্যান্য</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                       <label class="label-number" for="safe_water">৩.৩ শিক্ষক ও শিক্ষার্থীদের জন্য নিরাপদ খাবার পানির ব্যবস্থা আছে কি?</label>
                        <select class="custom-select" name="safe_water" style="width: 100px">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="water_source">৩.৩.১ উত্তর হ্যাঁ হলে, খাবর পানির উৎস কি? <br>(একাধিক হতে পারে)</label>
                        <select class="custom-select" name="water_source" style="width: 120px">
                            <option value="" selected>Select</option>
                            <option value="1">কূপ</option>
                            <option value="2">নলকূপ</option>
                            <option value="3">গভীর নলকূপ</option>
                            <option value="4">সাপ্লাই পানি/ট্যাপ</option>
                            <option value="5">ঝর্ণা</option>
                            <option value="6">বোতলজাত পানি/ পানির জার</option>
                            <option value="7">বৃষ্টির পানি</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="label-text" for="pti_meeting"> ৩৩.২ ২০২০ সালে পিটিএ এর কতগুলো সভা হয়েছে? </label>
                        <input type="text" class="form-control" name="pti_meeting"
                               id="pti_meeting" style="width: 100px">
                    </div>
                    <div class="col-md-3">
                        <label class="label-number" for="pti_discuss">৩.২.১ পিটিএ সভায় কী কী বিষয় আলোচনা ও সিদ্ধান্ত গৃহীত হয়েছ?</label>
                        <select class="custom-select" name="pti_discuss" style="width: 120px">
                            <option value="" selected>Select</option>
                            <option value="1">শিক্ষার্থীর উপস্থিতি</option>
                            <option value="2">সচেতনতামূলক কার্যক্রম</option>
                            <option value="3">নিগ্রহ/পীড়ন (বুলিং)</option>
                            <option value="4">ইভটিজিং</option>
                            <option value="5">বাল্যবিবাহ</option>
                            <option value="6">শিক্ষার্থীদের যাতায়াতে নিরাপত্তা</option>
                            <option value="7">মাদক বিরোধী</option>
                            <option value="8">জঙ্গীবাদ দমন</option>
                            <option value="9">এসিড নিক্ষেপ</option>
                            <option value="10">অন্যান্য</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        @include('components/footer')

    </div>
@endsection
