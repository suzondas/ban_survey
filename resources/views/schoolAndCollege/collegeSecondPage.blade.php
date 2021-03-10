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
                    <div class="row border border-info py-1">
                    <div class="col-md-2">
                    <label class="label-number" for="">২.৩.৭ আপনার প্রতিষ্ঠানে উন্মুক্ত বিশ্ববিদ্যালয়ের শিক্ষা প্রোগ্রাম পরিচালিত হয় কি?</label>
                        <select class="custom-select" name="" style="width: 75px">
                            <option value="" selected>Select</option>
                            <option value="1">হ্যাঁ-১</option>
                            <option value="2">না-২</option>>
                        </select>
                </div>
                <div class="col-md-10">
                    <label class="label-number" for="">২.৩.৮ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক শিক্ষার্থীর তথ্য নিম্নের ছক মোতাবেক প্রদান করুন</label>
                        <table class="table table-bordered text-center">
                                <tr>
                                  <td rowspan="3">ভর্তির বছর</td>
                                  <td colspan="4"> এইচএসসি প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">স্নাতক (পাস) প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">স্নাতক (সম্মান) প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">স্নাতকোত্তর প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">অন্যান্য প্রোগ্রাম</td>
                                </tr> 
                                <tr>
                                  <td colspan="2">একাদশ শ্রেণি</td>
                                  <td colspan="2">দ্বাদশ শ্রেণি</td>
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
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>
                                  <td>মোট</td>
                                  <td>ছাত্রী</td>

                                </tr>
                                <tbody>
                                <tr>
                                    <td>২০২১</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>২০২০</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>২০১৯</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>২০১৮</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>২০১৭</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <label class="label-number" for="">২.৩.৯ উত্তর হ্যাঁ হলে প্রোগ্রাম ভিত্তিক ফলাফল নিম্নের ছক মোতাবেক প্রদান করুন</label>
                        <table class="table table-bordered" style="text-align:center">
                                <tr>
                                  <td rowspan="3" colspan="2">ভর্তির বছর</td>
                                  <td colspan="4"> এইচএসসি প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">স্নাতক (পাস) প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">স্নাতক (সম্মান) প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">স্নাতকোত্তর প্রোগ্রাম</td>
                                  <td rowspan="2" colspan="2">অন্যান্য প্রোগ্রাম</td>
                                </tr> 
                                <tr>
                                  <td colspan="2">একাদশ শ্রেণি</td>
                                  <td colspan="2">দ্বাদশ শ্রেণি</td>
                                </tr>
                                <tr>
                                  <td>পরিক্ষার্থী</td>
                                  <td>পাশের সংখ্যা</td>
                                  <td>পরিক্ষার্থী</td>
                                  <td>পাশের সংখ্যা</td>
                                  <td>পরিক্ষার্থী</td>
                                  <td>পাশের সংখ্যা</td>
                                  <td>পরিক্ষার্থী</td>
                                  <td>পাশের সংখ্যা</td>
                                  <td>পরিক্ষার্থী</td>
                                  <td>পাশের সংখ্যা</td>
                                  <td>পরিক্ষার্থী</td>
                                  <td>পাশের সংখ্যা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td rowspan="2">২০২০</td>
                                    <td>মোট</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>ছাত্রী</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                <td rowspan="2">২০১৯</td>
                                <td>মোট</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>ছাত্রী</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                <td rowspan="2">২০১৮</td>
                                <td>মোট</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>ছাত্রী</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                <td rowspan="2">২০১৭</td>
                                <td>মোট</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>ছাত্রী</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                <td rowspan="2">২০১৬</td>
                                <td>মোট</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>ছাত্রী</td>
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
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                <div class="col-md-9"> ২.৪ মূল প্রতিষ্ঠানের পদবিভিত্তিক কর্মরত ও এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে) শিক্ষক ও কর্মচারীর সংখ্যা: ২০২১ </label>
                        <table class="table table-bordered text-center">
                                <tr>
                                  <td rowspan="2">পদবী</td>
                                  <td colspan="2"> কর্মরত</td>
                                  <td colspan="2"> এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে)</td>
                                  <td rowspan="2">শূন্য পদের সংখ্যা</td>
                                  <td rowspan="2">নিবন্ধনকৃত শিক্ষক সংখ্যা (NTRCA) (প্রযোজ্য ক্ষেত্রে)</td>
                                  <td rowspan="2">খন্ডকালীন শিক্ষক সংখ্যা</td>
                                  <td rowspan="2">NTRCA কর্তৃক পূরণযোগ্য শূন্য পদের সংখ্যা</td>
                                </tr>
                                <tr>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>অধ্যক্ষ</td>
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
                    <div class="col-md-9">
                        <label class="label-number" for="">২.৪.১ সংযুক্ত এসএসসি (ভোকেশনাল) এইচএসসি (বিএম) শাখার শিক্ষক/কর্মচারীর সংখ্যা: ২০২০</label>
                        <table class="table table-bordered text-center">
                                <tr>
                                  <td rowspan="2">পদবী</td>
                                  <td colspan="2"> কর্মরত</td>
                                  <td colspan="2"> এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে)</td>
                                  <td rowspan="2">শূন্য পদের সংখ্যা</td>
                                  <td rowspan="2">নিবন্ধনকৃত শিক্ষক সংখ্যা (NTRCA) (প্রযোজ্য ক্ষেত্রে)</td>
                                  <td rowspan="2">খন্ডকালীন শিক্ষক সংখ্যা</td>
                                  <td rowspan="2">NTRCA কর্তৃক পূরণযোগ্য শূন্য পদের সংখ্যা</td>
                                </tr>
                                <tr>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>প্রভাষক</td>
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
                <div class="row border border-info py-1">
                <div class="col-md-4" > ২.৪ মূল প্রতিষ্ঠানের পদবিভিত্তিক কর্মরত ও এমপিওভুক্ত (প্রযোজ্য ক্ষেত্রে) শিক্ষক ও কর্মচারীর সংখ্যা: ২০২১

                        <table class="table table-bordered text-center">
                                <tr>
                                  <td rowspan="2">পদবী</td>
                                  <td colspan="2">শিক্ষক সংখ্যা</td>
                                </tr>
                                <tr>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>পিএইচডি</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>এমফিল/এমএস</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>স্নাতকোত্তর (অনার্সসহ)</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>স্নাতকোত্তর (অনার্সছাড়া)</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>কামিল</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>স্নাতক সম্মান (৩ বছর মেয়াদী)</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>স্নাতক সম্মান  (৪ বছর মেয়াদী)</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>স্নাতক</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>ফাজিল</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>এইচএসসি/ আলিম বা সমমান</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>কৃষি ডিপ্লোমা</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        ২.৪.৩ মূল প্রতিষ্ঠানের সর্বোচ্চ পেশাগত ডিগ্রিপ্রাপ্ত শিক্ষক সংখ্যা:
                        <table class="table table-bordered text-center">
                                <tr>
                                  <td rowspan="2">পদবী</td>
                                  <td colspan="2">শিক্ষক সংখ্যা</td>
                                </tr>
                                <tr>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>এম এড</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>বিএড/ডিপ ইন এড</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>বি পি এড</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>বি এজি এড</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        ২.৪.৪ আইসিটি বিষয়ক প্রশিক্ষণ/ ডিগ্রি প্রাপ্ত শিক্ষক সংখ্যা
                        <table class="table table-bordered text-center">
                                <tr>
                                  <td rowspan="2">প্রশিক্ষণ/ ডিগ্রি</td>
                                  <td colspan="2">শিক্ষক সংখ্যা</td>
                                </tr>
                                <tr>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>ডিপ্লোমা (আইসিটি)</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>সার্টিফিকেট ট্রেনিং</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>হার্ডওয়্যার এন্ড ট্রাবল স্যুটিং</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>ডিজিটাল কনটেন্ট ডেভলপমেন্ট ট্রেনিং</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                <tr>
                                    <td>অন্যান্য</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                <div class="col-md-6"> 
                    <div class="col">
                        <table class="table table-bordered text-center">
                                <tr>
                                    <td></td>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td style="width: 350px">২.৪.১৪  ক্লাস রুটিন অনুযায়ী ইংরেজি পাঠদানকারী শিক্ষক সংখ্যা:</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">২.৪.১৫ ইংরেজি বিষয়ে পাঠদানকারী শিক্ষকের স্নাতক (পাস), স্নাতক (সম্মান) ও স্নাতকোত্তর পর্যায়ে ইংরেজি বিষয় অধ্যয়ন সম্পর্কিত তথ্য:

                        <table class="table table-bordered text-center">
                                <tr>
                                  <td>ক্রমিক নং</td>
                                  <td>বিবরণ</td>
                                  <td>শিক্ষক/ শিক্ষিকার সংখ্যা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>১</td>
                                    <td style="width: 350px">স্নাতক (পাস) পর্যায়ে বাধ্যতামূলক ১০০ নম্বরের ইংরেজি ছিল</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    </div>
                    <div class="col-md-6"> 
                    <div class="col">
                        <table class="table table-bordered text-center">
                                <tr>
                                    <td></td>
                                  <td>মোট</td>
                                  <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td style="width: 350px">২.৪.১৬  ক্লাস রুটিন অনুযায়ী গণিত বিষয়ে পাঠদানকারী শিক্ষক সংখ্যা:</td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                <td><input type="number"  class="form-control" name="" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">২.৪.১৭ গণিত বিষয়ে পাঠদানকারী শিক্ষকের স্নাতক (পাস), স্নাতক (সম্মান) ও স্নাতকোত্তর পর্যায়ে গণিত বিষয় অধ্যয়ন সম্পর্কিত তথ্য:

                        <table class="table table-bordered text-center">
                                <tr>
                                  <td>ক্রমিক নং</td>
                                  <td>বিবরণ</td>
                                  <td>শিক্ষক/ শিক্ষিকার সংখ্যা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>১</td>
                                    <td style="width: 350px">স্নাতক (পাস) পর্যায়ে বাধ্যতামূলক ১০০ নম্বরের ইংরেজি ছিল</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                    <br>
                <div class="row border border-info py-1">
                <div class="col-md-8">
                    <div class="col">২.৪.১৮ অবসর গ্রহণ, নতুন নিয়োগপ্রাপ্ত, গবেষণা কাজ, পুরষ্কার প্রাপ্ত ইত্যাদি সম্পর্কিত শিক্ষকের সংখ্যা
                        <table class="table table-bordered text-center">
                                <tr>
                                  <td rowspan="2">ক্রমিক নং</td>
                                  <td rowspan="2" style="width:450px">বিবরণ</td>
                                  <td colspan="2"> শিক্ষক/ শিক্ষিকার সংখ্যা</td>
                                </tr>
                                <tr>
                                    <td>মোট</td>
                                    <td>মহিলা</td>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>১</td>
                                    <td style="width: 300px">তথ্য প্রদানের দিন শিক্ষক উপস্থিতি</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>২</td>
                                    <td style="width: 300px">অবসরে গিয়েছেন (১/৭/২০২০থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>৩</td>
                                    <td style="width: 300px">অবসরে যাবেন (১/৭/২০২১ থেকে ৩০/৬/২০২২ পর্যন্ত)</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>৪</td>
                                    <td style="width: 300px">নতুন নিয়োগপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>৫</td>
                                    <td style="width: 300px">শিক্ষকতা পেশা ছেড়ে দিয়েছেন (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>৬</td>
                                    <td style="width: 300px">NTRCA কর্তৃক সুপারিশকৃত শিক্ষকের সংখ্যা</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>৭</td>
                                    <td style="width: 300px">বর্তমানে কতজন শিক্ষক গবেষণা কাজে সম্পৃক্ত</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>৮</td>
                                    <td style="width: 300px">একাডেমিক বিষয়ের ওপর পুরষ্কারপ্রাপ্ত শিক্ষকের সংখ্যা</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>৯</td>
                                    <td style="width: 300px">শিখন-শেখানো বিষয়ে প্রশিক্ষণপ্রাপ্ত (১/৭/২০২০ থেকে ৩০/৬/২০২১ পর্যন্ত)</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>১০</td>
                                    <td style="width: 300px">বিশেষ চাহিদাসম্পন্ন (Special needs) শিক্ষার্থীর শিক্ষা বিষয়ে প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                <tr>
                                    <td>১১</td>
                                    <td style="width: 300px">একীভূত শিক্ষা (Inclusive education), শিশু অধিকার এবং বিদ্যালয়ের ইতিবাচক শৃঙ্খলা বিষয়ের ওপর প্রশিক্ষণপ্রাপ্ত শিক্ষকের সংখ্যা</td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                <td><input type="number"  class="form-control" name="" id="" ></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                    <br>
                </div>
        </div>
    </div>

        @include('components/footer')

    </div>
@endsection
