@extends('schoolAndCollege/template')
@section('content')
    <div class="container">
        @include('../components/banner')
        @include('schoolAndCollege.navBar')
        {{--LAB--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text">৩.১</span>
                </div>
                <div class="form-control">ল্যাব সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <div class="input-group form-inline contentItem">
                    <label for="labYN">৩.১.১। প্রতিষ্ঠানে কম্পিউটার ল্যাব আছে কি?</label>
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
                    <label for="labYN">৩.১.২। ল্যাব ব্যতিত অন্য কম্পিউটার আছে কি?</label>
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

        {{--Multimedia Classroom/Projector--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text">৩.২</span>
                </div>
                <div class="form-control">মাল্টিমিডিয়া ক্লাসরুম সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group form-inline contentItem">
                            <label for="multimediaClassroom">৩.২.১। মাল্টিমিডিয়া ক্লাসরুমের সংখ্যা</label>
                            <input class="contentBoxInput" id="multimediaClassroom" type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        ৩.২.১। মাল্টিমিডিয়া ক্লাসরুমের ব্যবহারে সক্ষম শিক্ষকের সংখ্যা<br>
                        <div class="row">
                            <div class="col-md-6 input-group form-inline contentItem">
                                মহিলাঃ <input class="contentBoxInput" id="" type="text"/>
                            </div>
                            <div class="col-md-6 input-group form-inline contentItem">
                                পুরুষ <input class="contentBoxInput" id="" type="text"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group form-inline contentItem">
                            <label for="">৩.২.১। মাল্টিমিডিয়া ব্যবহার করে প্রতিদিন কয়টি ক্লাস নেওয়া হয়</label>
                            <input class="contentBoxInput" style="width: 40px;" id="" type="text"/> টি
                        </div>
                    </div>
                    <div class="col-md-6 contentItem">
                        ৩.১.১। মাল্টিমিডিয়া ক্লাসরুমের ব্যবহার করে ক্লাস নেওয়ার<br> পর
                        ড্যাসবোর্ডে এন্ট্রি দেওয়া হয় কি?
                        <select class="contentBoxInput" id="dashboardEntry">
                            <option>হ্যাঁ</option>
                            <option>না</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 input-group form-inline contentItem">
                        <label for="projectorYN">৩.১.১। মাল্টিমিডিয়া প্রজেক্টর আছে কি?</label>
                        <select class="contentBoxInput" id="projectorYN">
                            <option>হ্যাঁ</option>
                            <option>না</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group form-inline contentItem">
                            <label for="">৩.২.১। মাল্টিমিডিয়া প্রজেক্টরের সংখ্যা</label>
                            <input class="contentBoxInput" id="" type="text"/> টি
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text">৩.২</span>
                </div>
                <div class="form-control">আইসিটি সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group form-inline contentItem">
                            <label for="multimediaClassroom">৩.২.১। মাল্টিমিডিয়া ক্লাসরুমের সংখ্যা</label>
                            <input class="contentBoxInput" id="multimediaClassroom" type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        ৩.২.১। মাল্টিমিডিয়া ক্লাসরুমের ব্যবহারে সক্ষম শিক্ষকের সংখ্যা<br>
                        <div class="row">
                            <div class="col-md-6 input-group form-inline contentItem">
                                মহিলাঃ <input class="contentBoxInput" id="" type="text"/>
                            </div>
                            <div class="col-md-6 input-group form-inline contentItem">
                                পুরুষ <input class="contentBoxInput" id="" type="text"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group form-inline contentItem">
                            <label for="">৩.২.১। মাল্টিমিডিয়া ব্যবহার করে প্রতিদিন কয়টি ক্লাস নেওয়া হয়</label>
                            <input class="contentBoxInput" style="width: 40px;" id="" type="text"/> টি
                        </div>
                    </div>
                    <div class="col-md-6 contentItem">
                        ৩.১.১। মাল্টিমিডিয়া ক্লাসরুমের ব্যবহার করে ক্লাস নেওয়ার<br> পর
                        ড্যাসবোর্ডে এন্ট্রি দেওয়া হয় কি?
                        <select class="contentBoxInput" id="dashboardEntry">
                            <option>হ্যাঁ</option>
                            <option>না</option>
                        </select>৩৩
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 input-group form-inline contentItem">
                        <label for="projectorYN">৩.১.১। মাল্টিমিডিয়া প্রজেক্টর আছে কি?</label>
                        <select class="contentBoxInput" id="projectorYN">
                            <option>হ্যাঁ</option>
                            <option>না</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group form-inline contentItem">
                            <label for="">৩.২.১। মাল্টিমিডিয়া প্রজেক্টরের সংখ্যা</label>
                            <input class="contentBoxInput" id="" type="text"/> টি
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components/footer')

    </div>
@endsection
