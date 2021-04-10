@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="sncFirstPage" ng-controller="myCtrl">
        <div v-if="!dataLoaded">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        <div v-if="dataLoaded">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১</span>
                </div>
                <div class="form-control bg-number-label"> স্তরভিত্তিক শিক্ষার্থী সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    
                    <tr>
                        <td colspan="2">১ম-৫ম</td>
                        <td colspan="2">৬ষ্ঠ-১০ম</td>
                        <td colspan="2">১১শ-১২শ</td>
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
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    </tdead>
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.one_five_total" ></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.one_five_girl"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.six_ten_total"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.six_ten_girl"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.eleven_twelve_total"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.eleven_twelve_girl"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.bachelor_pass_total"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.bachelor_pass_girl"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.bachelor_honors_total"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.bachelor_honors_girl"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.masters_total"></td>
                        <td><input type="text" class="form-control" v-model="data.studentSummaryTotal.masters_girl"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="contentBox">
        <div class="input-group contentdeader">
            <div class="input-group-prepend">
                <span class="input-group-text bg-number">২.১.১</span>
            </div>
            <div class="form-control bg-number-label"> শ্রেণি ও বিভাগভিত্তিক শিক্ষার্থীর সংখ্যা ২০২১ (২০২১-২০২২ শিক্ষাবর্ষের সকল শিক্ষার্থী অর্ন্তভুক্ত হবে)
            </div>
        </div>
        <div class="contentBoxBody">
            <table class="table table-bordered table-striped text-center">
                
                <tr>
                    <td>স্তর</td>
                    <td>শ্রেণি</td>
                    <td>বিভাগ</td>
                    <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">ইংরেজি ভার্সনে অধ্যয়নরত শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                    <td>ট্রান্সফার ইন</td>
                    <td>ট্রান্সফার আউট</td>
                    <td>২০২২ এর পাঠ্য পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>-</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tdead>
                <tbody>
                <tr>
                    <td>প্রাক-প্রাথমিক</td>
                    <td>-</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td rowspan="5">প্রাথমিক</td>
                    <td>১ম</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>২য়</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>৩য়</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>৪র্থ</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>৫ম</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td rowspan="11">মাধ্যমিক</td>
                    <td>৬ষ্ঠ</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>৭ম</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>৮ম</td>
                    <td>-</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td rowspan="4">৯ম</td>
                    <td>মানবিক</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>বিজ্ঞান</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>ব্যবসায় শিক্ষা</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td>এসএসসি (ভোক)</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                </tr>
                <tr>
                    <td rowspan="4">১০ম</td>
                    <td>মানবিক</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>বিজ্ঞান</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ব্যবসায় শিক্ষা</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>এসএসসি (ভোক)</td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td><input type="number" class="form-control" name="" id="" style="widtd: 45px"></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>

            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১.২</span>
                    </div>
                    <div class="form-control bg-number-label">২০২০ ও তার পূর্বের শিক্ষার্থী ২০২১ সালে একই শ্রেণিতে
                        অধ্যয়নরত আছে এইরুপ শিক্ষার্থীর সংখ্যা (রিপিটার)
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                            <td colspan="2">৭ম শ্রেণি</td>
                            <td colspan="2">৮ম শ্রেণি</td>
                            <td colspan="2">৯ম শ্রেণি</td>
                            <td colspan="2">১০ম শ্রেণি</td>

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
                        <tbody>
                        <tr>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.six_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.six_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.seven_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.seven_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.eight_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.eight_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.nine_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.nine_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.ten_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryRepeater.ten_female"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১.৩</span>
                    </div>
                    <div class="form-control bg-number-label">২০২০ সালের ঝরেপড়া (ড্রপআউট) শিক্ষার্থীর সংখ্যা</div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">

                        <tr>
                            <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                            <td colspan="2">৭ম শ্রেণি</td>
                            <td colspan="2">৮ম শ্রেণি</td>
                            <td colspan="2">৯ম শ্রেণি</td>
                            <td colspan="2">১০ম শ্রেণি</td>

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
                        </tdead>
                        <tbody>
                        <tr>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.six_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.six_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.seven_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.seven_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.eight_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.eight_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.nine_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.nine_female"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.ten_total"></td>
                            <td><input type="text" class="form-control"
                                       v-model="data.studentSummaryDropout.ten_female"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="contentBox col-12">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১.৪</span>
                    </div>
                    <div class="form-control bg-number-label">সেকশনভিত্তিক শিক্ষার্থীর তথ্য ২০২১ (সেকশন না থাকলে পূরণ
                        করা প্রযোজ্য নয়)
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td rowspan="2">সেকশন</td>
                            <td rowspan="2">৬ষ্ঠ শ্রেণি</td>
                            <td rowspan="2">৭ম শ্রেণি</td>
                            <td rowspan="2">৮ম শ্রেণি</td>
                            <td colspan="3">৯ম শ্রেণি</td>
                            <td colspan="3">১০ম শ্রেণি</td>
                        </tr>
                        <tr>
                            <td>বিজ্ঞান</td>
                            <td>মানবিক</td>
                            <td>ব্যবসায় শিক্ষা</td>
                            <td>বিজ্ঞান</td>
                            <td>মানবিক</td>
                            <td>ব্যবসায় শিক্ষা</td>
                        </tr>
                        <tbody>
                        <tr>
                            <td></td>
                            <td><input type="text" class="form-control" v-model="item.six"></td>
                            <td><input type="text" class="form-control" v-model="item.seven"></td>
                            <td><input type="text" class="form-control" v-model="item.eight"></td>
                            <td><input type="text" class="form-control" v-model="item.nine_science"></td>
                            <td><input type="text" class="form-control" v-model="item.nine_arts"></td>
                            <td><input type="text" class="form-control" v-model="item.nine_commerce"></td>
                            <td><input type="text" class="form-control" v-model="item.ten_science"></td>
                            <td><input type="text" class="form-control" v-model="item.ten_arts"></td>
                            <td><input type="text" class="form-control" v-model="item.ten_commerce"></td>
                        </tr>
                        <tr>
                            <td>মোট সেকশন</td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>অনুমোদিত সেকশন:</td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                            <td><input type="number" class="col-10 form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১.৫</span>
                    </div>
                    <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে শ্রেণি ও বিভাগভিত্তিক
                        শিক্ষার্থীর সংখ্যা ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td rowspan="2">শ্রেণি</td>
                            <td rowspan="2" style="widtd:120px">বিভাগ</td>
                            <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">ট্রান্সফার ইন</td>
                            <td colspan="2">ট্রান্সফার আউট</td>
                            <td colspan="2">রিপিটার শিক্ষার্থী</td>
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
                            <td>মোট</td>
                            <td>ছাত্রী</td>
                        </tr>
                        <tbody>
                        <tr>
                            <td rowspan="4">একাদশ (১১)</td>
                            <td>(১) মানবিক</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(২) বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৩) ব্যবসায় শিক্ষা</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৫) অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="4">দ্বাদশ (১২)</td>
                            <td>(১) মানবিক</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(২) বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৩) ব্যবসায় শিক্ষা</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৫) অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="5">স্নাতক (পাস) ১ম বর্ষ(১৩)</td>
                            <td>(১) মানবিক</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(২) বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৩) ব্যবসায় শিক্ষা</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৪) সামাজিক বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৫) অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="5">স্নাতক (পাস) ২য় বর্ষ(১৪)</td>
                            <td>(১) মানবিক</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(২) বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৩) ব্যবসায় শিক্ষা</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৪) সামাজিক বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৫) অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="5">স্নাতক (পাস) ৩য় বর্ষ(১৫)</td>
                            <td>(১) মানবিক</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(২) বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৩) ব্যবসায় শিক্ষা</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৪) সামাজিক বিজ্ঞান</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>(৫) অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="4">স্নাতক (সম্মান)(১৬)</td>
                            <td>১ম বর্ষ (নতুন, পুরাতন সহ)</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>২য় বর্ষ (নতুন, পুরাতন সহ)</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৩য় বর্ষ (নতুন, পুরাতন সহ)</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৪র্থ বর্ষ (নতুন, পুরাতন সহ)</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="2">স্নাতকোত্তর (১৭)</td>
                            <td>প্রিলিমিনারি</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>শেষ বর্ষ</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td colspan="2">সর্বমোট:</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১.৬</span>
                    </div>
                    <div class="form-control bg-number-label">এসএসসি ভোকেশনাল এর শ্রেণিভিত্তিক শিক্ষার্থী তথ্য ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td rowspan="2">শ্রেণি</td>
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
                        <tbody>
                        <tr>
                            <td>৯ম</td>
                            <td><input type="number" class="form-control " name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control col-6" name="" id=""></td>

                        </tr>
                        <tr>
                            <td>১০ম</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control col-6" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১.৭</span>
                    </div>
                    <div class="form-control bg-number-label">এইচএসসি ভোকেশনাল এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td rowspan="2">শ্রেণি</td>
                            <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                            <td rowspan="2">ট্রান্সফার ইন</td>
                            <td rowspan="2">ট্রান্সফার আউট</td>

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
                        <tbody>
                        <tr>
                            <td>১ম বর্ষ (১১শ)</td>
                            <td><input type="number" class="form-control " name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>

                </tr>
                <tr>
                    <td>২য় বর্ষ (১২শ)</td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                    <td><input type="number" class="form-control" name="" id=""></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৮</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি বিএম এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                <tr>
                    <td rowspan="2">শ্রেণি</td>
                    <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
                    <td colspan="2">রিপিটার শিক্ষার্থীর সংখ্যা</td>
                    <td rowspan="2">ট্রান্সফার ইন</td>
                    <td rowspan="2">ট্রান্সফার আউট</td>

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
                        <tbody>
                        <tr>
                            <td>১ম বর্ষ (১১শ)</td>
                            <td><input type="number" class="form-control " name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>

                        </tr>
                        <tr>
                            <td>২য় বর্ষ (১২শ)</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১.৯</span>
                    </div>
                    <div class="form-control bg-number-label">মাধ্যমিক স্তরে বিভিন্ন ক্যাটাগরিভিত্তিক শিক্ষার্থীর তথ্য
                        ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped ">

                        <tr>
                            <td rowspan="2" class="text-center">ক্র. নং</td>
                            <td rowspan="2" class="text-center">ক্যাটাগরি (শিক্ষার্থী)</td>
                            <td colspan="2" class="text-center"> ৬ষ্ঠ শ্রেণি</td>
                            <td colspan="2" class="text-center">৭ম শ্রেণি</td>
                            <td colspan="2" class="text-center">৮ম শ্রেণি</td>
                            <td colspan="2" class="text-center">৯ম শ্রেণি</td>
                            <td colspan="2" class="text-center">১০ম শ্রেণি</td>
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
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td>কর্মজীবী শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>ভূমিহীন অভিভাবকের সন্তান</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>মুক্তিযোদ্ধা পোষ্য/ নাতি-নাতনি</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>অনাথ/ এতিম শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>প্রতিবন্ধি শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>ধর্মভিত্তিক বিভাজন</td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>মুসলিম-৭</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>হিন্দু-৮</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>খ্রিষ্টান-৯</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>বৌদ্ধ-১০</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>অন্যান্য-১১</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.২</span>
                    </div>
                    <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে বিভিন্ন ক্যাটাগরিভিত্তিক
                        শিক্ষার্থীর তথ্য ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">

                        <tr>
                            <td rowspan="2">ক্র. নং</td>
                            <td rowspan="2">ক্যাটাগরি (শিক্ষার্থী)</td>
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
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td>কর্মজীবী শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>ভূমিহীন অভিভাবকের সন্তান</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>মুক্তিযোদ্ধা পোষ্য/ নাতি-নাতনি</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>অনাথ/ এতিম শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>প্রতিবন্ধি শিক্ষার্থী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>ধর্মভিত্তিক বিভাজন</td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>মুসলিম-৭</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>হিন্দু-৮</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>খ্রিষ্টান-৯</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>বৌদ্ধ-১০</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>অন্যান্য-১১</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 60px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.২.৪</span>
                    </div>
                    <div class="form-control bg-number-label">মাধ্যমিক স্তরে বিশেষ চাহিদাসম্পন্ন শিক্ষক ও শিক্ষার্থীর
                        সংখ্যা ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>২.২.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?
                                <select v-model="data.Institutes_special_student[0].special_std_yn">
                                    <option>Select</option>
                                    <option>হ্যাঁ-১</option>
                                    <option>না-২</option>
                                </select></td>
                            <td>২.২.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?<br>
                                <input type="checkbox"
                                       v-model="data.Institutes_special_student[0].disable_facility_audio">&nbsp; অডিও-১
                                &nbsp;
                                <input type="checkbox"
                                       v-model="data.Institutes_special_student[0].disable_facility_braille">&nbsp;
                                ব্রেইল-২ &nbsp;
                                <input type="checkbox"
                                       v-model="data.Institutes_special_student[0].disable_facility_signlan"> &nbsp;সাইন
                                ভাষা-৩ &nbsp;
                                <input type="checkbox"
                                       v-model="data.Institutes_special_student[0].disable_facility_others"> &nbsp;অন্যান্য-৪
                            </td>
                            <td>২.২.৩ বিল্ডিং এ Ramp এর ব্যবস্থা আছে কি?
                                <select v-model="data.Institutes_special_student[0].ramp_access_yn">
                                    <option>Select</option>
                                    <option>হ্যাঁ-১</option>
                                    <option>না-২</option>
                                </select></td>
                        </tr>
                    </table>
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td rowspan="2">ক্র. নং</td>
                            <td rowspan="2">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                            <td colspan="2">শিক্ষক</td>
                            <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                            <td colspan="2">৭ম শ্রেণি</td>
                            <td colspan="2">৮ম শ্রেণি</td>
                            <td colspan="2">৯ম শ্রেণি</td>
                            <td colspan="2">১০ম শ্রেণি</td>
                        </tr>
                        <tr>
                            <td>মোট</td>
                            <td>মহিলা</td>
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
                            <td>১</td>
                            <td>অটিস্টিক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>শারীরিক প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>দীর্ঘস্থায়ী মানসিক অসুস্থতাজনিত প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>দৃষ্টি প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>বাক প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>বুদ্ধি প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৭</td>
                            <td>শ্রবণ প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>৮</td>
                            <td>শ্রবণ-দৃষ্টি প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৯</td>
                            <td>সেরিব্রালপালসি</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>১০</td>
                            <td>বহুমাত্রিক প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>১১</td>
                            <td>ডাউন সিনড্রম</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>১২</td>
                            <td>অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td></td>
                            <td>তৃতীয় লিঙ্গ</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.২.৫</span>
                    </div>
                    <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে বিশেষ চাহিদাসম্পন্ন শিক্ষক
                        ও শিক্ষার্থীর সংখ্যা ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td rowspan="2">ক্র. নং</td>
                            <td rowspan="2">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
                            <td colspan="2">শিক্ষক</td>
                            <td colspan="2">একাদশ শ্রেণি</td>
                            <td colspan="2">দ্বাদশ শ্রেণি</td>
                            <td colspan="2">ডিগ্রি ১ম বর্ষ</td>
                            <td colspan="2">ডিগ্রি ২য় বর্ষ</td>
                            <td colspan="2">ডিগ্রি ৩য় বর্ষ</td>
                            <td colspan="2">স্নাতক (সম্মান)</td>
                            <td colspan="2">স্নাতকোত্তর</td>
                        </tr>
                        <tr>
                            <td>মোট</td>
                            <td>মহিলা</td>
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
                            <td>মোট</td>
                            <td>ছাত্রী</td>
                        </tr>
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td>অটিস্টিক</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>শারীরিক প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>দীর্ঘস্থায়ী মানসিক অসুস্থতাজনিত প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>দৃষ্টি প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>বাক প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>বুদ্ধি প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৭</td>
                            <td>শ্রবণ প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>৮</td>
                            <td>শ্রবণ-দৃষ্টি প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৯</td>
                            <td>সেরিব্রালপালসি</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>১০</td>
                            <td>বহুমাত্রিক প্রতিবন্ধিতা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>১১</td>
                            <td>ডাউন সিনড্রম</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>১২</td>
                            <td>অন্যান্য</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td></td>
                            <td>তৃতীয় লিঙ্গ</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.২.৬</span>
                    </div>
                    <div class="form-control bg-number-label">মাধ্যমিক স্তরে ক্ষুদ্র নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও
                        শিক্ষার্থীর সংখ্যা ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">

                        <tr>
                            <td>ক্র. নং</td>
                            <td>ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
                            <td colspan="2">শিক্ষক</td>
                            <td colspan="2">৬ষ্ঠ শ্রেণি</td>
                            <td colspan="2">৭ম শ্রেণি</td>
                            <td colspan="2">৮ম শ্রেণি</td>
                            <td colspan="2">৯ম শ্রেণি</td>
                            <td colspan="2">১০ম শ্রেণি</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>মোট</td>
                            <td>মহিলা</td>
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
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td>সাঁওতাল</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>চাকমা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>গারো</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>হাজং</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>চাক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>কুকি</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৭</td>
                            <td>খেয়া</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>৮</td>
                            <td>বোম/বম</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৯</td>
                            <td>মারমা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>১০</td>
                            <td>ত্রিপুরা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>১১</td>
                            <td>খাসিয়া</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>১২</td>
                            <td>মনিপুরি</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>

                        <tr>
                            <td>১৩</td>
                            <td>অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.২.৭</span>
                    </div>
                    <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে ক্ষুদ্র নৃ-গোষ্ঠীর ধরন
                        অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা ২০২১
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td rowspan="2">ক্র. নং</td>
                            <td rowspan="2">ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
                            <td colspan="2">শিক্ষক</td>
                            <td colspan="2">একাদশ শ্রেণি</td>
                            <td colspan="2">দ্বাদশ শ্রেণি</td>
                            <td colspan="2">ডিগ্রি ১ম বর্ষ</td>
                            <td colspan="2">ডিগ্রি ২য় বর্ষ</td>
                            <td colspan="2">ডিগ্রি ৩য় বর্ষ</td>
                            <td colspan="2">স্নাতক (সম্মান)</td>
                            <td colspan="2">স্নাতকোত্তর</td>
                        </tr>
                        <tr>
                            <td>মোট</td>
                            <td>মহিলা</td>
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
                            <td>মোট</td>
                            <td>ছাত্রী</td>
                        </tr>
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td>সাঁওতাল</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>চাকমা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>গারো</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>হাজং</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>চাক</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>কুকি</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৭</td>
                            <td>খেয়া</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>৮</td>
                            <td>বোম/বম</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৯</td>
                            <td>মারমা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>১০</td>
                            <td>ত্রিপুরা</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>১১</td>
                            <td>খাসিয়া</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>১২</td>
                            <td>মনিপুরি</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>

                        <tr>
                            <td>১৩</td>
                            <td>অন্যান্য</td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                            <td><input type="number" class="form-control col-12" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.৩</span>
                    </div>
                    <div class="form-control bg-number-label">মাধ্যমিক স্তরে বয়সভিত্তিক শিক্ষার্থীর সংখ্যা (০১/০১/২০২১
                        তারিখে বয়স)
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td colspan="2">শ্রেণি</td>
                            <td>১০ বছর</td>
                            <td>১১ বছর</td>
                            <td>১২ বছর</td>
                            <td>১৩ বছর</td>
                            <td>১৪ বছর</td>
                            <td>১৫ বছর</td>
                            <td>১৬ বছর</td>
                            <td>১৭ বছর</td>
                            <td>মোট</td>
                        </tr>
                        </tdead>
                        <tbody>
                        <tr>
                            <td rowspan="2">৬ষ্ঠ</td>
                            <td>মোট</td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td rowspan="2">৭ম</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td rowspan="2">৮ম</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td rowspan="2">৯ম</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td rowspan="2">১০ম</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.৩.১</span>
                    </div>
                    <div class="form-control bg-number-label">উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে বয়সভিত্তিক শিক্ষার্থীর
                        সংখ্যা (০১/০১/২০২১তারিখে বয়স)
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">

                        <tr>
                            <td colspan="2" style="widtd:250px">শ্রেণি</td>
                            <td>১৪ বছর</td>
                            <td>১৫ বছর</td>
                            <td>১৬ বছর</td>
                            <td>১৭ বছর</td>
                            <td>১৮ বছর</td>
                            <td>১৯ বছর</td>
                            <td>২০ বছর</td>
                            <td>২১ বছর</td>
                            <td>২২ বছর</td>
                            <td>২৩ বছর</td>
                            <td>২৪ বছর</td>
                            <td>২৫ বছর</td>
                            <td>মোট</td>
                        </tr>
                        </tdead>
                        <tbody>
                        <tr>
                            <td rowspan="2">একাদশ</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>

                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="2">দ্বাদশ</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="2">স্নাতক (পাস)</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="2">স্নাতক (সম্মান)</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="2">স্নাতকোত্তর</td>
                            <td>মোট</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>ছাত্রী</td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                            <td><input type="number" class="form-control" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox col-8">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.৩.২</span>
                    </div>
                    <div class="form-control bg-number-label">অভিভাবকের পেশা অনুযায়ী মাধ্যমিক স্তরে শিক্ষার্থী সংখ্যা
                        (৬ষ্ঠ-১০ম):
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped">

                        <tr>
                            <td rowspan="2">ক্র. নং</td>
                            <td rowspan="2">অভিভাবকের পেশা</td>
                            <td colspan="5">শিক্ষার্থীর সংখ্যা</td>
                        </tr>
                        <tr>

                            <td>৬ষ্ঠ শ্রেণি</td>
                            <td>৭ম শ্রেণি</td>
                            <td>৮ম শ্রেণি</td>
                            <td>৯ম শ্রেণি</td>
                            <td>১০ম শ্রেণি</td>
                        </tr>
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td>কৃষি</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>কৃষি শ্রমিক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>অকৃষি শ্রমিক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>ব্যবসায়ী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>ক্ষুদ্র ব্যবসায়ী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>সরকারি চাকুরিজীবী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৭</td>
                            <td>বেসরকারি চাকুরিজীবী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৮</td>
                            <td>চিকিৎসক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৯</td>
                            <td>আইনজীবী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১০</td>
                            <td>শিক্ষকতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১১</td>
                            <td>জেলে</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১২</td>
                            <td>তাঁতী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৩</td>
                            <td>কামার/কুমার</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৪</td>
                            <td>প্রবাসী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৫</td>
                            <td>প্রকৌশলী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৬</td>
                            <td>অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox col-8">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.৩.৩</span>
                    </div>
                    <div class="form-control bg-number-label">অভিভাবকের পেশা অনুযায়ী উচ্চ মাধ্যমিক ও তদুর্ধ্ব স্তরে
                        শিক্ষার্থীর সংখ্যা:
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped">

                        <tr>
                            <td rowspan="2">ক্র. নং</td>
                            <td rowspan="2">অভিভাবকের পেশা</td>
                            <td colspan="5">শিক্ষার্থীর সংখ্যা</td>
                        </tr>
                        <tr>

                            <td>১১শ শ্রেণি</td>
                            <td>১২শ শ্রেণি</td>
                            <td>স্নাতক (পাস)</td>
                            <td>স্নাতক (সম্মান)</td>
                            <td>স্নাতকোত্তর</td>
                        </tr>
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১</td>
                            <td>কৃষি</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td>কৃষি শ্রমিক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৩</td>
                            <td>অকৃষি শ্রমিক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৪</td>
                            <td>ব্যবসায়ী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৫</td>
                            <td>ক্ষুদ্র ব্যবসায়ী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৬</td>
                            <td>সরকারি চাকুরিজীবী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৭</td>
                            <td>বেসরকারি চাকুরিজীবী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৮</td>
                            <td>চিকিৎসক</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>৯</td>
                            <td>আইনজীবী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১০</td>
                            <td>শিক্ষকতা</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১১</td>
                            <td>জেলে</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১২</td>
                            <td>তাঁতী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৩</td>
                            <td>কামার/কুমার</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৪</td>
                            <td>প্রবাসী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৫</td>
                            <td>প্রকৌশলী</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        <tr>
                            <td>১৬</td>
                            <td>অন্যান্য</td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                            <td><input type="number" class="form-control" name="" id="" style="widtd: 50px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="contentBox col-9">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.৩.৪</span>
                    </div>
                    <div class="form-control bg-number-label">মাধ্যমিক স্তরে শ্রেণি, বিভাগভিত্তিক শিক্ষার্থী, উত্তীর্ণ ও
                        অনুত্তীর্ণ সম্পর্কিত তথ্য, ডিসেম্বর ২০২০ (বার্ষিক পরীক্ষার ফলাফল)
                    </div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-bordered table-striped text-center">

                        <tr>
                            <td rowspan="2">শ্রেণি</td>
                            <td rowspan="2">বিভাগ</td>
                            <td colspan="2">মোট শিক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">পরীক্ষার্থীর সংখ্যা</td>
                            <td colspan="2">উত্তীর্ণ</td>
                            <td colspan="2">অনুত্তীর্ণ</td>
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
                        </tdead>
                        <tbody>
                        <tr>
                            <td>১ম</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>২য়</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৩য়</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৪র্থ</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৫ম</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৬ষ্ট</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৭ম</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>৮ম</td>
                            <td></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="3">৯ম</td>
                            <td>মানবিক-১</td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>

                            <td>বিজ্ঞান-২</td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>

                            <td>ব্যবসায় শিক্ষা-৩</td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td rowspan="3">১০ম</td>
                            <td>মানবিক-১</td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>বিজ্ঞান-২</td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>ব্যবসায় শিক্ষা-৩</td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                            <td><input type="number" class="form-control col-10" name="" id=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div v-show="dataLoadingError">
            <span class="d-flex justify-content-center btn-warning">Error in Fetching Data, Please contact System Administrator!</span>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/sncFirstPage.js') }}" type="module" defer></script>
@stop
