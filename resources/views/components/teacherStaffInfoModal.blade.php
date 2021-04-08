<div class="modal modal-max" id="exampleModalLong" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-max" role="document">
        <div class="modal-content modal-max">
            <div class="modal-header">
                <h5 class="modal-title">শিক্ষক কর্মচারীর তথ্য</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-max">
                <div class="card">
                    <div class="card-header bg-info font-weight-bold">
                        <div class="row">
                            <div class="col-md-6 text-white"><label>সাধারণ তথ্য</label></div>
                            <div class="col-md-6 text-right">বর্তমানে কর্মরত কি না ?
                                <select name="isInactive" id="isInactive">
                                    <option class="englishTextC1" value="" selected="selected">কর্মরত</option>
                                    <option class="englishTextC1" value="R">অবসরপ্রাপ্ত</option>
                                    <option class="englishTextC1" value="D">মৃত</option>
                                    <option class="englishTextC1" value="T">বদলি</option>
                                    <option class="englishTextC1" value="A">বহিঃস্কৃত</option>
                                    <option class="englishTextC1" value="S">সাময়িক বহিঃস্কৃত</option>
                                    <option class="englishTextC1" value="G">চাকুরি হতে ইস্তফা নিয়েছেন</option>
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
                                    <input id="techGeneralInfoIdS" name="techGeneralInfoIdS" type="hidden" value="">
                                    <input id="techName" name="techName" type="text">
                                </td>
                                <td class="text-right"> পুরুষ / মহিলা</td>
                                <td>
                                    <select name="sex" id="sex">
                                        <option value=""></option>
                                        <option value="2" selected="selected">মহিলা</option>
                                        <option value="1">পুরুষ</option>
                                    </select>
                                </td>
                                <td class="text-right">জাতীয় পরিচয়পত্র নং</td>
                                <td><input id="nid" name="nid" type="text"></td>
                            </tr>
                            <tr>
                                <td class="text-right">ধর্ম</td>
                                <td><select name="religion" id="religion">
                                        <option value="">None</option>
                                        <option value="ISLAM" selected="selected">ISLAM</option>
                                        <option value="HINDUISM">HINDUISM</option>
                                        <option value="CHRISTIANITY">CHRISTIANITY</option>
                                        <option value="BUDDHISM">BUDDHISM</option>
                                        <option value="OTHERS">OTHERS</option>
                                    </select></td>
                                <td class="text-right">পদবি</td>
                                <td>
                                    <select name="desigIdS" id="desigIdS">
                                    </select>
                                </td>
                                <td class="text-right"> শিক্ষক / কর্মচারীর ধরন</td>
                                <td><select name="teacherType" id="teacherType">
                                        <option value="TECHNICAL">কারিগরি</option>
                                        <option value="GENERAL" selected="selected">জেনারেল</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td class="text-right">বিষয়</td>
                                <td><select name="subjectIdS" id="subjectIdS">
                                    </select>
                                </td>
                                <td class="text-right">বিষয় (যদি list এ না থাকে)</td>
                                <td><input id="subName" name="subName" type="text"></td>
                                <td class="text-right"> নিয়োগের ধরন</td>
                                <td><select name="recruitmentType" id="recruitmentType">
                                        <option value="PERMANENT" selected="selected">নিয়মিত</option>
                                        <option value="PART TIME">খন্ডকালীন</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td class="text-right">চাকুরিতে
                                    প্রথম যোগদানের তারিখ
                                </td>
                                <td><input id="fristJoiningDateS" name="fristJoiningDateS"/><br> দিন/মাস/বছর
                                </td>
                                <td class="text-right">বর্তমান
                                    পদে যোগদানের তারিখ
                                </td>
                                <td><input id="currentJoiningDateS" name="currentJoiningDateS"> <br> দিন/মাস/বছর
                                </td>
                                <td class="text-right">জন্ম তারিখ</td>
                                <td><input id="dobS" name="dobS"> <br> দিন/মাস/বছর
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">মোবাইল নম্বর</td>
                                <td><input id="mobileNumber" name="mobileNumber" type="text"></td>
                                <td class="text-right">মোবাইল ব্যাংকিং এর ধরন <br>(যদি থাকে)</td>
                                <td><select name="mobBankingType" id="mobBankingType">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="bKash">bKash
                                        </option>
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
                                <td><input id="mobileBankingNum" name="mobileBankingNum" type="text"></td>
                            </tr>
                            <tr>
                                <td class="text-right">জাতীয় বেতন গ্রেড</td>
                                <td><input name="payScale" id="payScale" type="text"/>
                                </td>
                                <td class="text-right">এমপিওভুক্তির তারিখ</td>
                                <td><input id="mpoDateS" name="mpoDateS"> <br> দিন/মাস/বছর
                                </td>
                                <td class="text-right">NTRCA সুপারিশকৃত নিয়োগ কিনা</td>
                                <td><select name="ntrcRecruitmentYN" id="ntrcRecruitmentYN">
                                        <option value="2" selected="selected">No</option>
                                        <option value="1">Yes</option>
                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right">NTRCA Reg. (যদি থাকে)</td>
                                <td><input id="ntrca" name="ntrca" type="text" value=""></td>
                                <td class="text-right">Index নম্বর</td>
                                <td><input id="indexNo" name="indexNo" type="text" value=""></td>
                                <td class="text-right">TIN নম্বর</td>
                                <td><input id="tinNumber" name="tinNumber" type="text" value=""></td>
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
                                <td><select name="ssc" id="ssc" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>

                                <td class="text-right">এইচ এসসি / সমমান</td>
                                <td><select name="hsc" id="hsc" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                                <td class="text-right">ডিপ্লোমা</td>
                                <td><select name="diploma" id="diploma" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right"> প্রফেশনাল ডিপ্লোমা</td>
                                <td><select name="profDiploma" id="profDiploma">
                                        <option value=""></option>
                                        <option value="DUMS">D.U.M.S</option>
                                        <option value="DAMS">D.A.M.S</option>
                                        <option value="DHMS">D.H.M.S</option>
                                    </select></td>
                                <td class="text-right"> প্রফেশনাল ডিগ্রী</td>
                                <td><select name="profDegree" id="profDegree">
                                        <option value=""></option>
                                        <option value="MBBS">M.B.B.S</option>
                                        <option value="BUMS">B.U.M.S</option>
                                        <option value="BAMS">B.A.M.S</option>
                                        <option value="BHMS">B.H.M.S</option>
                                    </select></td>
                                <td class="text-right">বিএসসি ইঞ্জিনিয়ার</td>
                                <td><select name="bscEng" id="bscEng" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right">স্নাতক পাস / ফাযিল</td>
                                <td><select name="ba" id="ba" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                                <td class="text-right">স্নাতক সম্মান</td>
                                <td><select name="hons" id="hons" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                                <td class="text-right">স্নাতকোত্তর /এমএস<br>/কামিল
                                </td>
                                <td><select name="mst" id="mst" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                            </tr>
                            <tr class="">
                                <td class="text-right">বি.এজি.এড.</td>
                                <td><select name="baged" id="baged" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                                <td class="text-right">বি.এড.</td>
                                <td><select name="bed" id="bed" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>
                                <td class="text-right">এম.এড.</td>
                                <td><select name="med" id="med" style="width: 100px;">
                                        <option value="" selected="selected">নির্দিষ্ট করুন</option>
                                        <option selected="selected" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="00">None
                                        </option>
                                        <option class="englishTextC1" value="01">1ST
                                        </option>
                                        <option class="englishTextC1" value="02">2ND
                                        </option>
                                        <option class="englishTextC1" value="03">3RD
                                        </option>
                                        <option class="englishTextC1" value="04">A+
                                        </option>
                                        <option class="englishTextC1" value="05">A
                                        </option>
                                        <option class="englishTextC1" value="06">A-
                                        </option>
                                        <option class="englishTextC1" value="07">B
                                        </option>
                                        <option class="englishTextC1" value="08">C
                                        </option>
                                        <option class="englishTextC1" value="09">D
                                        </option>
                                        <option class="englishTextC1" value="10">EIGHT
                                        </option>
                                    </select></td>

                            </tr>
                            <tr class="banglaText">
                                <td class="text-right">দাওরায়ে হাদিস</td>
                                <td><select name="dauraHadish" id="dauraHadish">
                                        <option value="2" selected="selected">No</option>
                                        <option value="1">Yes</option>
                                    </select></td>
                                <td class="text-right">এম ফিল</td>
                                <td><select name="mphil" id="mphil" style="width: 100px;">
                                        <option value="2" selected="selected">No</option>
                                        <option value="1">Yes</option>
                                    </select></td>
                                <td class="text-right">পিএইচডি</td>
                                <td><select name="phd" id="phd" style="width: 100px;">
                                        <option value="2" selected="selected">No</option>
                                        <option value="1">Yes</option>
                                    </select></td>
                            </tr>
                            <tr class="banglaText">
                                <td class="text-right">অন্যান্য শিক্ষাগত যোগ্যতা</td>
                                <td colspan="2">
                                    <textarea style="width: 100%;height: 110px;" id="otherEdu" name="otherEdu" type="text"></textarea>
                                </td>
                                <td class="text-right">প্রশিক্ষণের তথ্য:</td>
                                <td colspan="2">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <select class="w-100 form-control"><option></option></select>
                                        </div>
                                        <div class="col-md-4">
                                            <button class=" btn btn-danger m-0 p-1">ডিলিট</button>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-success">প্রশিক্ষণ যোগ করুন</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>