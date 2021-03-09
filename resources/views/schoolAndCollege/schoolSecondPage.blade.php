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

        <div class="row mt-4 col-9">
            ২.২.৫ ক্ষুদ্র-নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" >ক্র. নং</th>
                        <th scope="col" >ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</th>
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
                        <td scope="row">সাঁওতাল</td>
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
                        <td scope="row">চাকমা</td>
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
                        <td scope="row">গারো</td>
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
                        <td scope="row">হাজং</td>
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
                        <td scope="row">চাক</td>
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
                        <td scope="row">কুকি</td>
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
                        <td scope="row">খেয়া</td>
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
                        <td scope="row">বোম/বম</td>
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
                        <td scope="row">মারমা</td>
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
                        <td scope="row">ত্রিপুরা</td>
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
                        <td scope="row">খাসিয়া</td>
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
                        <td scope="row">মনিপুরি</td>
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
                        <td scope="row">১৩</td>
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
                        <th scope="col" colspan="2">শ্রেণি</th>
                        <th scope="col" >৫ বছর</th>
                        <th scope="col" >৬ বছর</th>
                        <th scope="col" >৭ বছর</th>
                        <th scope="col" >৮ বছর</th>
                        <th scope="col" >৯ বছর</th>
                        <th scope="col" >৯ বছরের উপরে</th>
                        <th scope="col" >মোট</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">প্রি-প্রাইমারি</td>
                        <td scope="row">মোট</td>
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
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১ম</td>
                        <td scope="row">মোট</td>
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
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">২য়</td>
                        <td scope="row">মোট</td>
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
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৩য়</td>
                        <td scope="row">মোট</td>
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
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৪র্থ</td>
                        <td scope="row">মোট</td>
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
                        <td scope="row">ছাত্রী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৫ম</td>
                        <td scope="row">মোট</td>
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
                        <td scope="row">ছাত্রী</td>
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
        <div class="row mt-4 col-9">
            ২.৩.১ বয়সভিত্তিক শিক্ষার্থীর সংখ্যা (০১/০১/২০২১ তারিখের বয়স)
        </div>
        <div class="row border border-info py-1 mt-2 col-10">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" colspan="2">শ্রেণি</th>
                        <th scope="col" >১০ বছর</th>
                        <th scope="col" >১১ বছর</th>
                        <th scope="col" >১২ বছর</th>
                        <th scope="col" >১৩ বছর</th>
                        <th scope="col" >১৪ বছর</th>
                        <th scope="col" >১৫ বছর</th>
                        <th scope="col" >১৬ বছর</th>
                        <th scope="col" >১৭ বছর</th>
                        <th scope="col" >মোট</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">৬ষ্ঠ</td>
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
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">ছাত্রী</td>
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
                        <td scope="row">৭ম</td>
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
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">ছাত্রী</td>
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
                        <td scope="row">৮ম</td>
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
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">ছাত্রী</td>
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
                        <td scope="row">৯ম</td>
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
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">ছাত্রী</td>
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
                        <td scope="row">৪র্থ</td>
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
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">ছাত্রী</td>
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
                        <td scope="row">১০ম</td>
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
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td scope="row">ছাত্রী</td>
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
        <div class="row mt-4 col-9">
            ২.৩.২ অভিভাবকের পেশা অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২১
        </div>
        <div class="row border border-info py-1 mt-2 col-8">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" >ক্র. নং</th>
                        <th scope="col" >অভিভাবকের পেশা</th>
                        <th scope="col" colspan="5" >শিক্ষার্থীর সংখ্যা</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">৬ষ্ঠ শ্রেণি</th>
                        <th scope="col">৭ম শ্রেণি</th>
                        <th scope="col">৮ম শ্রেণি</th>
                        <th scope="col">৯ম শ্রেণি</th>
                        <th scope="col">১০ম শ্রেণি</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">১</td>
                        <td scope="row">কৃষি</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">২</td>
                        <td scope="row">শ্রমিক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১</td>
                        <td scope="row">সাঁওতাল</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৩</td>
                        <td scope="row">ব্যবসায়ী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৪</td>
                        <td scope="row">ক্ষুদ্র ব্যবসায়ী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৫</td>
                        <td scope="row">সরকারি চাকুরিজীবী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৬</td>
                        <td scope="row">বেসরকারি চাকুরিজীবী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৭</td>
                        <td scope="row">চিকিৎসক</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৮</td>
                        <td scope="row">আইনজীবী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৯</td>
                        <td scope="row">শিক্ষকতা</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১০</td>
                        <td scope="row">জেলে</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১১</td>
                        <td scope="row">তাঁতী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১২</td>
                        <td scope="row">কামার/কুমার</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১৩</td>
                        <td scope="row">প্রবাসী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১৪</td>
                        <td scope="row">প্রকৌশলী</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td scope="row">১৫</td>
                        <td scope="row">অন্যান্য</td>
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

        <div class="row mt-4 col-9">
            ২.৩.৩ শ্রেণি, বিভাগভিত্তিক উত্তীর্ণ ও অনুত্তীর্ণ শিক্ষার্থীর তথ্য, ডিসেম্বর ২০২০
        </div>
        <div class="row border border-info py-1 mt-2 col-10">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>
                        <th scope="col" >শ্রেণি</th>
                        <th scope="col" >বিভাগ</th>
                        <th scope="col" colspan="2" >পরীক্ষার্থীর সংখ্যা</th>
                        <th scope="col" colspan="2">উত্তীর্ণ</th>
                        <th scope="col" colspan="2">অনুত্তীর্ণ</th>
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
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">১ম</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">২য়</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৩য়</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৪র্থ</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৫ম</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৬ষ্ট</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৭ম</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">৮ম</td>
                        <td scope="row"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="3">৯ম</td>
                        <td scope="row">মানবিক-১</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>

                        <td scope="row">বিজ্ঞান-২</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>

                        <td scope="row">ব্যবসায় শিক্ষা-৩</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row" rowspan="3">১০ম</td>
                        <td scope="row">মানবিক-১</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">বিজ্ঞান-২</td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                        <td scope="row"><input type="number" class="form-control" name="" id="" style="width: 60px"></td>
                    </tr>
                    <tr>
                        <td scope="row">ব্যবসায় শিক্ষা-৩</td>
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
            ২.৩.৪ বিষয়ভিত্তিক পাঠদানের তথ্য:
        </div>
        <div class="row border border-info py-1 mt-2 col-12">
            <div class="col">
                <table class="table table-bordered" style="text-align:center">
                    <thead>
                    <tr>

                        <th scope="col" rowspan="3">বিষয়</th>
                        <th scope="col" colspan="2"   rowspan="2">শিক্ষক (বিষয় ভিত্তিক)</th>
                        <th scope="col" colspan="10">শিক্ষার্থী সংখ্যা</th>
                    </tr>
                    <tr>


                        <th scope="col" colspan="2">৬ষ্ঠ শ্রেণি</th>
                        <th scope="col" colspan="2">৭ম শ্রেণি</th>
                        <th scope="col" colspan="2">৮ম শ্রেণি</th>
                        <th scope="col" colspan="2">৯ম শ্রেণি</th>
                        <th scope="col" colspan="2">১০ম শ্রেণি</th>
                    </tr>
                    <tr>
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
                        <td scope="row">বাংলা</td>
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
                        <td scope="row">ইংরেজি</td>
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
                        <td scope="row">গণিত</td>
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
                        <td scope="row">ইসলাম ও নৈতিক শিক্ষা</td>
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
                        <td scope="row">হিন্দু ধর্ম ও নৈতিক শিক্ষা</td>
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
                        <td scope="row">বেীদ্ধ ধর্ম ও নৈতিক শিক্ষা</td>
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
                        <td scope="row">খ্রিষ্টান ধর্ম ও নৈতিক শিক্ষা</td>
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
                    </tr>
                    <tr>
                        <td scope="row">সমাজ বিজ্ঞান</td>
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
                        <td scope="row">পদার্থ বিজ্ঞান</td>
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
                        <td scope="row">রসায়ন বিদ্যা</td>
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
                        <td scope="row">জীব বিজ্ঞান</td>
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
                        <td scope="row">উচ্চতর গণিত</td>
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
                        <td scope="row">ইতিহাস</td>
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
                        <td scope="row">ভূগোল ও পরিবেশ</td>
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
                        <td scope="row">অর্থনীতি</td>
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
                        <td scope="row">পৌরনীতি ও নাগরিকতা</td>
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
                        <td scope="row">হিসাববিজ্ঞান</td>
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
                        <td scope="row">ব্যবসায় উদ্যোগ</td>
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
                        <td scope="row">তথ্য ও যোগাযোগ প্রযুক্তি</td>
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
                        <td scope="row">কৃষি শিক্ষা</td>
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
                        <td scope="row">গার্হস্থ্য বিজ্ঞান</td>
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
                        <td scope="row">চারু ও কারুকলা</td>
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
                        <td scope="row">সংগীত</td>
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
                        <td scope="row">কর্ম ও জীবনমুখী শিক্ষা</td>
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
                        <td scope="row">গ্রন্হাগার ও তথ্যবিজ্ঞান</td>
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
                        <td scope="row">বাংলাদেশ ও বিশ্ব পরিচয়</td>
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
                        <td scope="row">শারীরিক শিক্ষা ও স্বাস্থ্য</td>
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
                        <td scope="row">ক্যারিয়ার শিক্ষা</td>
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
                        <td scope="row">ফিন্যান্স ও ব্যাংকিং</td>
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
                        <td scope="row">বাংলাদেশের ইতিহাস ও বিশ্বসভ্যতা</td>
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
                        <td scope="row">পালি</td>
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
                        <td scope="row">সংস্কৃতি</td>
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
                        <td scope="row">ক্ষুদ্র-নৃ-গোষ্ঠির ভাষা ও সংস্কৃতি</td>
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
                        <td scope="row">আরবি</td>
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
                        <td scope="row">শারীরিক শিক্ষা স্বাস্থ্য বিজ্ঞান ও খেলাধুলা</td>
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
                        <td scope="row">অন্যান্য</td>
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
        @include('components/footer')
    </div>
@endsection
