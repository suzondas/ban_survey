@extends('components.template')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" id="publicStdFirstPage">
        <h3 style="text-align:center">সেকশন ৩ (ক): শিক্ষার্থী সম্পর্কিত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১</span>
                </div>
                <div class="form-control bg-number-label">বিষয়ভিত্তিক শিক্ষার্থী সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৩.১.১ বিষয়, সেমিস্টার ও লিঙ্গভিত্তিক শিক্ষার্থীর সংখ্যা </label>
                <table class="table  table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="3">ক্র</td>
                        <td rowspan="3">বিষয়</td>
                        <td rowspan="3">১ম বর্ষে ভর্তির <br> আসন সংখ্যা ২০২০</td>
                        <td colspan="8">স্নাতক (সম্মান)</td>
                        <td colspan="4">স্নাতকোত্তর</td>
                        <td colspan="2" rowspan="2">এম এস</td>
                        <td rowspan="3">এম ফিল শিক্ষার্থী</td>
                        <td rowspan="3">পিএইচডি শিক্ষার্থী</td>
                        <td colspan="2" rowspan="2">বিদেশী শিক্ষার্থী</td>
                        <td rowspan="3" class="font-weight-bold">Action</td>
                    </tr>
                    <tr>
                        <td colspan="2">১ম বর্ষ</td>
                        <td colspan="2">২য় বর্ষ</td>
                        <td colspan="2">৩য় বর্ষ</td>
                        <td colspan="2">৪র্থ বর্ষ</td>
                        <td colspan="2">১ম বর্ষ</td>
                        <td colspan="2">শেষ বর্ষ</td>
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
                        <td>মোট</td>
                        <td>ছাত্রী</td>
                    </tr>
                    <tr v-for="(item,index) in ">
                        <td rowspan="2">১</td>
                        <td rowspan="2" class="text-left">computer sciecne</td>
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
                        <td><input type="number" class="w-50"/></td>
                        <td><button @click="testArray.splice(index,1)">Delete</button></td>
                    </tr>
                </table>
                <button @click="addTestArray" class="btn btn-warning">Add Button</button>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.২</span>
                </div>
                <div class="form-control bg-number-label"> বিদেশী শিক্ষার্থীর সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <label class="font-weight-bold">৩.২.১ বিভাগ, বর্ষ ও লিঙ্গভিত্তিক বিদেশী শিক্ষার্থীর সংখ্যা</label>
                <table class="table  table-sm table-bordered table-striped text-center">
                    <tr>
                        {{--<td>স্তর</td>--}}
                        <td rowspan="3">ক্র</td>
                        <td rowspan="3">দেশের নাম</td>
                        <td rowspan="3">বিশ্ববিদ্যালয় প্রদত্ত বৃত্তি/ নিজ দেশের বৃত্তি/আর্ন্তজাতিক সংস্থা/অন্যান্য</td>
                        <td colspan="8">স্নাতক (সম্মান)</td>
                        <td colspan="4">স্নাতকোত্তর</td>
                        <td colspan="2" rowspan="2">এম এস সি</td>
                        <td rowspan="3">এম ফিল শিক্ষার্থী</td>
                        <td rowspan="3">পিএইচডি শিক্ষার্থী</td>
                        <td colspan="2" rowspan="2">বিদেশী শিক্ষার্থী</td>
                    </tr>
                    <tr>
                        <td colspan="2">১ম বর্ষ</td>
                        <td colspan="2">২য় বর্ষ</td>
                        <td colspan="2">৩য় বর্ষ</td>
                        <td colspan="2">৪র্থ বর্ষ</td>
                        <td colspan="2">১ম বর্ষ</td>
                        <td colspan="2">শেষ বর্ষ</td>
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
                        <td>মোট</td>
                        <td>ছাত্রী</td>

                    </tr>
                    <tr>
                        <td >১</td>
                        <td ><input type="number" class="w-100"/></td >
                        <td><input type="number" class="w-100"/></td>
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
            </div>
        </div>
        <div align="center"><button @click="submitData" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/publicStdFirstPage.js') }}" type="module" defer></script>
@stop
