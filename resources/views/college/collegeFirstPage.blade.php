@extends('components.template')
@section('content')
    <div class="container-fluid" id="collegeFirstPage">
        <h3 align="center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox col-8 ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১</span>
                </div>
                <div class="form-control bg-number-label">স্তরভিত্তিক শিক্ষার্থী সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td colspan="2">১১শ-১২শ</td>
                        <td colspan="2">স্নাতক (পাস)</td>
                        <td colspan="2">স্নাতক (সম্মান)</td>
                        <td colspan="2">স্নাতকোত্তর</td>
                    </tr>
                    <tbody>
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
                    <tr>
                        <td><input type="number" class="form-control w-50" name=""
                                   v-model="data.Student_summary_total[0].eleven_twelve_total"></td>
                        <td><input type="number" class="form-control w-50" name=""
                             v-model="data.Student_summary_total[0].eleven_twelve_girl"></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   v-model="data.Student_summary_total[0].bachelor_pass_total"></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   v-model="data.Student_summary_total[0].bachelor_pass_girl"></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   v-model="data.Student_summary_total[0].bachelor_honors_total"></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   v-model="data.Student_summary_total[0].bachelor_honors_girl"></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   v-model="data.Student_summary_total[0].masters_total"></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   v-model="data.Student_summary_total[0].masters_girl"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.১</span>
                </div>
                <div class="form-control bg-number-label">শ্রেণি, বিভাগভিত্তিক শিক্ষার্থী, ট্রান্সফার ইন, ট্রান্সফার
                    আউট, পুস্তকের চাহিদা অনুযায়ী শিক্ষার্থীর সংখ্যা ২০২০
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">শ্রেণি</td>
                        <td rowspan="2" style="width:120px">বিভাগ</td>
                        <td rowspan="2">আসন সংখ্যা</td>
                        <td colspan="2">শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">উপবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">মেধাবৃত্তি প্রাপ্ত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">ইংরেজি ভার্সনে অধ্যয়নরত শিক্ষার্থীর সংখ্যা</td>
                        <td colspan="2">তথ্য প্রদানের দিন উপস্থিত শিক্ষার্থীর সংখ্যা</td>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.২</span>
                </div>
                <div class="form-control bg-number-label">রিপিটার ও ড্রপআউট</div>
            </div>
            <div class="col-md-6 contentBoxBody">
                <label class="label-text" for="">২.১.২ রিপিটার সংক্রান্ত: ২০২০ সালের শিক্ষার্থী ২০২১ সালে একই
                    শ্রেণিতে অধ্যয়নরত আছে এইরুপ শিক্ষার্থীর সংখ্যা (রিপিটার)</label>
                <table class="table table-bordered table-striped text-center">
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
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 contentBoxBody">
                <label class="label-text" for="">২.১.৩ ২০২০ সালের ঝরেপড়া শিক্ষার্থীর সংখ্যা (ড্রপআউট)</label>
                <table class="table table-bordered table-striped mt-4 text-center">
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
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৪</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি ভোকেশনাল এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
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
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>২য় বর্ষ (১২শ)</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৫</span>
                </div>
                <div class="form-control bg-number-label">এইচএসসি বিএম এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
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
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>২য় বর্ষ (১২শ)</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৬ </span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন ফিশারিজ এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
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
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>২য় পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৩য় পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৪র্থ পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৫ম পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৬ষ্ঠ পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৭ম পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৮ম পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.১.৭ </span>
                </div>
                <div class="form-control bg-number-label">ডিপ্লোমা ইন কৃষি এর বর্ষভিত্তিক শিক্ষার্থী তথ্য ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
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
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>২য় পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৩য় পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৪র্থ পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৫ম পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৬ষ্ঠ পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৭ম পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৮ম পর্ব</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control w-50" name=""
                                   id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২</span>
                </div>
                <div class="form-control bg-number-label">বিভিন্ন ক্যাটাগরিভিত্তিক শিক্ষার্থীর সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tbody>
                    <tr>
                        <td rowspan="2">ক্র.নং</td>
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
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>২</td>
                        <td>ভূমিহীন অভিভাবকের সন্তান</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৩</td>
                        <td>মুক্তিযোদ্ধ পোষ্য/নাতি-নাতনি</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৪</td>
                        <td>ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থী</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৫</td>
                        <td>অনাথ/এতিম শিক্ষার্থী</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td>৬</td>
                        <td>প্রতিবন্ধি শিক্ষার্থী</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ধর্মভিত্তিক বিভাজন</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>মুসলিম-৭</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>হিন্দু-৮</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>খ্রিষ্টান-৯</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>বৌদ্ধ-১০</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>অন্যান্য-১১</td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                        <td><input type="number" class="form-control" name=""
                                   id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৪</span>
                </div>
                <div class="form-control bg-number-label">বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীর ধরন অনুযায়ী শিক্ষক ও
                    শিক্ষার্থীর সংখ্যা ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>২.২.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?
                            <select class="">
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select></td>
                        <td>২.২.১ প্রতিষ্ঠানে বিশেষ চাহিদাসম্পন্ন শিক্ষার্থী আছে কি?<br>
                            <input type="checkbox">&nbsp; অডিও-১ &nbsp;
                            <input type="checkbox">&nbsp; ব্রেইল-২ &nbsp;
                            <input type="checkbox"> &nbsp;সাইন ভাষা-৩ &nbsp;
                            <input type="checkbox"> &nbsp;অন্যান্য-৪
                        </td>
                        <td>২.২.৩ বিল্ডিং এ Ramp এর ব্যবস্থা আছে কি?
                            <select class="">
                                <option>হ্যাঁ-১</option>
                                <option>না-২</option>
                            </select></td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td>ক্র. নং</td>
                        <td>বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর ধরন</td>
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
                    <tbody>
                    <tr>
                        <td>১</td>
                        <td>অটিস্টিক</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>২</td>
                        <td>শারীরিক প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>৩</td>
                        <td>দীর্ঘস্থায়ী মানসিক অসুস্থতাজনিত প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>৪</td>
                        <td>দৃষ্টি প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>৫</td>
                        <td>বাক প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>৬</td>
                        <td>বুদ্ধি প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>৭</td>
                        <td>শ্রবণ প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td>৮</td>
                        <td>শ্রবণ-দৃষ্টি প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td>৯</td>
                        <td>সেরিব্রালপালসি</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td>১০</td>
                        <td>বহুমাত্রিক প্রতিবন্ধিতা</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td>১১</td>
                        <td>ডাউন সিনড্রম</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td>১২</td>
                        <td>অন্যান্য</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>মোট</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                        <td>তৃতীয় লিঙ্গ</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.২.৫</span>
                </div>
                <div class="form-control bg-number-label">ক্ষুদ্র-নৃ-গোষ্ঠীর ধরন অনুযায়ী শিক্ষক ও শিক্ষার্থীর সংখ্যা
                    ২০২১
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">ক্র. নং</td>
                        <td rowspan="2">ক্ষুদ্র নৃ-গোষ্ঠীর ধরন</td>
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
                        <td>সাঁওতাল</td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                        <td><input type="number" class="form-control" name="" id="" style="width: 50px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩</span>
                </div>
                <div class="form-control bg-number-label">উচ্চ মাধ্যমিক- সর্বোচ্চ স্তরে বয়সভিত্তিক শিক্ষার্থীর সংখ্যা
                    (০১/০১/২০২১)
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th colspan="2" style="width:250px">শ্রেণি</th>
                        <th>১৫ বছরের নীচে</th>
                        <th>১৬ বছর</th>
                        <th>১৭ বছর</th>
                        <th>১৮ বছর</th>
                        <th>১৯ বছর</th>
                        <th>২০ বছরের উপরে</th>
                        <th>২১ বছরের উপরে</th>
                        <th>মোট</th>
                    </tr>
                    </thead>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৩.১</span>
                </div>
                <div class="form-control bg-number-label">অভিভাবকের পেশা অনুযায়ী শিক্ষার্থী সংখ্যা ২০২১</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="3" style="width: 75px">ক্র. নং</td>
                        <td rowspan="3">অভিভাবকের পেশা</td>
                        <td colspan="4">শিক্ষার্থীর সংখ্যা</td>
                    </tr>
                    <tr>
                        <td>উচ্চ মাধ্যমিক</td>
                        <td>স্নাতক (পাস)</td>
                        <td>স্নাতক (সম্মান)</td>
                        <td>স্নাতকোত্তর</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>১</td>
                        <td>কৃষি</td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                        <td><input type="number" class="form-control" name="" id=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/collegeFirstPage.js') }}" type="module" defer></script>
@stop