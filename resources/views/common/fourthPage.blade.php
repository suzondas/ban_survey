@extends('components.template')
@section('content')
    <div class="container" id="fourthPage">
        <h3 class="text-center">বিবিধ তথ্য (২)</h3>
        <div v-if="!dataLoaded">
            <div class="d-flex justify-content-center">
                <h3 class="p-2">Loading...</h3>
                <div class="spinner-border" role="status">
                </div>
            </div>
        </div>
        <div v-if="dataLoaded">
        {{--Curriculam--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.১</span>
                </div>
                <div class="form-control bg-number-label">শিক্ষাক্রম সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <label>৩.৫ প্রতিষ্ঠানে পাঠ পরিকল্পনা করা হয় কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_infos.education_plan_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৫.১ সৃজনশীল প্রশ্ন নিজেরা তৈরি করেন কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_infos.creative_ques_prepaired_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.২ একজন শিক্ষককে সপ্তাহে গড়ে কতটি ক্লাস নিতে হয় ? </label>
                            <input type="text" v-model="data.summary_infos.weekly_class_num"/>
                        </td>
                        <td>
                            <label>৩.৫.৩ অতিরিক্ত ক্লাস নেয়া হয় কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_infos.additional_class_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.৪ অতিরিক্ত ক্লাস নেয়া হলে, কখন নেয়া হয়?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.additional_class_time">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৫.৫ প্রতি পিরিয়ডে পাঠদানের জন্য নির্ধারিত সময় কত?</label>
                            <input type="text" v-model="data.summary_infos.per_period_time"/> মিনিট
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <label>৩.৫.৬ সপ্তাহে কত ঘন্টা বিজ্ঞানাগার ব্যবহার করা হয়?</label>
                            <input type="text" v-model="data.summary_infos.lab_hr"/> ঘন্টা
                        </td>
                        <td>
                            <label>৩.৫.৭ বিজ্ঞানাগারে ব্যবহৃত প্রধান ৪টি এ্যাপারেটাস ও কেমিক্যালস এর নাম:</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>এ্যাপারেটাস</td>
                                    <td><input placeholder="১." class="w-100" v-model="data.summary_infos.apparatus_name1"/></td>
                                    <td><input placeholder="২." class="w-100" v-model="data.summary_infos.apparatus_name2"/></td>
                                    <td><input placeholder="৩." class="w-100"  v-model="data.summary_infos.apparatus_name3"/></td>
                                    <td><input placeholder="৪." class="w-100"  v-model="data.summary_infos.apparatus_name4"/></td>
                                </tr>
                                <tr>
                                    <td>ক্যামিকেল</td>
                                    <td><input placeholder="১." class="w-100"  v-model="data.summary_infos.chemical_name1"/></td>
                                    <td><input placeholder="২." class="w-100"  v-model="data.summary_infos.chemical_name2"/></td>
                                    <td><input placeholder="৩." class="w-100"  v-model="data.summary_infos.chemical_name3"/></td>
                                    <td><input placeholder="৪." class="w-100"  v-model="data.summary_infos.chemical_name4"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.১০ শিক্ষার গুণগত মান বৃদ্ধির জন্য কী কী পদক্ষেপ নিয়েছেন?(In
                                English Language with Capital Letter)</label>
                            <table class="table table-bordered">
                                    <tr><input placeholder="১." class="w-100" v-model="data.summary_infos.edu_improve_stap1"/></tr>
                                    <br>
                                    <tr><input placeholder="২." class="w-100" v-model="data.summary_infos.edu_improve_stap2"/></tr>
                                    <br>
                                    <tr><input placeholder="৩." class="w-100" v-model="data.summary_infos.edu_improve_stap3"/></tr>
                                    <br>
                                    <tr><input placeholder="৪." class="w-100" v-model="data.summary_infos.edu_improve_stap4"/></tr>

                            </table>
                        </td>
                        <td class="align-middle">
                            <label>৩.৫.১১ পাঠ্যক্রম সম্পর্কে আপনার মতামত?</label>
                            <select class="contentBoxInput"  v-model="data.summary_infos.sylabus_opinion">
                                <option value="">Select</option>
                                <option value="1">১-যথাযথ</option>
                                <option value="2">২-অতিরিক্ত</option>
                                <option value="3">৩-অপর্যাপ্ত</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.১২ শিক্ষক ডায়েরি ব্যবহার করা হয় কি?</label>
                            <select class="contentBoxInput"  v-model="data.summary_infos.teacher_diary_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.৫.১৩ নিয়মিত শিক্ষার্থী সমাবেশ হয় কি?</label>
                            <select class="contentBoxInput"  v-model="data.summary_infos.regular_student_assely_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.১৪ ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থীদের জন্য দ্বিভাষিক শিক্ষা ও শিখন কার্যক্রম চালু
                                আছে কি?</label>
                            <select class="contentBoxInput"  v-model="data.summary_infos.divasik_education">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td class="align-middle">
                            <label>৩.৫.১৫ ক্ষুদ্র নৃ-গোষ্ঠী শিক্ষার্থীদের নিজস্ব ভাষায় পাঠদান করা হয় কি?</label>
                            <select class="contentBoxInput"  v-model="data.summary_infos.own_divasik_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                            <label>৩.৫.১৬ উত্তর হ্যাঁ হলে, কোন ভাষায় পাঠদান করা হয়?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.divasik_lan">
                                <option value="1">চাকমা</option>
                                <option value="2">ত্রিপুরা</option>
                                <option value="3">সাদরি</option>
                                <option value="4">মারমা</option>
                                <option value="5">গারো</option>
                                <option value="6">অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৫.১৮ পূর্ববর্তী বছর (২০২০) সালে কত কার্য দিবস পাঠদান করা হয়েছে </label>
                            <input type="text" class="w-25"  v-model="data.summary_infos.working_day_lastyr"/>
                        </td>
                        <td>
                            <label>৩.৬ প্রতিষ্ঠানটিতে মাদক বিরোধী কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.drug_terror_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.১ প্রতিষ্ঠানটিতে সন্ত্রাস বিরোধী কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.terror_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.২ প্রতিষ্ঠানটিতে জঙ্গীবাদ বিরোধী কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.jongi_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৩ প্রতিষ্ঠানটিতে কমিউনিটি ইন্টারেকশন আছে কি না?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.comm_interaction_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.৪ প্রতিষ্ঠানটিতে বাল্যবিবাহ প্রতিরোধ কার্যক্রম আছে কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.child_marr_prev_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৫ প্রতিষ্ঠানটিতে নিরাপদ সড়ক বিষয়ে সচেতনতামূলক কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_infos.safe_road_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.৬ প্রতিষ্ঠানটিতে জাতীয় শুদ্ধাচার কৌশল বিষয়ে কোন কার্যক্রম পরিচালিত হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.integrity_stratgy_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৭ প্রতিষ্ঠানটিতে ইনোভেশন বিষয়ে কোন কার্যক্রম পরিচালিত হয় কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_infos.innovation_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.৮ শ্রেণিকক্ষে নৈতিকতার ওপর আলোচনা হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.morality_class_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.৯ প্রতিষ্ঠানটিতে কৃতি শিক্ষার্থীদের যোগাযোগের ঠিকানা সম্বলিত তালিকা আছে
                                কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.success_std_list_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.১০ প্রতিষ্ঠানটিতে নিয়মিত শরীরচর্চা করানো হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.physical_exercise_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৬.১১ বার্ষিক শিক্ষা সফর হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.annual_edu_tour_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৬.১২ বার্ষিক বৃক্ষ রোপণ/গার্ডেনিং কার্যক্রম হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.annual_gardening_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>৩.৭.৯ সহপাঠ কার্যক্রম পরিচালিত হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_infos.co_curricular_act_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>
                            <label>৩.৭.৯.১ উত্তর হ্যাঁ হলে, নির্দিষ্ট ঘরে টিক চিহ্ণ দিন।</label><br>
                            <input type="checkbox" v-model="data.summary_infos.anual_sports"> বার্ষিক ক্রীড়া &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.dibet"> বিতর্ক &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.voolyball"> ভলিবল &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.music"> সংগীত &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.planting"> বৃক্ষরোপণ &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.anual_cultural"> সাংস্কৃতিক অনুষ্ঠান &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.cricket"> ক্রিকেট &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.karam"> ক্যারাম &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.drama"> নাটক &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.sciencefair"> বিজ্ঞান মেলা &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.kabadi"> কাবাডি &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.football"> ফুটবল &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.handball"> হ্যান্ডবল &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.poetry"> আবৃত্তি &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.milad"> মিলাদ &nbsp;
                            <input type="checkbox" v-model="data.summary_infos.indoregames"> অন্যান্য ইনডোর গেমস &nbsp;
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Audit infos--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩.২</span>
                </div>
                <div class="form-control bg-number-label">অডিট ও মামলা সংক্রান্ত</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td><label> ৩.৭ প্রতিষ্ঠানটিতে অভ্যন্তরীণ বার্ষিক অডিট হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.regular_audit_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১ ডিআইএ কর্তৃক অডিট সম্পন্ন হয়েছে কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.dia_audit_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২ উত্তর হ্যাঁ হলে, সর্বশেষ কোন সালে ডিআইএ কর্তৃক অডিট সম্পন্ন হয়েছে </label>
                            <input type="number" class="w-25" v-model="data.summary_audit_infos.last_dia_audit_year"/>
                        </td>
                    </tr>
                    <tr>

                        <td><label> ৩.৭.৩ উত্তর হ্যাঁ হলে অডিট আপত্তি হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.audit_objection_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.৪ উত্তর হ্যাঁ হলে, আপত্তির সংখ্যা </label>
                            <input type="number" class="w-25" v-model="data.summary_audit_infos.audit_objection_no"/>
                        </td>
                        <td><label>৩.৭.৫ অর্থের পরিমাণ</label>
                            <input type="number" class="w-25" v-model="data.summary_audit_infos.audit_objection_amt"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.৬ আপত্তির বিষয়</label>
                            <input type="number" class="w-25" v-model="data.summary_audit_infos.audit_objection_subject"/>
                        </td>
                        <td><label> ৩.৭.৮ বার্ষিক উন্নয়ন পরিকল্পনা প্রণয়ন করা হয় কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.anual_plan_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.৭ প্রতিষ্ঠানটিতে রাজস্ব অডিট হয় কি (সরকারি প্রতিষ্ঠানের ক্ষেত্রে
                                প্রযোজ্য)</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.revenue_audit_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.২৬ প্রতিষ্ঠানটির বিরুদ্ধে কোন মামলা আছে কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.inst_case_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২৭ উত্তর হ্যাঁ হলে, মামলার সংখ্যা </label>
                            <input type="text" class="w-25" v-model="data.summary_audit_infos.inst_case_no"/>
                        </td>
                        <td><label> ৩.৭.২৮ উত্তর হ্যাঁ হলে, মামলার বিষয়</label>
                            <input type="text" class="w-100" v-model="data.summary_audit_infos.inst_case_details"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.১৪ জাতীয় দিবসগুলো যথাযথভাবে পালন করা হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.national_day_celebrate">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৫ প্রতিষ্ঠানে সংবাদপত্র রাখা হয় কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.newspaper_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৬ উত্তর হ্যাঁ হলে, কয়টি দৈনিক সংবাদপত্র রাখা হয় </label>
                            <input type="numnber" class="w-25" v-model="data.summary_audit_infos.newspaper_num"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.১৮ প্রতিষ্ঠানটি পাবলিক পরীক্ষা কেন্দ্র হিসেবে ব্যবহৃত হয় কি না?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.public_exem_center_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৯ শিক্ষার্থীদের ইউনিফরম আছে কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.std_uniform_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.১৭ পাবলিক পরীক্ষা দিবস কমানোর ক্ষেত্রে আপনার পরামর্শ কী? </label>
                            <input type="numnber" class="w-25" v-model="data.summary_audit_infos.exam_day_reduce_advice"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.২০ শিক্ষার্থীদের পরিচয়পত্র আছে কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.std_idcard_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২১ একাধারে ১০ (দশ) দিনের বেশি অনুপস্থিত শিক্ষার্থী আছে কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.std_long_absent_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২২ একাডেমিক ক্যালেন্ডার আছে কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.academy_calendar_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>৩.৭.২৩ অভিভাবক দিবস পালিত হয় কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.parents_day_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২৪ বিভিন্ন অনুষ্ঠান/দিবসের বর্ষপঞ্জি আছে কি? </label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.yearly_calender_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td><label> ৩.৭.২৫ শিক্ষক ও কর্মচারীদের নিদির্ষ্ট কোন পোশাক আছে কি?</label>
                            <select class="contentBoxInput" v-model="data.summary_audit_infos.staff_uniform_yn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>৩.৭.২৯ প্রতিষ্ঠানটিতে নিম্নের রেজিস্ট্রার বহি আছে কি?</label><br>
                            <input type="checkbox" v-model="data.summary_audit_infos.smc_register_yn"/> SMC সদস্যদের উপস্থিতি রেজিস্ট্রারবহি<br>
                            <input type="checkbox" v-model="data.summary_audit_infos.pta_register_yn"/> PTA সদস্যদের উপস্থিতি রেজিস্ট্রারবহি
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--Library Area deleted by suzon and moved on bibid 1--}}
        <div class="contentBox">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">৩</span>
                </div>
                <div class="form-control bg-number-label">কমিউনিটি সার্ভিস</div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped">
                    <label>৩.৭.১০ প্রতিষ্ঠানের সহায়তামূলক ও কমিউনিটি সার্ভিস গ্রহণকারী শিক্ষার্থী সংখ্যা:</label>
                    <tr>
                        <td>সার্ভিসের ধরন</td>
                        <td>স্কাউট</td>
                        <td>গার্লস ইন গাইড</td>
                        <td>রোভার স্কাউট</td>
                        <td>কাব</td>
                        <td>বিএনসিসি</td>
                        <td>রেড ক্রিসেন্ট</td>
                        <td>স্টুডেন্টস কেবিনেট</td>
                        <td>স্বাস্থ্য সেবা</td>
                        <td>কাউন্সেলিং সেবা</td>
                        <td>পরিবহন সুবিধা</td>
                        <td>ক্যান্টিন</td>
                    </tr>
                    <tr>
                        <td>সদস্য/ছাত্র-ছাত্রীর সংখ্যা</td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.boys_scout"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.girls_guide"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.rover_scout"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.kab"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.bncc"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.red_cresent"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.student_cabinat"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.health_service"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.counciling_service"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.transport"/> </td>
                        <td class="text-center"><input type="text" class="w-50" v-model="data.community_services.cantain"/> </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>৩.৭.১১ প্রতিষ্ঠানের সহায়তামূলক ও কমিউনিটি সার্ভিস পরিচালনার জন্য কোন পৃথক ব্যাংক হিসাব আছে কি?
                            <select class="contentBoxInput" v-model="data.community_services.bankaccountyn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>৩.৭.১২ প্রতিষ্ঠানের স্কাউট/গার্লস গাইড পরিচালনার জন্য কোন পৃথক ব্যাংক হিসাব আছে কি?
                            <select class="contentBoxInput" v-model="data.community_services.scoutguideaccountyn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                        <td>৩.৭.১৩ প্রতিষ্ঠানের স্কাউটের ট্রুপমিটিং করা হয় কি?
                            <select class="contentBoxInput" v-model="data.community_services.scouttroopmeetingyn">
                                <option value="1">হ্যাঁ</option>
                                <option value="2">না</option>
                            </select>
                        </td>
                    </tr>

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
    <script src="{{ asset('js/fourthPage.js') }}" type="module" defer></script>
@stop

