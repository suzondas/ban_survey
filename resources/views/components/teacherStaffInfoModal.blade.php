<div class="modal modal-max" id="exampleModalLong" tabindex="-1" role="dialog" v-if="selectedTeacherIdx !== null">
    <div class="modal-dialog modal-max" role="document">
        <div class="modal-content modal-max">
            <div class="modal-header">
                <h5 class="modal-title">শিক্ষক কর্মচারীর তথ্য</h5>
            </div>
            <div class="modal-body modal-max">
                <div class="card">
                    <div class="card-header bg-info font-weight-bold">
                        <div class="row">
                            <div class="col-md-6 text-white"><label>সাধারণ তথ্য</label></div>
                            <div class="col-md-6 text-right">বর্তমানে কর্মরত কি না ?
                                <select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].is_inactive">
                                    <option class="" value="Y">কর্মরত</option>
                                    <option class="" value="R">অবসরপ্রাপ্ত</option>
                                    <option class="" value="D">মৃত</option>
                                    <option class="" value="T">বদলি</option>
                                    <option class="" value="A">বহিঃস্কৃত</option>
                                    <option class="" value="S">সাময়িক বহিঃস্কৃত</option>
                                    <option class="" value="G">চাকুরি হতে ইস্তফা নিয়েছেন</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td class="text-right">শিক্ষক / কর্মচারীর নাম</td>
                                <td>
                                    <input type="text" v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].teach_name">
                                </td>
                                <td class="text-right"> পুরুষ / মহিলা</td>
                                <td>
                                    <select  v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].sex">
                                        <option value="1">পুরুষ</option>
                                        <option value="2">মহিলা</option>
                                    </select>
                                </td>
                                <td class="text-right">জাতীয় পরিচয়পত্র নং</td>
                                <td><input v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].nid"></td>
                            </tr>
                            <tr>
                                <td class="text-right">ধর্ম</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].religion">
                                        <option value="ISLAM" selected="selected">ISLAM</option>
                                        <option value="HINDUISM">HINDUISM</option>
                                        <option value="CHRISTIANITY">CHRISTIANITY</option>
                                        <option value="BUDDHISM">BUDDHISM</option>
                                        <option value="OTHERS">OTHERS</option>
                                    </select></td>
                                <td class="text-right">পদবি</td>
                                <td>
                                    <select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].desig_id" style="width:130px;">
                                        <option v-for="designation in data.designation" v-bind:value="designation.designation_id">@{{ designation.designation_name }}</option>
                                    </select>
                                </td>
                                <td class="text-right"> শিক্ষক / কর্মচারীর ধরন</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].teacher_type">
                                        <option value="GENERAL">জেনারেল</option>
                                        <option value="TECHNICAL">কারিগরি</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td class="text-right">বিষয়</td>
                                <td>
                                    <select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].subject_id" style="width:130px;">
                                        <option v-for="subject in data.subjects" v-bind:value="subject.subject_id">@{{ subject.subject_name_eng }}</option>
                                    </select>
                                </td>
                                <td class="text-right">বিষয় (যদি list এ না থাকে)</td>
                                <td><input v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].other_subject"></td>
                                {{--<td><input type="text"></td>--}}
                                <td class="text-right"> নিয়োগের ধরন</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].recruitment_type">
                                        <option value="PERMANENT">নিয়মিত</option>
                                        <option value="PART TIME">খন্ডকালীন</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td class="text-right">চাকুরিতে
                                    প্রথম যোগদানের তারিখ
                                </td>
                                <td><input type="date" v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].first_joining_date"><br> দিন/মাস/বছর
                                </td>
                                <td class="text-right">বর্তমান
                                    পদে যোগদানের তারিখ
                                </td>
                                <td><input type="date"  v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].current_joining_date"><br> দিন/মাস/বছর
                                </td>
                                <td class="text-right">জন্ম তারিখ</td>
                                <td><input type="date"  v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].dob"> <br> দিন/মাস/বছর
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">মোবাইল নম্বর</td>
                                <td><input v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].mobile_number" type="text"></td>
                                <td class="text-right">মোবাইল ব্যাংকিং এর ধরন <br>(যদি থাকে)</td>
                                <td><select  v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].mob_banking_type" >
                                        <option value="bKash">bKash</option>
                                        <option value="Nagad">Nagad
                                        </option>
                                        <option value="One Bank">One Bank
                                        </option>
                                        <option value="Rocket">Rocket
                                        </option>
                                        <option value="SureCash">SureCash
                                        </option>
                                        <option value="UniCash">UniCash
                                        </option>
                                        <option value="bKash">bKash
                                        </option>
                                    </select></td>
                                <td class="text-right">মোবাইল ব্যাংকিং নম্বর <br> (যদি থাকে)</td>
                                <td><input  v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].mobile_banking_num" type="text"></td>
                            </tr>
                            <tr>
                                <td class="text-right">জাতীয় বেতন গ্রেড</td>
                                <td><input v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].payscale" type="text"/>
                                </td>
                                <td class="text-right">এমপিওভুক্তির তারিখ</td>
                                <td><input type="date"  v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].mpo_date"> <br> দিন/মাস/বছর
                                </td>
                                <td class="text-right">NTRCA সুপারিশকৃত নিয়োগ কিনা</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].ntrc_recruitment_yn">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right">NTRCA Reg. (যদি থাকে)</td>
                                <td><input v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].ntrca_reg" type="text"></td>
                                <td class="text-right">Index নম্বর</td>
                                <td><input v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].index_no" type="text"></td>
                                <td class="text-right">TIN নম্বর</td>
                                <td><input v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].tin_number" type="text"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header bg-info font-weight-bold text-white">
                        <label>শিক্ষাগত যোগ্যতা/প্রশিক্ষণ সংক্রান্ত</label>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr class="">
                                <td class="text-right">এস.এস.সি. / সমমান</td>
                                <td><select  v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].ssc" style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>

                                <td class="text-right">এইচ এসসি / সমমান</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].hsc"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>
                                <td class="text-right">ডিপ্লোমা</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].diploma"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right"> প্রফেশনাল ডিপ্লোমা</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].prof_diploma" >
                                        <option value="DUMS">D.U.M.S</option>
                                        <option value="DAMS">D.A.M.S</option>
                                        <option value="DHMS">D.H.M.S</option>
                                    </select></td>
                                <td class="text-right"> প্রফেশনাল ডিগ্রী</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].prof_degree" >
                                        <option value="MBBS">M.B.B.S</option>
                                        <option value="BUMS">B.U.M.S</option>
                                        <option value="BAMS">B.A.M.S</option>
                                        <option value="BHMS">B.H.M.S</option>
                                    </select></td>
                                <td class="text-right">বিএসসি ইঞ্জিনিয়ার</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].bsc_eng"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right">স্নাতক পাস / ফাযিল</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].ba"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>
                                <td class="text-right">স্নাতক সম্মান</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].hons" style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>
                                <td class="text-right">স্নাতকোত্তর /এমএস<br>/কামিল
                                </td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].mst"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>

                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right">বি.এজি.এড.</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].baged"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>
                                <td class="text-right">বি.এড.</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].bed"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>
                                <td class="text-right">এম.এড.</td>
                                <td>
                                    <select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].med"  style="width: 100px;">
                                        <option class="" value="01">1ST
                                        </option>
                                        <option class="" value="02">2ND
                                        </option>
                                        <option class="" value="03">3RD
                                        </option>
                                        <option class="" value="04">A+
                                        </option>
                                        <option class="" value="05">A
                                        </option>
                                        <option class="" value="06">A-
                                        </option>
                                        <option class="" value="07">B
                                        </option>
                                        <option class="" value="08">C
                                        </option>
                                        <option class="" value="09">D
                                        </option>
                                    </select></td>

                            </tr>
                            <tr class="banglaText">
                                <td class="text-right">দাওরায়ে হাদিস</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].daura_hadish" >
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select></td>
                                <td class="text-right">এম ফিল</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].mphil"  style="width: 100px;">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select></td>
                                <td class="text-right">পিএইচডি</td>
                                <td><select v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].phd"  style="width: 100px;">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select></td>
                            </tr>
                            <tr class="banglaText">
                                <td class="text-right">অন্যান্য শিক্ষাগত যোগ্যতা<br>ইংরেজীতে লিখুন(সর্বোচ্চ ৩০০ ক্যারেক্টার)</td>
                                <td colspan="2">
                                    <textarea style="width: 100%;height: 110px;" v-model="data.teacherStaffInfoGeneral[selectedTeacherIdx].other_edu"></textarea>
                                </td>
                                <td class="text-right">প্রশিক্ষণের তথ্য:</td>
                                <td colspan="2">
                                    <table class="table table-striped w-50">
                                        <tr v-for="(item,index)  in trainingArray">
                                            <td class="col-md-8">
                                                <select v-model="trainingArray[index]">
                                                    <option v-for="training in data.trainings" v-bind:value="training.training_id">@{{ training.training_name}}</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class=" btn btn-danger" @click="trainingArray.splice(index,1)">ডিলিট</button>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <button class="btn btn-success" @click="trainingArray.push(1)">প্রশিক্ষণ যোগ করুন</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="background-color: gainsboro;">
                <button type="button" class="btn btn-primary"  @click="saveTeacher">Save changes</button>
                <button type="button" class="btn btn-secondary" @click="cancelUpdate">Cancel</button>
            </div>
        </div>
    </div>
</div>