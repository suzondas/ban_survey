@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="publicStdSecondPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ৩ (খ): শিক্ষার্থী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৩ </span>
                </div>
                <div class="form-control bg-number-label">ডিগ্রিপ্রাপ্তদের পরিসংখ্যান
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৩.৩.১ ২০২০ সালের জানুয়ারি থেকে ডিসেম্বর পর্যন্ত ডিগ্রিপ্রাপ্তদের পরিসংখ্যান </label>
                <table class="table table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2" style="width: 200px;">ডিগ্রির নাম</td>
                        <td rowspan="2">বিষয়</td>
                        <td colspan="2">পরিক্ষার্থী</td>
                        <td colspan="2">উত্তীর্ণ</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                    </tr>
                    <tr>
                        <td class="text-left">স্নাতক (পাস)</td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">স্নাতক (সম্মান)</td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">স্নাতক (কারিগরি ও প্রযুক্তি)</td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">মাস্টার্স</td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">মাস্টার্স (কারিগরি ও প্রযুক্তি)</td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">পোস্ট গ্র্যাজুয়েট ডিপ্লোমা</td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">সার্টিফিকেট</td>
                        <td><input type="number" class="w-100"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.৪</span>
                </div>
                <div class="form-control bg-number-label"> অনুষদভিত্তিক শিক্ষার্থীর সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৩.৪.১ অনুষদভিত্তিক শিক্ষার্থীর সংখ্যা-২০২১ স্নাতক (সম্মান) স্তরে</label>
                <table class="table table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">ক্র</td>
                        <td rowspan="2">অনুষদ</td>
                        <td colspan="2">১ম সেমিস্টার</td>
                        <td colspan="2">২য় সেমিস্টার</td>
                        <td colspan="2">৩য় সেমিস্টার</td>
                        <td colspan="2">৪র্থ সেমিস্টার</td>
                        <td colspan="2">৫ম সেমিস্টার</td>
                        <td colspan="2">৬ষ্ঠ সেমিস্টার</td>
                        <td colspan="2">৭ম সেমিস্টার</td>
                        <td colspan="2">৮ম সেমিস্টার</td>
                        <td colspan="2">সর্বমোট</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                    </tr>
                    <tr>
                        <td class="text-left">১</td>
                        <td class="text-left">কলা ও মানবিক</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">২</td>
                        <td class="text-left">সামাজিক বিজ্ঞান</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৩</td>
                        <td class="text-left">শিক্ষা</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৪</td>
                        <td class="text-left">বিজ্ঞান/প্রাণিবিজ্ঞান</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৫</td>
                        <td class="text-left">ব্যবসায় প্রশাসন/ব্যবসায় শিক্ষা</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৬</td>
                        <td class="text-left">আইন</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৭</td>
                        <td class="text-left">ফার্মেসি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৮</td>
                        <td class="text-left">কৃষি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৯</td>
                        <td class="text-left">প্রকৌশল ও কারিগরি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">১০</td>
                        <td class="text-left">অন্যান্য (ডিপ্লোমা/সার্টিফিকেট)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">সর্বমোট</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                </table>
                <label class="font-weight-bold">৩.৪.২ অনুষদভিত্তিক শিক্ষার্থীর সংখ্যা-২০২১ (মাস্টার্স পর্যায়ে)</label>
                <table class="table table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2">ক্র</td>
                        <td rowspan="2">অনুষদ</td>
                        <td colspan="2">১ম সেমিস্টার</td>
                        <td colspan="2">২য় সেমিস্টার</td>
                        <td colspan="2">৩য় সেমিস্টার</td>
                        <td colspan="2">৪র্থ সেমিস্টার</td>
                        <td colspan="2">৫ম সেমিস্টার</td>
                        <td colspan="2">৬ষ্ঠ সেমিস্টার</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                    </tr>
                    <tr>
                        <td class="text-left">১</td>
                        <td class="text-left">কলা ও মানবিক</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">২</td>
                        <td class="text-left">সামাজিক বিজ্ঞান</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৩</td>
                        <td class="text-left">শিক্ষা</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৪</td>
                        <td class="text-left">বিজ্ঞান/প্রাণিবিজ্ঞান</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৫</td>
                        <td class="text-left">ব্যবসায় প্রশাসন/ব্যবসায় শিক্ষা</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৬</td>
                        <td class="text-left">আইন</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৭</td>
                        <td class="text-left">ফার্মেসি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৮</td>
                        <td class="text-left">কৃষি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">৯</td>
                        <td class="text-left">প্রকৌশল ও কারিগরি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="text-left">১০</td>
                        <td class="text-left">অন্যান্য (ডিপ্লোমা/সার্টিফিকেট)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">সর্বমোট</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                </table>
                <div class="col-md-6">
                    <label class="font-weight-bold">৩.৪.৩ শিক্ষার্থীর সংখ্যা-২০২১ (সার্টিফিকেট, ডিপ্লোমা ও পোস্ট গ্র্যাজুয়েট ডিপ্লোমা পর্যায়ে)</label>
                    <table class="table table-sm table-bordered table-striped text-center">
                        <tr>
                            {{--<td>স্তর</td>--}}
                            <td rowspan="2">ক্র</td>
                            <td rowspan="2">কোর্স</td>
                            <td rowspan="2">সময়কাল</td>
                            <td colspan="2">শিক্ষার্থী</td>
                        </tr>
                        <tr>
                            <td>মোট</td>
                            <td>ছাত্রী </td>
                        </tr>
                        <tr>
                            <td class="text-left">১</td>
                            <td class="text-left">পোস্ট গ্র্যাজুয়েট ডিপ্লোমা</td>
                            <td><input type="number" class="w-75"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <td class="text-left">২</td>
                            <td class="text-left"> ডিপ্লোমা</td>
                            <td><input type="number" class="w-75"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <td class="text-left">৩</td>
                            <td class="text-left">সার্টিফিকেট</td>
                            <td><input type="number" class="w-75"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <td class="text-left">৪</td>
                            <td class="text-left">অন্যান্য</td>
                            <td><input type="number" class="w-75"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">সর্বমোট</td>
                            <td><input type="number" class="w-75"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    {{--<script src="{{ asset('js/schoolFirstPage.js') }}" type="module" defer></script>--}}
@stop
