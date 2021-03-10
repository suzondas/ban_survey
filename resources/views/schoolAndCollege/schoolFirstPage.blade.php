@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')
        <div class="header">
            <h2 style="text-align:center">স্কুল</h2>
        </div>

        <div class="row mt-4 col-9">
            ২.১ স্তরভিত্তিক শিক্ষার্থী সংখ্যা ২০২১ঃ
        </div>
        <div class="row mt-2 col-9">
            <div class="row border border-info py-1 mt-2 col-9">
                <div class="col">
                    <table class="table table-bordered" style="text-align:center">
                        <thead>
                        <tr>
                            <th  colspan="2">১ম-৫ম</th>
                            <th  colspan="2">৬ষ্ঠ-১০ম</th>
                            <th  colspan="2">ভোকেশনাল</th>
                        </tr>
                        <tr>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td ><input type="text" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            ২.১.১ শ্রেণি, বিভাগভিত্তিক শিক্ষার্থী, ট্রান্সফার ইন, ট্রান্সফার আউট, পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২০
        </div>
        <div class="row   py-1 mt-2 ">
            <div class="col">
                <table class="table table-bordered  " style="text-align:center">
                    <thead>
                    <tr>
                        <th >স্তর</th>
                        <th >শ্রেণি</th>
                        <th >বিভাগ</th>
                        <th  colspan="2">শিক্ষার্থীর সংখ্যা</th>
                        <th  colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</th>
                        <th  colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</th>
                        <th  colspan="2">ইংরেজি ভার্সনে অধ্যয়নরত শিক্ষার্থীর সংখ্যা</th>
                        <th  colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</th>
                        <th >ট্রান্সফার ইন</th>
                        <th >ট্রান্সফার আউট</th>
                        <th >২০২২ এর পাঠ্য পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</th>
                    </tr>
                    <tr>
                        <th ></th>
                        <th ></th>
                        <th >-</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th ></th>
                        <th ></th>
                        <th ></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >প্রাক-প্রাথমিক</td>
                        <td >-</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td  rowspan="5">প্রাথমিক</td>
                        <td >১ম</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >২য়</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >৩য়</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >৪র্থ</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >৫ম</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td  rowspan="11">মাধ্যমিক</td>
                        <td >৬ষ্ঠ</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >৭ম</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >৮ম</td>
                        <td >-</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td  rowspan="4" >৯ম</td>
                        <td >মানবিক</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >বিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >ব্যবসায় শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >এসএসসি (ভোক)</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td  rowspan="4" >১০ম</td>
                        <td >মানবিক</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >বিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >ব্যবসায় শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td >এসএসসি (ভোক)</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row mt-4 col-9">
            ২.১.২ ২০২০ ও তার পূর্বের শিক্ষার্থী ২০২১ সালে একই শ্রেণিতে (রিপিটার) অধ্যয়নরত আছে এইরূপ শিক্ষার্থীর সংখ্যা
        </div>

            <div class="row border border-info py-1 mt-2 col-10">
                <div class="col">
                    <table class="table table-bordered" style="text-align:center">
                        <thead>
                        <tr>
                            <th  colspan="2">৬ষ্ঠ শ্রেণি</th>
                            <th  colspan="2">৭ম শ্রেণি</th>
                            <th  colspan="2">৮ম শ্রেণি</th>
                            <th  colspan="2">৯ম শ্রেণি</th>
                            <th  colspan="2">১০ শ্রেণি</th>
                        </tr>
                        <tr>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                            <th >মোট</th>
                            <th >ছাত্রী</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td ><input type="text" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                            <td ><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        <div class="row mt-4 col-9">
            ২.১.৩ ২০২০ সালের ঝরে পড়া (ড্রপআউট) শিক্ষার্থীর সংখ্যা
        </div>
        <div class="row border border-info py-1 mt-2 col-10">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  colspan="2">৬ষ্ঠ শ্রেণি</th>
                        <th  colspan="2">৭ম শ্রেণি</th>
                        <th  colspan="2">৮ম শ্রেণি</th>
                        <th  colspan="2">৯ম শ্রেণি</th>
                        <th  colspan="2">১০ শ্রেণি</th>
                    </tr>
                    <tr>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td ><input type="text" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4 col-9">
            ২.১.৪ সেকশনভিত্তিক শিক্ষার্থীর তথ্য ২০২১ (সেকশন না থাকলে পূরণ করার প্রয়োজন নেই)
        </div>
        <div class="row border border-info py-1 mt-2 col-10">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  >সেকশন</th>
                        <th  >৬ষ্ঠ শ্রেণি</th>
                        <th  >৭ম শ্রেণি</th>
                        <th  >৮ম শ্রেণি</th>
                        <th  colspan="3">৯ম শ্রেণি</th>
                        <th  colspan="3">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th ></th>
                        <th ></th>
                        <th ></th>
                        <th ></th>
                        <th >বিজ্ঞান</th>
                        <th >মানবিক</th>
                        <th >মানবিক</th>
                        <th >বিজ্ঞান</th>
                        <th >মানবিক</th>
                        <th >মানবিক</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >ক</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                     <tr>
                        <td >খ</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td >গ</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td >ঘ</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td >ঙ</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td >চ</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td >ছ</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td >মোট সেকশন</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td >অনুমোদিত সেকশন:</td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                        <td ><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4 col-9">
            ২.২ স্তর ও ক্যাটাগরিভিত্তিক শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  >ক্র. নং</th>
                        <th  >ক্যাটাগরি (শিক্ষার্থী)</th>
                        <th  colspan="2" >৬ষ্ঠ শ্রেণি</th>
                        <th  colspan="2">৭ম শ্রেণি</th>
                        <th  colspan="2">৮ম শ্রেণি</th>
                        <th  colspan="2">৯ম শ্রেণি</th>
                        <th  colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th ></th>
                        <th ></th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >২</td>
                        <td >কর্মজীবী শিক্ষার্থী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৩</td>
                        <td >ভূমিহীন অভিভাবকের সন্তান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৪</td>
                        <td >মুক্তিযোদ্ধা পোষ্য/ নাতি-নাতনি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৫</td>
                        <td >ক্ষুদ্রনৃ-গোষ্ঠী শিক্ষার্থী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ধর্মভিত্তিক বিভাজন</td>

                    </tr>
                    <tr>
                        <td ></td>
                        <td >মুসলিম-৭</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >হিন্দু-৮</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >খ্রিষ্টান-৯</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >বৌদ্ধ-১০</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >অন্যান্য-১১</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.২.৪ বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীরধরন অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  >ক্র. নং</th>
                        <th  >বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</th>
                        <th  colspan="2" >শিক্ষক</th>
                        <th  colspan="2">৬ষ্ঠ শ্রেণি</th>
                        <th  colspan="2">৭ম শ্রেণি</th>
                        <th  colspan="2">৮ম শ্রেণি</th>
                        <th  colspan="2">৯ম শ্রেণি</th>
                        <th  colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th ></th>
                        <th ></th>
                        <th >মোট</th>
                        <th >মহিলা</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >১</td>
                        <td >অটিস্টিক</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >২</td>
                        <td >শারীরিক প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৩</td>
                        <td >দীর্ঘস্থায়ী মানসিক অসুস্থতাজনিত প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৪</td>
                        <td >দৃষ্টি প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৫</td>
                        <td >বাক প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৬</td>
                        <td >বুদ্ধি প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৭</td>
                        <td >শ্রবণ প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >৮</td>
                        <td >শ্রবণ-দৃষ্টি প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৯</td>
                        <td >সেরিব্রালপালসি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >১০</td>
                        <td >বহুমাত্রিক প্রতিবন্ধিতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >১১</td>
                        <td >ডাউন সিনড্রম</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >১২</td>
                        <td >অন্যান্য</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td ></td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td ></td>
                        <td >তৃতীয় লিঙ্গ</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4 col-9">
            ২.২.৫ ক্ষুদ্র-নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  >ক্র. নং</th>
                        <th  >ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</th>
                        <th  colspan="2" >শিক্ষক</th>
                        <th  colspan="2">৬ষ্ঠ শ্রেণি</th>
                        <th  colspan="2">৭ম শ্রেণি</th>
                        <th  colspan="2">৮ম শ্রেণি</th>
                        <th  colspan="2">৯ম শ্রেণি</th>
                        <th  colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th ></th>
                        <th ></th>
                        <th >মোট</th>
                        <th >মহিলা</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >১</td>
                        <td >সাঁওতাল</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >২</td>
                        <td >চাকমা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৩</td>
                        <td >গারো</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৪</td>
                        <td >হাজং</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৫</td>
                        <td >চাক</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৬</td>
                        <td >কুকি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৭</td>
                        <td >খেয়া</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >৮</td>
                        <td >বোম/বম</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৯</td>
                        <td >মারমা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >১০</td>
                        <td >ত্রিপুরা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >১১</td>
                        <td >খাসিয়া</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >১২</td>
                        <td >মনিপুরি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td >১৩</td>
                        <td >অন্যান্য</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৩ বয়সভিত্তিক শিক্ষার্থীর সংখ্যা (০১/০১/২০২১ তারিখের বয়স)
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  colspan="2">শ্রেণি</th>
                        <th  >৫ বছর</th>
                        <th  >৬ বছর</th>
                        <th  >৭ বছর</th>
                        <th  >৮ বছর</th>
                        <th  >৯ বছর</th>
                        <th  >৯ বছরের উপরে</th>
                        <th  >মোট</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >প্রি-প্রাইমারি</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১ম</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >২য়</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৩য়</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৪র্থ</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৫ম</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৩.১ বয়সভিত্তিক শিক্ষার্থীর সংখ্যা (০১/০১/২০২১ তারিখের বয়স)
        </div>
        <div class="row border border-info py-1 mt-2 col-10">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  colspan="2">শ্রেণি</th>
                        <th  >১০ বছর</th>
                        <th  >১১ বছর</th>
                        <th  >১২ বছর</th>
                        <th  >১৩ বছর</th>
                        <th  >১৪ বছর</th>
                        <th  >১৫ বছর</th>
                        <th  >১৬ বছর</th>
                        <th  >১৭ বছর</th>
                        <th  >মোট</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >৬ষ্ঠ</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৭ম</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৮ম</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৯ম</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৪র্থ</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১০ম</td>
                        <td >মোট</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td >ছাত্রী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৩.২ অভিভাবকের পেশা অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  >ক্র. নং</th>
                        <th  >অভিভাবকের পেশা</th>
                        <th  colspan="5" >শিক্ষার্থীর সংখ্যা</th>
                    </tr>
                    <tr>
                        <th ></th>
                        <th ></th>
                        <th >৬ষ্ঠ শ্রেণি</th>
                        <th >৭ম শ্রেণি</th>
                        <th >৮ম শ্রেণি</th>
                        <th >৯ম শ্রেণি</th>
                        <th >১০ম শ্রেণি</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >১</td>
                        <td >কৃষি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >২</td>
                        <td >শ্রমিক</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১</td>
                        <td >সাঁওতাল</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৩</td>
                        <td >ব্যবসায়ী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৪</td>
                        <td >ক্ষুদ্র ব্যবসায়ী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৫</td>
                        <td >সরকারি চাকুরিজীবী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৬</td>
                        <td >বেসরকারি চাকুরিজীবী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৭</td>
                        <td >চিকিৎসক</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৮</td>
                        <td >আইনজীবী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >৯</td>
                        <td >শিক্ষকতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১০</td>
                        <td >জেলে</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১১</td>
                        <td >তাঁতী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১২</td>
                        <td >কামার/কুমার</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১৩</td>
                        <td >প্রবাসী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১৪</td>
                        <td >প্রকৌশলী</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td >১৫</td>
                        <td >অন্যান্য</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4 col-9">
            ২.৩.৩ শ্রেণি, বিভাগভিত্তিক উত্তীর্ণ ও অনুত্তীর্ণ শিক্ষার্থীর তথ্য, ডিসেম্বর ২০২০
        </div>
        <div class="row border border-info py-1 mt-2 col-10">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th  >শ্রেণি</th>
                        <th  >বিভাগ</th>
                        <th  colspan="2" >পরীক্ষার্থীর সংখ্যা</th>
                        <th  colspan="2">উত্তীর্ণ</th>
                        <th  colspan="2">অনুত্তীর্ণ</th>
                    </tr>
                    <tr>
                        <th ></th>
                        <th ></th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >১ম</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >২য়</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৩য়</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৪র্থ</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৫ম</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৬ষ্ট</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৭ম</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >৮ম</td>
                        <td ></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td  rowspan="3">৯ম</td>
                        <td >মানবিক-১</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>

                        <td >বিজ্ঞান-২</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>

                        <td >ব্যবসায় শিক্ষা-৩</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td  rowspan="3">১০ম</td>
                        <td >মানবিক-১</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >বিজ্ঞান-২</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td >ব্যবসায় শিক্ষা-৩</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-4 col-9">
            ২.৩.৪ বিষয়ভিত্তিক পাঠদানের তথ্য:
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>

                        <th  rowspan="3">বিষয়</th>
                        <th  colspan="2"   rowspan="2">শিক্ষক (বিষয় ভিত্তিক)</th>
                        <th  colspan="10">শিক্ষার্থী সংখ্যা</th>
                    </tr>
                    <tr>


                        <th  colspan="2">৬ষ্ঠ শ্রেণি</th>
                        <th  colspan="2">৭ম শ্রেণি</th>
                        <th  colspan="2">৮ম শ্রেণি</th>
                        <th  colspan="2">৯ম শ্রেণি</th>
                        <th  colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th >মোট</th>
                        <th >মহিলা</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                        <th >মোট</th>
                        <th >ছাত্রী</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td >বাংলা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ইংরেজি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >গণিত</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ইসলাম ও নৈতিক শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >হিন্দু ধর্ম ও নৈতিক শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >বেীদ্ধ ধর্ম ও নৈতিক শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >খ্রিষ্টান ধর্ম ও নৈতিক শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >বিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >সমাজ বিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >পদার্থ বিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >রসায়ন বিদ্যা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >জীব বিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >উচ্চতর গণিত</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ইতিহাস</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ভূগোল ও পরিবেশ</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >অর্থনীতি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >পৌরনীতি ও নাগরিকতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >হিসাববিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ব্যবসায় উদ্যোগ</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >তথ্য ও যোগাযোগ প্রযুক্তি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >কৃষি শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >গার্হস্থ্য বিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >চারু ও কারুকলা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >সংগীত</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >কর্ম ও জীবনমুখী শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >গ্রন্হাগার ও তথ্যবিজ্ঞান</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >বাংলাদেশ ও বিশ্ব পরিচয়</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >শারীরিক শিক্ষা ও স্বাস্থ্য</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ক্যারিয়ার শিক্ষা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ফিন্যান্স ও ব্যাংকিং</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >বাংলাদেশের ইতিহাস ও বিশ্বসভ্যতা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >পালি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >সংস্কৃতি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >ক্ষুদ্র-নৃ-গোষ্ঠির ভাষা ও সংস্কৃতি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >আরবি</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >শারীরিক শিক্ষা স্বাস্থ্য বিজ্ঞান ও খেলাধুলা</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    <tr>
                        <td >অন্যান্য</td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                        <td ><input type="number" class="form-control" name="" id="" style="width: 40px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @include('components/footer')
    </div>
@endsection
