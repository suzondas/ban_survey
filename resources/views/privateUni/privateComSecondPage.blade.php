@extends('components.template')
@section('content')
    <div class="container" id="privateComSecondPage">
        <div v-if="!dataLoaded">
            <div class="d-flex justify-content-center">
                <h3 class="p-2">Loading...</h3>
                <div class="spinner-border" role="status">
                </div>
            </div>
        </div>

        <div v-if="dataLoaded">
            <h3 class="text-center" style="margin-top: 10px">সেকশন ২: ভৌত সুযোগ-সুবিধা</h3>

            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.১</span>
                    </div>
                    <div class="form-control bg-number-label">ভৌত অবকাঠামো</div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-sm table-striped table-bordered">
                        <tr>
                            <td style="width:350px"><label>২.১.১ বিশ্ববিদ্যালয়ের নিজস্ব ক্যাম্পাস আছে কি?</label>
                                <select class="">
                                    <option value=""></option>
                                    <option value="1">হ্যা-১</option>
                                    <option value="2">না-২</option>
                                </select>
                            </td>
                            <td>
                                <label> ২.১.২ বিশ্ববিদ্যালয়ের জমির পরিমাণ (শতাংশে):</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="total"> নিজস্ব:</label>
                                        <input type="number" class="w-50"
                                               v-model="data.committees.total_member">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="female"> ভাড়া: </label>
                                        <input type="number" class="w-50"
                                               v-model="data.committees.total_female">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="female"> অন্যান্য: </label>
                                        <input type="number" class="w-50"
                                               v-model="data.committees.total_female">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <label> ২.১.৩ বিশ্ববিদ্যালয়ের ভবন সংখ্যা:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="total"> নিজস্ব:</label>
                                        <input type="number" class="w-50"
                                               v-model="data.committees.total_member">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="female"> ভাড়া: </label>
                                        <input type="number" class="w-50"
                                               v-model="data.committees.total_female">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="font-weight-bold">২.১.৪ ভৌত অবকাঠামোর বিবরণ:</label>
                            <table class="table table-sm table-striped table-bordered text-center">
                                <tr>
                                    <td>ক্র.</td>
                                    <td>কক্ষ/ভবনের প্রকার</td>
                                    <td>সংখ্যা</td>
                                    <td>মোট আয়তন (বর্গফুট)</td>
                                </tr>
                                <tr>
                                    <td>১</td>
                                    <td>শ্রেণি কক্ষ</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>২</td>
                                    <td>প্রশাসনিক</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৩</td>
                                    <td>গ্রন্থগার</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৪</td>
                                    <td>ল্যাবরেটরি</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৫</td>
                                    <td>মিলনায়তন</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৬</td>
                                    <td>ডরমিটরি</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৭</td>
                                    <td>ব্যায়ামাগার</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৮</td>
                                    <td>খেলার মাঠ</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৯</td>
                                    <td>সুইমিংপুল</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১০</td>
                                    <td>শিক্ষদের বাসস্থান</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১১</td>
                                    <td>কর্মকর্তাদের বাসস্থান</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১২</td>
                                    <td>কর্মচারীদের বাসস্থান</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১৩</td>
                                    <td>আন্তর্জাতিক হল</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১৪</td>
                                    <td>রোভার ভবন/ডেন</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১৫</td>
                                    <td>টিএসসি</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১৬</td>
                                    <td>পরীক্ষার হল</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১৭</td>
                                    <td>ব্যাংকের শাখা</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১৮</td>
                                    <td>মেডিক্যাল সেন্টার</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১৯</td>
                                    <td>মেডিক্যাল অফিসারের অফিস</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>২০</td>
                                    <td>ক্যাফেটেরিয়া</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>২১</td>
                                    <td>অন্যান্য (যদি থাকে)</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">২.১.৫ ভাড়াকৃত অবকাঠামোর বিবরণ:</label>
                            <table class="table table-sm table-striped table-bordered text-center">
                                <tr>
                                    <td>ক্র.</td>
                                    <td>কক্ষ/ভবনের প্রকার</td>
                                    <td>সংখ্যা</td>
                                    <td>মোট আয়তন (বর্গফুট)</td>
                                </tr>
                                <tr>
                                    <td>১</td>
                                    <td>শ্রেণিকক্ষ</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>২</td>
                                    <td>প্রশাসনিক</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৩</td>
                                    <td>গ্রন্থগার</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৪</td>
                                    <td>ল্যাবরেটরি</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৫</td>
                                    <td>মিলনায়তন</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৬</td>
                                    <td>ডরমিটরি</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৭</td>
                                    <td>ব্যায়ামাগার</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৮</td>
                                    <td>খেলার মাঠ</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>৯</td>
                                    <td>সুইমিংপুল</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>১০</td>
                                    <td>অন্যান্য (যদি থাকে)</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                            </table>
                            <label class="font-weight-bold">২.১.৬ বিশ্ববিদ্যালয়ের আবাসিক হল/হোস্টেলসমূহ সংখ্যা ও আসন সংখ্যা:</label>
                            <table class="table table-sm table-striped table-bordered text-center">
                                <tr>
                                    <td>ক্র.</td>
                                    <td>ব্যবহারকারী</td>
                                    <td>হল/হোস্টেলের সংখ্যা</td>
                                    <td>আসন সংখ্যা</td>
                                    <td>আবাসিক শিক্ষার্থীর সংখ্যা</td>
                                </tr>
                                <tr>
                                    <td>১</td>
                                    <td>ছাত্র</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                                <tr>
                                    <td>২</td>
                                    <td>ছাত্রী</td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                    <td><input type="number" class="w-50"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- General Info ends here--}}
            <div class="contentBox">
                <div class="input-group contentdeader">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-number">২.২</span>
                    </div>
                    <div class="form-control bg-number-label">লাইব্রেরি সংক্রান্ত তথ্য</div>
                </div>
                <div class="contentBoxBody">
                    <table class="table table-sm table-striped table-bordered">
                        <tr>
                            <td colspan="2">
                                ২.২.১ কেন্দ্রীয় লাইব্রেরিতে মোট বইয়ের সংখ্যা: &nbsp
                                <input type="number" class="w-25" />
                            </td>
                            <td colspan="2">
                                <label class="">২.২.২ কেন্দ্রীয় লাইব্রেরিতে ডিজিটাল ক্যাটালগিং সিস্টেম চালু আছে কি? </label>
                                <select class="" v-model="data.institutes.institute_type_id">
                                    <option value="">Select</option>
                                    <option value="1">হ্যাঁ-১</option>
                                    <option value="2">না-২</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-sm table-striped table-bordered text-center">
                        <label class="font-weight-bold">২.২.৩ গ্রন্থাগার ও পাঠোপকরণের বিবরণ:</label>
                        <tr>
                            <td>বিবরণ</td>
                            <td>বই</td>
                            <td>জার্নাল</td>
                            <td>অডিওভিজ্যুয়াল সামগ্রী</td>
                        </tr>
                        <tr>
                            <td class="text-left">১. ২০২০ সাল পর্যন্ত গ্রন্থাগার সামগ্রীর মোট ক্রমপূঞ্জিত (cumulative) সংখ্যা</td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <td class="text-left">২. শুধুমাত্র ২০২০ সালে সংগৃহীত সংখ্যা</td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <td class="text-left">৩. ২০২০ সালে গৃহীত (subscribed) ইলেকট্রনিক পুস্তক ও সাময়িকীর সংখ্যা</td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <td class="text-left">৪. অন্যান্য</td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                            <td><input type="number" class="w-50"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div align="center"><button type="button" @click="submitData" class="btn btn-success">Submit</button></div>

    </div>

    <div v-show="dataLoadingError">
        <span class="d-flex justify-content-center btn-warning">Error in Fetching Data, Please contact System Administrator!</span>
    </div>
    </div>
@endsection
@section('javascript')
    {{--<script src="{{ asset('js/privateComSecondPage.js') }}" type="module" defer></script>--}}
@stop