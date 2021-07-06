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
                <div class="col-md-8">
                <label class="font-weight-bold">৩.৩.১ ২০২০ সালের জানুয়ারি থেকে ডিসেম্বর পর্যন্ত ডিগ্রিপ্রাপ্তদের পরিসংখ্যান </label>
                <table class="table table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="2" class="align-middle font-weight-bold">ডিগ্রির নাম</td>
                        <td rowspan="2" class="align-middle font-weight-bold" style="width: 220px;">বিষয়</td>
                        <td rowspan="2" class="align-middle font-weight-bold">সেশন</td>
                        <td colspan="2" class="align-middle font-weight-bold">পরিক্ষার্থী</td>
                        <td colspan="2" class="align-middle font-weight-bold">উত্তীর্ণ</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                        <td>মোট</td>
                        <td>ছাত্রী </td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-bold" rowspan="11">স্নাতক (পাস)</td>
                        <td>বি এ (পাস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এস এস (পাস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি কম (পাস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি বি এ </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এসসি (পাস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এসসি (পাস) গার্হস্থ্য অর্থনীতি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এল এল বি (পাস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এড (পাস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এ  (স্পোর্টস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এ (সংগীত)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এফ এ</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold text-center"> মোট স্নাতক (পাস)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-bold" rowspan="11">স্নাতক (সম্মান)</td>
                        <td>বি এ (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এস এস  (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি কম  (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি বি এ (সম্মান) </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এসসি  (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এসসি (সম্মান) গার্হস্থ্য অর্থনীতি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এসসি  (ফার্মেসি সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এল এল বি  (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এড  (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এফ এ (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি ইউ আর পি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold text-center"> মোট স্নাতক (সম্মান)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-bold" rowspan="4">স্নাতক (কারিগরি ও প্রযুক্তি)</td>
                        <td>বি এস এস (পাস)/ সম্মান(প্রকৌশল, চর্ম, বস্ত্র, সিরামিক, সামরিক, কৃষি ও সমতুল্য)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি এসসি (চিকিৎসা ও সমতুল্য), হোমিও ও ইউনানি, বিজিএম</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম বি বি এস</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>বি ডি এস</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold text-center"> মোট (কারিগরি ও প্রযুক্তি)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-bold" rowspan="12">স্নাতকোত্তর</td>
                        <td>এম এ </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এস এস  </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম কম  </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম বি এ </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এসসি/এমএস</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এসসি (ফার্মেসি)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এসসি (গার্হস্থ্য অর্থনীতি)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এড </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এফ এ </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এম এড</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এল এল এম</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম ডি এস</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold text-center"> মোট স্নাতকোত্তর</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-bold" rowspan="3">স্নাতকোত্তর (কারিগরি ও প্রযুক্তি)</td>
                        <td>এম এসসি (প্রকৌশলী)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম এসসি (কৃষি)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম আই টি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold text-center"> মোট স্নাতকোত্তর (কারিগরি ও প্রযুক্তি)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-bold" rowspan="7">এম এস/এম ফিল/পিএইচডি পর্যায়</td>
                        <td>এম এস</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম সি এইচ </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম সি সি এস</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম ডি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম ফিল</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>এম ফিল (মেডিক্যাল)</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>পিএইচডি</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold text-center"> মোট</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-bold" rowspan="2">ডিপ্লোমা</td>
                        <td>ডিপ্লোমা</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td>পোস্ট গ্র্যাজুয়েট ডিপ্লোমা </td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold text-center"> মোট</td>
                        <td><input type="number" class="w-50"/></td>
                        <td><input type="number" class="w-50"/></td>
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
