@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')
        {{--LAB--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text">৩</span>
                </div>
                <div class="form-control">ল্যাব সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <div class="input-group form-inline contentItem">
                    <label for="labYN">৩.১। প্রতিষ্ঠানে কম্পিউটার ল্যাব আছে কি?</label>
                    <select class="contentBoxInput" id="labYN">
                        <option>হ্যাঁ</option>
                        <option>না</option>
                    </select>
                    {{--if Lab Available--}}
                    <div class="container">
                        <table class="table table-bordered text-center font-weight-bold">
                            <tbody>
                            <tr>
                                <td rowspan="2">ক্রমিক</td>
                                <td rowspan="2">মোট কম্পিউটার</td>
                                <td colspan="2">সচল</td>
                                <td rowspan="2">মেরামতযোগ্য</td>
                                <td rowspan="2">অচল</td>
                                <td rowspan="2">প্রতিষ্ঠার তারিখ</td>
                                <td rowspan="2">প্রদানকারী সংস্থা</td>
                                <td rowspan="2">কত ঘন্টা ব্যবহার হয়</td>
                                <td rowspan="2">ব্যবহারকারী শিক্ষার্থীর সংখ্যা</td>
                            </tr>
                            <tr>
                                <td>ডেস্কটপ</td>
                                <td>ল্যাপটপ</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="input-group form-inline contentItem">
                    <label for="labYN">৩.২। ল্যাব ব্যতিত অন্য কম্পিউটার আছে কি?</label>
                    <select class="contentBoxInput" id="labYN">
                        <option>হ্যাঁ</option>
                        <option>না</option>
                    </select>
                    {{--if Lab Available--}}
                    <div class="container">
                        <table class="table table-bordered text-center font-weight-bold">
                            <tbody>
                            <tr>
                                <td rowspan="2">ক্রমিক</td>
                                <td rowspan="2">মোট কম্পিউটার</td>
                                <td colspan="2">সচল</td>
                                <td rowspan="2">মেরামতযোগ্য</td>
                                <td rowspan="2">অচল</td>
                                <td rowspan="2">প্রদানকারী সংস্থা</td>
                            </tr>
                            <tr>
                                <td>ডেস্কটপ</td>
                                <td>ল্যাপটপ</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('components/footer')

    </div>
@endsection
