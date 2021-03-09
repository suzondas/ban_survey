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
                            <th scope="col" colspan="2">১ম-৫ম</th>
                            <th scope="col" colspan="2">৬ষ্ঠ-১০ম</th>
                            <th scope="col" colspan="2">ভোকেশনাল</th>
                        </tr>
                        <tr>
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
                            <td scope="row"><input type="text" class="form-control" name="" id=""></td>
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
        </div>
        <div class="row mt-2">
            ২.১.১ শ্রেণি, বিভাগভিত্তিক শিক্ষার্থী, ট্রান্সফার ইন, ট্রান্সফার আউট, পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২০
        </div>
        <div class="row border border-info  py-1 mt-2 ">
            <div class="col">
                <table class="table table-bordered  " style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col">স্তর</th>
                        <th scope="col">শ্রেণি</th>
                        <th scope="col">বিভাগ</th>
                        <th scope="col" colspan="2">শিক্ষার্থীর সংখ্যা</th>
                        <th scope="col" colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</th>
                        <th scope="col" colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</th>
                        <th scope="col" colspan="2">ইংরেজি ভার্সনে অধ্যয়নরত শিক্ষার্থীর সংখ্যা</th>
                        <th scope="col" colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</th>
                        <th scope="col">ট্রান্সফার ইন</th>
                        <th scope="col">ট্রান্সফার আউট</th>
                        <th scope="col">২০২২ এর পাঠ্য পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">-</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">প্রাক-প্রাথমিক</td>
                        <td scope="row">-</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="5">প্রাথমিক</td>
                        <td scope="row">১ম</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">২য়</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৩য়</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৪র্থ</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৫ম</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="11">মাধ্যমিক</td>
                        <td scope="row">৬ষ্ঠ</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৭ম</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৮ম</td>
                        <td scope="row">-</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="4" >৯ম</td>
                        <td scope="row">মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">ব্যবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">এসএসসি (ভোক)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="4" >১০ম</td>
                        <td scope="row">মানবিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">বিজ্ঞান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">ব্যবসায় শিক্ষা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                    </tr>
                    <tr>
                        <td scope="row">এসএসসি (ভোক)</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 45px"></td>
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
                            <th scope="col" colspan="2">৬ষ্ঠ শ্রেণি</th>
                            <th scope="col" colspan="2">৭ম শ্রেণি</th>
                            <th scope="col" colspan="2">৮ম শ্রেণি</th>
                            <th scope="col" colspan="2">৯ম শ্রেণি</th>
                            <th scope="col" colspan="2">১০ শ্রেণি</th>
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
                            <th scope="col">মোট</th>
                            <th scope="col">ছাত্রী</th>
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
                            <td scope="row"><input type="number" class="form-control" name="" id=""></td>
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
                        <th scope="col" colspan="2">৬ষ্ঠ শ্রেণি</th>
                        <th scope="col" colspan="2">৭ম শ্রেণি</th>
                        <th scope="col" colspan="2">৮ম শ্রেণি</th>
                        <th scope="col" colspan="2">৯ম শ্রেণি</th>
                        <th scope="col" colspan="2">১০ শ্রেণি</th>
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
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
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
                        <td scope="row"><input type="number" class="form-control" name="" id=""></td>
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
                        <th scope="col" >সেকশন</th>
                        <th scope="col" >৬ষ্ঠ শ্রেণি</th>
                        <th scope="col" >৭ম শ্রেণি</th>
                        <th scope="col" >৮ম শ্রেণি</th>
                        <th scope="col" colspan="3">৯ম শ্রেণি</th>
                        <th scope="col" colspan="3">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">বিজ্ঞান</th>
                        <th scope="col">মানবিক</th>
                        <th scope="col">মানবিক</th>
                        <th scope="col">বিজ্ঞান</th>
                        <th scope="col">মানবিক</th>
                        <th scope="col">মানবিক</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">ক</td>
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
                        <td scope="row">খ</td>
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
                        <td scope="row">গ</td>
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
                        <td scope="row">ঘ</td>
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
                        <td scope="row">ঙ</td>
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
                        <td scope="row">চ</td>
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
                        <td scope="row">ছ</td>
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
                        <td scope="row">মোট সেকশন</td>
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
                        <td scope="row">অনুমোদিত সেকশন:</td>
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

        <div class="row mt-4 col-9">
            ২.২ স্তর ও ক্যাটাগরিভিত্তিক শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" >ক্র. নং</th>
                        <th scope="col" >ক্যাটাগরি (শিক্ষার্থী)</th>
                        <th scope="col" colspan="2" >৬ষ্ঠ শ্রেণি</th>
                        <th scope="col" colspan="2">৭ম শ্রেণি</th>
                        <th scope="col" colspan="2">৮ম শ্রেণি</th>
                        <th scope="col" colspan="2">৯ম শ্রেণি</th>
                        <th scope="col" colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
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
                        <td scope="row">২</td>
                        <td scope="row">কর্মজীবী শিক্ষার্থী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৩</td>
                        <td scope="row">ভূমিহীন অভিভাবকের সন্তান</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৪</td>
                        <td scope="row">মুক্তিযোদ্ধা পোষ্য/ নাতি-নাতনি</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৫</td>
                        <td scope="row">ক্ষুদ্রনৃ-গোষ্ঠী শিক্ষার্থী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">ধর্মভিত্তিক বিভাজন</td>

                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">মুসলিম-৭</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">হিন্দু-৮</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">খ্রিষ্টান-৯</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">বৌদ্ধ-১০</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">অন্যান্য-১১</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
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
        <div class="row mt-4 col-9">
            ২.২.৪ বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীরধরন অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" >ক্র. নং</th>
                        <th scope="col" >বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</th>
                        <th scope="col" colspan="2" >শিক্ষক</th>
                        <th scope="col" colspan="2">৬ষ্ঠ শ্রেণি</th>
                        <th scope="col" colspan="2">৭ম শ্রেণি</th>
                        <th scope="col" colspan="2">৮ম শ্রেণি</th>
                        <th scope="col" colspan="2">৯ম শ্রেণি</th>
                        <th scope="col" colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">মোট</th>
                        <th scope="col">মহিলা</th>
                        <th scope="col">মোট</th>
                        <th scope="col">ছাত্রী</th>
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
        @include('components/footer')
    </div>
@endsection
