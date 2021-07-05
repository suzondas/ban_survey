@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="publicTeachSecondPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ৪ (খ): শিক্ষক সংক্রান্ত তথ্য</h3>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৪.৩</span>
                </div>
                <div class="form-control bg-number-label">পদবীভিত্তিক শিক্ষক সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <div class="col-md-10">
                    <label class="font-weight-bold">৪.৩.১ লিঙ্গ ও পদবিভিত্তিক নিয়মিত এবং খÐকালীন শিক্ষক সংখ্যা </label>
                    <table class="table table-sm table-bordered table-striped text-center">
                        <tr>
                            {{--<td>স্তর</td>--}}
                            <td rowspan="2">পদ</td>
                            <td rowspan="2">অনুমোদিত পদ সংখ্যা</td>
                            <td colspan="2">কর্মরত শিক্ষক সংখ্যা</td>
                            <td colspan="2">খণ্ডকালীন/চুক্তিভিত্তিক/এডহক শিক্ষক সংখ্যা</td>
                            <td colspan="2">উচ্চতর প্রশিক্ষণের জন্য বিদেশে অবস্থান</td>
                            <td colspan="2">বিদেশী শিক্ষক সংখ্যা</td>
                        </tr>

                        <tr>
                            <td>মোট</td>
                            <td>মহিলা</td>
                            <td>মোট</td>
                            <td>মহিলা</td>
                            <td>মোট</td>
                            <td>মহিলা</td>
                            <td>মোট</td>
                            <td>মহিলা</td>
                        </tr>
                        <tr>
                            <td>অধ্যাপক</td>
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
                            <td>সহযোগী অধ্যাপক</td>
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
                            <td>সহকারী অধ্যাপক</td>
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
                            <td>প্রভাষক</td>
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
                            <td>টিচিং এসিস্ট্যান্ট</td>
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
                            <td class="font-weight-bold text-right">উপ-মোট</td>
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
                            <td>ভিজিটিং প্রফেসর</td>
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
                            <td>অনারারি প্রফেসর</td>
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
                            <td>সুপারনিউমারি প্রফেসর</td>
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
                            <td>ইমিরিটাস প্রফেসর</td>
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
                            <td>অন্যান্য</td>
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
                            <td class="font-weight-bold text-right">উপ-মোট</td>
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
                            <td class="font-weight-bold text-right">সর্বমোট</td>
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
        </div>
        <div class="contentBox">
            <div class="input-group contentdeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৪.৪</span>
                </div>
                <div class="form-control bg-number-label"> শিক্ষক সংখ্যা
                </div>
            </div>
            <div class="contentBoxBody">
                <div class="row">
                    <div class="col-md-6">
                        <label class="font-weight-bold">৪.৪.১ আবাসিক সুবিধাপ্রাপ্ত শিক্ষক, কর্মকর্তা ও কর্মচারীদের সংখ্যা ২০২১ </label>
                        <table class="table table-sm table-bordered table-striped text-center">
                            <tr>
                                {{--<td>স্তর</td>--}}
                                <td rowspan="2">পদবি</td>
                                <td colspan="2">আবাসিক সুবিধা প্রাপ্ত সংখ্যা</td>
                            </tr>

                            <tr>
                                <td>মোট</td>
                                <td>মহিলা</td>
                            </tr>
                            <tr>
                                <td> শিক্ষক</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>কর্মকর্তা</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>তৃতীয় শ্রেণির কর্মচারী</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>চতুর্থ শ্রেণির কর্মচারী</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td class="text-right">সর্বমোট</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <label class="font-weight-bold">৪.৪.২ কর্মরত শিক্ষক/শিক্ষিকা, কর্মকর্তা ও কর্মচারীর সংখ্যা ও আবাসন সম্পর্কিত তথ্য </label>
                        <table class="table table-sm table-bordered table-striped text-center">
                            <tr>
                                {{--<td>স্তর</td>--}}
                                <td rowspan="2">ক্রমিক</td>
                                <td rowspan="2">শিক্ষক/শিক্ষিকা, <br> কর্মকর্তা ও কর্মচারী</td>
                                <td colspan="2">কর্মরত</td>
                                <td colspan="2">বিদেশে উচ্চতর <br> প্রশিক্ষণে আছেন</td>
                            </tr>
                            <tr>
                                <td>মোট</td>
                                <td>মহিলা</td>
                                <td>মোট</td>
                                <td>মহিলা</td>
                            </tr>
                            <tr>
                                <td>১</td>
                                <td>উপাচার্য</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>২</td>
                                <td>উপ-উপাচার্য</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>৩</td>
                                <td>কোষাধ্যক্ষ</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>৪</td>
                                <td>রেজিস্ট্রার</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>৫</td>
                                <td>উপ-রেজিস্ট্রার</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>৬</td>
                                <td>সহকারী রেজিস্ট্রার</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>৭</td>
                                <td>পরীক্ষা নিয়ন্ত্রক</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>৮</td>
                                <td>উপ-পরীক্ষা নিয়ন্ত্রক</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>৯</td>
                                <td>সহকারী পরীক্ষা নিয়ন্ত্রক</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>১০</td>
                                <td>লাইব্রেরিয়ান</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>১১</td>
                                <td>উপ-লাইব্রেরিয়ান</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>১২</td>
                                <td>সহকারী লাইব্রেরিয়ান</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>১৩</td>
                                <td>১ম শ্রেণির কর্মকর্তা</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>১৪</td>
                                <td>২য় শ্রেণির কর্মকর্তা</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>১৫</td>
                                <td>৩য় শ্রেণির কর্মচারী</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td>১৬</td>
                                <td>৪র্থ শ্রেণির কর্মচারী</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="font-weight-bold text-right">মোট</td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                                <td><input type="number" class="w-50"/></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    {{--<script src="{{ asset('js/schoolFirstPage.js') }}" type="module" defer></script>--}}
@stop
