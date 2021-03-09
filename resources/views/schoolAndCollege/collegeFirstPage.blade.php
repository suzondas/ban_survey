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
                    <div class="col-md-5">
                        <label class="label-text" for="">২.১ স্তরভিত্তিক শিক্ষার্থী সংখ্যা ২০২১</label>
                        <table class="table table-bordered" style="text-align:center">
                              <thead>
                                <tr>
                                  <th scope="col"></th>
                                  <th scope="col">১১শ-১২শ</th>
                                  <th scope="col">স্নাতক (পাস)</th>
                                  <th scope="col">স্নাতক (সম্মান)</th>
                                  <th scope="col">স্নাতকোত্তর</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row">মোট</td>
                                  <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                               <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                               <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                               <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                <tr>
                                  <td scope="row">ছাত্রী</td>
                                  <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                               <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                               <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                               <td scope="row"> <input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
        <div class="row border border-info  py-1 mt-2 ">
            <div class="col">
              ২.১.১ শ্রেণি, বিভাগভিত্তিক শিক্ষার্থী, ট্রান্সফার ইন, ট্রান্সফার আউট, পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২০
                <table class="table table-bordered  " style="text-align:center">
                    <tr>
                        <td scope="col" rowspan="2" >শ্রেণি</td>
                        <td scope="col" rowspan="2" style="width:120px">বিভাগ</td>
                        <td scope="col" rowspan="2">আসন সংখ্যা</td>
                        <td scope="col" colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">ইংরেজি ভার্সনে অধ্যয়নরত শিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                        <td scope="col" rowspan="2">ট্রান্সফার ইন</td>
                        <td scope="col" rowspan="2">ট্রান্সফার আউট</td>
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
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
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
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
                    </tr>
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
                    <div class="col-md-6">
                        <label class="label-text" for="">২.১.২ রিপিটার সংক্রান্ত: ২০২০ সালের শিক্ষার্থী ২০২১ সালে একই শ্রেণিতে অধ্যয়নরত আছে এইরুপ শিক্ষার্থীর সংখ্যা (রিপিটার)</label>
                        <table class="table table-bordered" style="text-align:center">
                              <thead>
                                <tr>
                                  <th colspan="2">১১শ শ্রেণি</th>
                                  <th colspan="2">১২শ শ্রেণি</th>
                                  <th colspan="2">স্নাতক (পাশ)</th>
                                  <th colspan="2">স্নাতক (সম্মান)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                </tr>
                                <tr>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <label class="label-text" for="">২.১.৩ ২০২০ সালের ঝরেপড়া শিক্ষার্থীর সংখ্যা (ড্রপআউট)</label>
                        <table class="table table-bordered mt-4" style="text-align:center">
                              <thead>
                                <tr>
                                  <th colspan="2">১১শ শ্রেণি</th>
                                  <th colspan="2">১২শ শ্রেণি</th>
                                  <th colspan="2">স্নাতক (পাশ)</th>
                                  <th colspan="2">স্নাতক (সম্মান)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                  <td>ছাত্র</td>
                                  <td>ছাত্রী</td>
                                </tr>
                                <tr>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col">২.১.৪ এইচএসসি ভোকেশনাল এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১
                        <label class="label-text" for=""></label>
                        <table class="table table-bordered" style="text-align:center">
                                <tbody>
                                <tr>
                                  <td rowspan="2" style="width:100px">শ্রেণি</td>
                                  <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2">ট্রান্সফার ইন</td>
                                  <td rowspan="2">ট্রান্সফার আউট</td>
                                  <td rowspan="2">২০২২ এর পাঠ্যপুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</td>
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
                                </tr>
                                <tr>
                                  <td>১ম বর্ষ (১১শ)</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>২য় বর্ষ (১২শ)</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col">২.১.৫ এইচএসসি বিএম এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১
                        <label class="label-text" for=""></label>
                        <table class="table table-bordered" style="text-align:center">
                                <tbody>
                                <tr>
                                  <td rowspan="2" style="width:100px">শ্রেণি</td>
                                  <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2">ট্রান্সফার ইন</td>
                                  <td rowspan="2">ট্রান্সফার আউট</td>
                                  <td rowspan="2">২০২২ এর পাঠ্যপুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</td>
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
                                </tr>
                                <tr>
                                  <td>১ম বর্ষ (১১শ)</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>২য় বর্ষ (১২শ)</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col">২.১.৬ ডিপ্লোমা ইন ফিশারিজ এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১
                        <label class="label-text" for=""></label>
                        <table class="table table-bordered" style="text-align:center">
                                <tbody>
                                <tr>
                                  <td rowspan="2" style="width:100px">শ্রেণি</td>
                                  <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2">ট্রান্সফার ইন</td>
                                  <td rowspan="2">ট্রান্সফার আউট</td>
                                  <td rowspan="2">২০২২ এর পাঠ্যপুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</td>
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
                                </tr>
                                <tr>
                                  <td>১ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>২য় পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৩য় পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৪র্থ পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৫ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৬ষ্ঠ পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৭ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৮ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col">২.১.৭ ডিপ্লোমা ইন কৃষি এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১
                        <label class="label-text" for=""></label>
                        <table class="table table-bordered" style="text-align:center">
                                <tbody>
                                <tr>
                                  <td rowspan="2" style="width:100px">শ্রেণি</td>
                                  <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                                  <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                                  <td rowspan="2">ট্রান্সফার ইন</td>
                                  <td rowspan="2">ট্রান্সফার আউট</td>
                                  <td rowspan="2">২০২২ এর পাঠ্যপুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</td>
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
                                </tr>
                                <tr>
                                  <td>১ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>২য় পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৩য় পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৪র্থ পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৫ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৬ষ্ঠ পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৭ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                                <tr>
                                  <td>৮ম পর্ব</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col">২.২ বিভিন্ন ক্যাটাগরিভিত্তিক শিক্ষার্থীর সংখ্যা ২০২১
                        <label class="label-text" for=""></label>
                        <table class="table table-bordered" style="text-align:center">
                                <tbody>
                                <tr>
                                  <td rowspan="2" >ক্র.নং</td>
                                  <td rowspan="2" style="width:150px">ক্যাটাগরি(শিক্ষার্থী)</td>
                                  <td colspan="2">১১শ শ্রেণি</td>
                                  <td colspan="2">১২শ শ্রেণি</td>
                                  <td colspan="2">স্নাতক (পাস)</td>
                                  <td colspan="2">স্নাতক (সম্মান)</td>
                                  <td colspan="2">স্নাতকোত্তর</td>
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
                                </tr>
                                <tr>
                                  <td>১</td>
                                  <td>কর্মজীবী শিক্ষার্থী</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                 <tr>
                                  <td>২</td>
                                  <td>ভূমিহীন অভিভাবকের সন্তান</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                 <tr>
                                  <td>৩</td>
                                  <td>মুক্তিযোদ্ধ পোষ্য/নাতি-নাতনি</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                 <tr>
                                  <td>৪</td>
                                  <td>ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থী</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                 <tr>
                                  <td>৫</td>
                                  <td>অনাথ/এতিম শিক্ষার্থী</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                 <tr>
                                  <td>৬</td>
                                  <td>প্রতিবন্ধি শিক্ষার্থী</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>ধর্মভিত্তিক বিভাজন</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>মুসলিম-৭</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>হিন্দু-৮</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>খ্রিষ্টান-৯</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>বৌদ্ধ-১০</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>অন্যান্য-১১</td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                  <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                               <td><input type="number"  class="form-control" name=""
                               id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row border border-info py-1">
                    <div class="col">
                        <label class="label-text" for="">২.২.৪ বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীর ধরন অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা ২০২১</label>
                <table class="table table-bordered" style="text-align:center">
                    
                    <tr>
                        <td scope="col" >ক্র. নং</td>
                        <td scope="col" >বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                        <td scope="col" colspan="2" >শিক্ষক</td>
                        <td scope="col" colspan="2">৬ষ্ঠ শ্রেণি</td>
                        <td scope="col" colspan="2">৭ম শ্রেণি</td>
                        <td scope="col" colspan="2">৮ম শ্রেণি</td>
                        <td scope="col" colspan="2">৯ম শ্রেণি</td>
                        <td scope="col" colspan="2">১০ম শ্রেণি</td>
                    </tr>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
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
                        <td scope="row">১</td>
                        <td scope="row">অটিস্টিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">২</td>
                        <td scope="row">শারীরিক প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৩</td>
                        <td scope="row">দীর্ঘস্থায়ী মানসিক অসুস্থতাজনিত প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৪</td>
                        <td scope="row">দৃষ্টি প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৫</td>
                        <td scope="row">বাক প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৬</td>
                        <td scope="row">বুদ্ধি প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৭</td>
                        <td scope="row">শ্রবণ প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">৮</td>
                        <td scope="row">শ্রবণ-দৃষ্টি প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৯</td>
                        <td scope="row">সেরিব্রালপালসি</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">১০</td>
                        <td scope="row">বহুমাত্রিক প্রতিবন্ধিতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">১১</td>
                        <td scope="row">ডাউন সিনড্রম</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">১২</td>
                        <td scope="row">অন্যান্য</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row"></td>
                        <td scope="row">মোট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">তৃতীয় লিঙ্গ</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
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
