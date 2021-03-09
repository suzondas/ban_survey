@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')

        <div class="container">

            <div class="header mt-2">
                <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
            </div>
            <div class="body">
        <div class="row border border-info py-1">
            <div class="col">
              ২.৩.২ শ্রেণি, বিষয়ভিত্তিক শিক্ষার্থী, উত্তীর্ণ ও অনুত্তীর্ণ সম্পর্কিত তথ্য ২০২১
                <table class="table table-bordered  " style="text-align:center">
                    <tr>
                        <td scope="col" rowspan="2" >শ্রেণি</td>
                        <td scope="col" rowspan="2" style="width:120px">বিভাগ</td>
                        <td scope="col" colspan="2">মোট শিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">পরিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">উত্তীর্ণ</td>
                        <td scope="col" colspan="2">অনুত্তীর্ণ</td>
                    </tr>
                    <tr>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td scope="row" rowspan="4">একাদশ (১১)</td>
                        <td scope="row">(১) মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(২) বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৩) ব্যবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৫) অন্যান্য</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    <tr>
                        <td scope="row" rowspan="4">দ্বাদশ (১২)</td>
                        <td scope="row">(১) মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    <tr>
                        <td scope="row">(২) বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৩) ব্যবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৫) অন্যান্য</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="5">স্নাতক (পাস) ১ম বর্ষ(১৩)</td>
                        <td scope="row">(১) মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(২) বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৩) ব্যবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৪) সামাজিক বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৫) অন্যান্য</td>
                       <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    <tr>
                        <td scope="row" rowspan="5">স্নাতক (পাস) ২য় বর্ষ(১৪)</td>
                        <td scope="row">(১) মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(২) বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৩) ব্যবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৪) সামাজিক বিজ্ঞান</td>
                       <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৫) অন্যান্য</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="5">স্নাতক (পাস) ৩য় বর্ষ(১৫)</td>
                        <td scope="row">(১) মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(২) বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৩) ব্যবসায় শিক্ষা</td>
                       <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৪) সামাজিক বিজ্ঞান</td>
                       <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">(৫) অন্যান্য</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                     <tr>
                        <td scope="row" rowspan="4">স্নাতক (সম্মান)(১৬)</td>
                        <td scope="row">১ম বর্ষ (নতুন, পুরাতন সহ)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">২য় বর্ষ (নতুন, পুরাতন সহ)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">৩য় বর্ষ (নতুন, পুরাতন সহ)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">৪র্থ বর্ষ (নতুন, পুরাতন সহ)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="2">স্নাতকোত্তর (১৭) </td>
                        <td scope="row">প্রিলিমিনারি</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">শেষ বর্ষ</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="2">সর্বমোট:</td>
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
        <br>
        <div class="row border border-info py-1">
            <div class="col">
                    ২.৩.৩ বিষয়ভিত্তিক শিক্ষক ও শিক্ষার্থীর সংখ্যা (শিক্ষকগণের তথ্য নিয়োগ অনুযায়ী সন্নিবেশিত করুন):
                <table class="table table-bordered text-center">
                    <tr>
                        <td scope="col" rowspan="3">বিষয়</td>
                        <td scope="col" colspan="2"   rowspan="2">শিক্ষক (বিষয় ভিত্তিক)</td>
                        <td scope="col" colspan="10">শিক্ষার্থী সংখ্যা</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">এইচএসসি</td>
                        <td scope="col" colspan="2">স্নাতক পাস</td>
                        <td scope="col" colspan="2">অনার্স</td>
                        <td scope="col" colspan="2">মাস্টার্স প্রিলিমিনারি</td>
                        <td scope="col" colspan="2">মাস্টার্স ফাইনাল</td>
                    </tr>
                    <tr>
                        <td scope="col">মোট</td>
                        <td scope="col">মহিলা</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td scope="row" style="width:150px">বাংলা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
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
            <br>
            <div class="row">
            <div class="col">
                    ২.৩.৪ বিভাগভিত্তিক বিভিন্ন বোর্ড এবং বিশ্ববিদ্যালয় পরীক্ষার ফলাফল
                <table class="table table-bordered text-center">
                    <tr>
                        <td scope="col" rowspan="3">পরীক্ষার নাম ও বছর</td>
                        <td scope="col" rowspan="3">বিভাগ</td>
                        <td scope="col" rowspan="2" colspan="2">রেজি: শিক্ষার্থী সংখ্যা</td>
                        <td scope="col" rowspan="2" colspan="2">পরিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="12">প্রাপ্ত জিপিএ অনুযায়ী পাসের সংখ্যা</td>
                        <td scope="col" rowspan="2" colspan="2">মোট পাস</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="6">ছাত্র</td>
                        <td scope="col" colspan="6">ছাত্রী</td>
                    </tr>
                    <tr>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                        <td scope="col">৫.০০</td>
                        <td scope="col">৪-৪.৯৯</td>
                        <td scope="col">৩.৫-৩.৯৯</td>
                        <td scope="col">৩-৩.৫</td>
                        <td scope="col">২-২.৯৯</td>
                        <td scope="col">২ এর কম</td>
                        <td scope="col">৫.০০</td>
                        <td scope="col">৪-৪.৯৯</td>
                        <td scope="col">৩.৫-৩.৯৯</td>
                        <td scope="col">৩-৩.৫</td>
                        <td scope="col">২-২.৯৯</td>
                        <td scope="col">২ এর কম</td>
                        <td scope="col">মোট</td>
                        <td scope="col">ছাত্রী</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td rowspan="3">এইচএসসি (২০১৯)</td>
                        <td scope="row">মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                    </tr>
                    <tr>
                        <td scope="row">বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">ব্যাবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="4">স্নাতক (পাস) (সর্বশেষ বছর) চূড়ান্ত (২০১৯)</td>
                        <td scope="row">বিএ</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                    </tr>
                    <tr>
                        <td scope="row">বিএসএস</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">বিএসসি</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td scope="row">বিবিএস</td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="1">স্নাতক (সম্মান)</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                    </tr>
                    <tr>
                        <td rowspan="1">স্নাতকোত্তর</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td><td scope="row"><input type="number" class="form-control" name="" id="" style="width:35px"></td>
                    </tr>
                    </tbody>
                </table>
                </div>
                </div>
            <br>
            <div class="row border border-info py-1">
                    <div class="col-md-12">
                        ২.৩.৫ ট্রেডভিত্তিক এইচএসসি (ভোকেশনাল) শাখার শিক্ষার্থী ২০২১ (যদি এইচএসসি (ভোকেশনাল) থাকে)
                        <table class="table table-bordered" style="text-align:center">
                                <tr>
                                  <td rowspan="3"> কোড</td>
                                  <td rowspan="3" style="width: 300px"> ট্রেডের নাম</td>
                                  <td colspan="4"> শিক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2" colspan="2"> পরীক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2" colspan="2"> পাসের সংখ্যা</td>
                                </tr> 
                                <tr>
                                  <td colspan="2">১ম বর্ষ (একাদশ)</td>
                                  <td colspan="2">২য় বর্ষ (দ্বাদশ)</td>
                                </tr>
                                <tr>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                </tr>
                                <tbody>
                                    <tr>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                <br>
                    <div class="col-md-12">
                        ২.৩.৬ ট্রেডভিত্তিক এইচএসসি-বিএম শাখার শিক্ষার্থী-২০২১ (যদি এইচএসসি বিএম থাকে)
                        <table class="table table-bordered" style="text-align:center">
                                <tr>
                                  <td rowspan="3"> কোড</td>
                                  <td rowspan="3" style="width: 300px"> ট্রেডের নাম</td>
                                  <td colspan="4"> শিক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2" colspan="2"> পরীক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2" colspan="2"> পাসের সংখ্যা</td>
                                </tr> 
                                <tr>
                                  <td colspan="2">১ম বর্ষ (একাদশ)</td>
                                  <td colspan="2">২য় বর্ষ (দ্বাদশ)</td>
                                </tr>
                                <tr>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                </tr>
                                <tbody>
                                    <tr>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    </div>
                <br>
        </div>
    </div>

        @include('components/footer')

    </div>
@endsection
