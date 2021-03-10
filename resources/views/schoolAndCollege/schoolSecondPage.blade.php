@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')
        <div class="header">
            <h2 style="text-align:center">স্কুল ২য় পাতা</h2>
        </div>
        <div class="row mt-4 col-9">
            ২.৩.৫ বিভাগভিত্তিক বিভিন্ন বোর্ড পরীক্ষার ফলাফল:
        </div>
        <div class="row  py-1 mt-2 ">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" rowspan="3">পরিক্ষার নাম ও বছর</th>
                        <th scope="col"   rowspan="3">বিভাগ</th>
                        <th scope="col" colspan="2" rowspan="2">রেজি: শিক্ষার্থীর সংখ্যা</th>
                        <th scope="col" colspan="2" rowspan="2">পরীক্ষার্থীর সংখ্যা</th>
                        <th scope="col" colspan="10">প্রাপ্ত জিপিএ অনুযায়ী পাসের সংখ্যা</th>
                        <th scope="col" colspan="2">মোট পাস</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="5">ছাত্র</th>
                        <th scope="col" colspan="5">ছাত্রী</th>
                        <th scope="col" >মোট</th>
                        <th scope="col" >ছাত্রী</th>
                    </tr>
                    <tr>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">৫.০০</th>
                        <th scope="col">৪-৪.৯৯</th>
                        <th scope="col">৩-৩.৯৯</th>
                        <th scope="col">২-২.৯৯</th>
                        <th scope="col">২ এর নিচে</th>
                        <th scope="col">৫.০০</th>
                        <th scope="col">৪-৪.৯৯</th>
                        <th scope="col">৩-৩.৯৯</th>
                        <th scope="col">২-২.৯৯</th>
                        <th scope="col">২ এর নিচে</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">জেএসসি (২০২০)</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="3">এসএসসি (২০২০)</td>
                        <td scope="row">মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td scope="row">বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td scope="row">ব্যবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="3">এসএসসি ভোক (২০২০)</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>

                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৩.৬ ট্রেডভিত্তিক এসএসসি (ভোকেশনাল) শাখার শিক্ষার্থী ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 ">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" rowspan="3">কোড</th>
                        <th scope="col"   rowspan="3">ট্রেডের নাম</th>
                        <th scope="col" colspan="4">শিক্ষার্থীর সংখ্যা ২০২১</th>
                        <th scope="col" colspan="2" rowspan="2">পরীক্ষার্থীর সংখ্যা ২০২০</th>
                        <th scope="col" colspan="2" rowspan="2">পাসের সংখ্যা ২০২০</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="2">৯ম শ্রেণি</th>
                        <th scope="col" colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">2761</td>
                        <td scope="row">Agro Based Food</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    </tbody>
                </table>
                <input type="button" class="" name="" id="" value="Add More">
            </div>
        </div>
        <div class="row mt-2 col-9">
            <div class="col-7">
                ২.৩.৭ আপনার প্রতিষ্ঠানে উন্মুক্ত বিশ্ববিদ্যালয়ের শিক্ষা প্রোগ্রাম পরিচালিত হয় কি?
            </div>
            <div class="col col-2">
                <select class="custom-select " name="english_version" style="width: 90px">
                    <option value="">Select</option>
                    <option value="1">হ্যাঁ</option>
                    <option value="2">না</option>
                </select>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৩.৮ উত্তর হ্যাঁ হলে, প্রোগ্রাম ভিত্তিক শিক্ষার্থীর তথ্য নিম্নের ছক মোতাবেক প্রদান করুন
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" rowspan="3" >ভর্তির বছর</th>
                        <th scope="col"   colspan="4">এসএসসি প্রোগ্রাম</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="2">৯ম শ্রেণি</th>
                        <th scope="col" colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th scope="col">পরীক্ষার্থী</th>
                        <th scope="col">পাশের সংখ্যা</th>
                        <th scope="col">পরীক্ষার্থী</th>
                        <th scope="col">পাশের সংখ্যা</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row" >২০২০</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>

                    <tr>
                        <td scope="row" >২০১৯</td>

                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>

                    <tr>
                        <td scope="row" >২০১৮</td>

                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>

                    <tr>
                        <td scope="row" >২০১৭</td>

                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৩.৯ উত্তর হ্যাঁ হলে, প্রোগ্রাম ভিত্তিক ফলাফল নিম্নের ছক মোতাবেক প্রদান করুন
        </div>
        <div class="row border border-info py-1 mt-2 col-6">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" rowspan="3" colspan="2">ভর্তির বছর</th>
                        <th scope="col"   colspan="4">এসএসসি প্রোগ্রাম</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="2">৯ম শ্রেণি</th>
                        <th scope="col" colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th scope="col">পরীক্ষার্থী</th>
                        <th scope="col">পাশের সংখ্যা</th>
                        <th scope="col">পরীক্ষার্থী</th>
                        <th scope="col">পাশের সংখ্যা</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row" rowspan="2">২০২০</td>
                        <td scope="row">মোট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="2">২০১৯</td>
                        <td scope="row">মোট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="2">২০১৮</td>
                        <td scope="row">মোট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="2">২০১৭</td>
                        <td scope="row">মোট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="2">২০১৬</td>
                        <td scope="row">মোট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    <tr>
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" ></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৪.১ সংযুক্ত এসএসসি (ভোকেশনাল) শাখার শিক্ষক সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" rowspan="2">পদবি কোড</th>
                        <th scope="col" rowspan="2" >পদবি</th>
                        <th scope="col" colspan="2" >বর্তমানে কর্মরত</th>
                        <th scope="col" colspan="2">এমপিওভু্ক্ত</th>
                        <th scope="col" colspan="2" rowspan="2">শূন্য পদের সংখ্যা</th>

                    </tr>
                    <tr>

                        <th scope="col">মোট</th>
                        <th scope="col">মহিলা</th>
                        <th scope="col">মোট</th>
                        <th scope="col">মহিলা</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">২৩</td>
                        <td scope="row">প্রভাষক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">২৪</td>
                        <td scope="row">প্রদর্শক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">৪৩</td>
                        <td scope="row">ইন্সট্রাক্টর</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">৪৪</td>
                        <td scope="row">ওয়ার্কশপ সুপার</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">৪৫</td>
                        <td scope="row">জুনিয়র ইন্সট্রাক্টর</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">৭৮</td>
                        <td scope="row">ডেমো-কাম মেকানিকস</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৮১</td>
                        <td scope="row">কম্পিউটার অপারেটর কাম মেকানিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৮২</td>
                        <td scope="row">টেকনিক্যাল শপ এ্যসিসট্যান্ট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৬২</td>
                        <td scope="row">ল্যাব এ্যসিসট্যান্ট</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৫০</td>
                        <td scope="row">৩য় শ্রেণি</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৬০</td>
                        <td scope="row">৪র্থ শ্রেণি</td>
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
        <div class="row border border-info py-1 mt-2">
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
                        <td>(৩৫)পিএইচডি</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(৩৪)এমফিল/এমএস</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(১৪)স্নাতকোত্তর (অনার্সসহ)</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(৩৬)স্নাতকোত্তর (অনার্সছাড়া)</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(১৫)কামিল</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(১৩)স্নাতক সম্মান (৩ বছর মেয়াদী)</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(৩৮)স্নাতক সম্মান  (৪ বছর মেয়াদী)</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(১০)স্নাতক</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(১১)ফাজিল</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(০৪)এইচএসসি/ আলিম বা সমমান</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(২৫)কৃষি ডিপ্লোমা</td>
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
                        <td>(০৭)এম এড</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(০৪)বিএড/ডিপ ইন এড</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(০৫)বি পি এড</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>(০৬)বি এজি এড</td>
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
                        <td>বেসিক আেই.সি.টি ট্রেনিং</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>বিষয়ভিত্তিক প্রশিক্ষণ</td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                        <td><input type="number"  class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>ব্যবস্থাপনা</td>
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
        <div class="row mt-4 col-9">
            ২.৪.১২ কর্মকালীন প্রশিক্ষণের তথ্য
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" rowspan="2">প্রশিক্ষণ</th>
                        <th scope="col" colspan="2">প্রশিক্ষণপ্রাপ্ত শিক্ষক</th>
                        <th scope="col" rowspan="2">প্রশিক্ষণ</th>
                        <th scope="col" colspan="2">প্রশিক্ষণপ্রাপ্ত শিক্ষক</th>

                    </tr>
                    <tr>

                        <th scope="col" colspan="2">হ্যাঁ/না</th>
                        <th scope="col">মোট</th>
                        <th scope="col">মহিলা</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">হেড টিচার ট্রেনিং (২১ দিন)</td>
                        <td scope="row" colspan="2"> <select class="custom-select " name="english_version" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td scope="row" >সিপিডি-১ শুধুমাত্র ইংরেজি ট্রেনিং (২১ দিন)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td scope="row">হেড টিচার ফলো-আপ ট্রেনিং (৬ দিন)</td>
                        <td scope="row" colspan="2"> <select class="custom-select " name="english_version" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td scope="row">সিপিডি-২ ট্রেনিং (৫ দিন)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">হেড টিচার প্রি-সার্ভিস ট্রেনিং (৩৫ দিন)</td>
                        <td scope="row" colspan="2"> <select class="custom-select " name="english_version" style="width: 90px">
                                <option value="">Select</option>
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select></td>
                        <td scope="row">ক্লাস্টার ট্রেনিং (১ দিন)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="2"></td>
                        <td scope="row" colspan="2" >প্রশিক্ষণপ্রাপ্ত শিক্ষক সংখ্যা</td>
                        <td scope="row">এস.বি. এ ট্রেনিং</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>

                        <td scope="row">মোট</td>
                        <td scope="row">মহিলা</td>
                        <td scope="row">সৃজনশীল প্রশ্ন সংক্রান্ত ট্রেনিং</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                     <tr>
                        <td scope="row">এসটিসি ট্রেনিং (৩ মাস)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row">অন্যান্য ট্রেনিং</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">এসটিটি থেকে বি.এড (৯ মাস)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row" colspan="3" rowspan="2">•প্রধান শিক্ষকগণ হ্যাঁ/না টিক দিবেন <br>
                            •অন্যান্য শিক্ষকগণের সংখ্যা লিখবেন
                        </td>

                    </tr>
                    <tr>
                        <td scope="row">সিপিডি-১ ট্রেনিং (১৪ দিন)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row border border-info py-1 mt-2">
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
                        <tr>
                            <td>২</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে ৩০০ নম্বরের ইংরেজি ছিল</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td style="width: 350px">ইংরেজিতে স্নাতক-সম্মান</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td style="width: 350px">ইংরেজিতে স্নাতকোত্তর</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে ইংরেজি ছিল না</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td style="width: 350px">এইচএসসি পাস</td>
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
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে পদার্থ ও রসায়নসহ গণিত ছিল</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে অন্যান্য বিষয়সহ গণিত ছিল</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td style="width: 350px">গণিতে স্নাতক-সম্মান</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td style="width: 350px">গণিতে স্নাতকোত্তর</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে গণিত ছিল না কিন্তু এইচএসসিতে ছিল</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td style="width: 350px">স্নাতক (পাস) পর্যায়ে গণিত ছিল না</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৭</td>
                            <td style="width: 350px">গণিতসহ এইচএসসি পাশ</td>
                            <td><input type="number"  class="form-control" name="" id="" ></td>
                        </tr>
                        <tr>
                            <td>৮</td>
                            <td style="width: 350px">গণিত ছাড়া এইচএসসি পাশ</td>
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
        <div class="row mt-4 col-9">
            ২.৫ শিক্ষা প্রতিষ্ঠানে প্রাপ্ত পুরষ্কার সম্পর্কিত তথ্য (নির্দিষ্ট স্থানে টিক চিহ্ন দিন)
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>

                    </thead>
                    <tbody>
                    <tr>
                        <td scope="col" rowspan="7" >শিক্ষকদের জন্য</td>
                        <td scope="col" >বিষয়</td>
                        <td scope="col" >জাতীয়</td>
                        <td scope="col" >বিভাগ/মহানগর</td>
                        <td scope="col" >জেলা</td>
                        <td scope="col" >উপজেলা/থানা</td>
                        <td scope="col" >সাল</td>
                    </tr>
                    <tr>
                        <td scope="row" >শ্রেষ্ঠ শিক্ষা প্রতিষ্ঠান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row">শ্রেষ্ঠ শিক্ষা প্রতিষ্ঠান প্রধান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row">শ্রেষ্ঠ শ্রেণি শিক্ষক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row" >শ্রেষ্ঠ শ্রেণি শিক্ষক (বিএনসিসি)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row" >শ্রেষ্ঠ শ্রেণি শিক্ষক (স্কাউট)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row" >শ্রেষ্ঠ শ্রেণি শিক্ষক (গার্ল গাইড)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="3">শিক্ষার্থীদের জন্য</td>
                        <td scope="row" >শ্রেষ্ঠ শিক্ষার্থী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row" >শ্রেষ্ঠ শিক্ষার্থী ( স্কাউট)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    <tr>
                        <td scope="row" >শ্রেষ্ঠ শিক্ষার্থী (গার্ল গাইড)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width:60px;" ></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @include('components/footer')
    </div>
@endsection
