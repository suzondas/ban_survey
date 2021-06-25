@extends('components.adminTemplate')
@section('content')
    <div class="container" id="adminDeo">
        <div v-if="!dataLoaded">
            <div class="d-flex justify-content-center">
                {{--
                                <h3>Loading <img src="{{ asset('img/loader2.gif') }}" style="height: 100px;"/></h3>
                --}}
            </div>
        </div>

        <div v-if="dataLoaded" class="shadow p-3 mb-5 bg-white rounded p-2 table-responsive mt-4">
            <h3 class=" text-center font-weight-bold text-secondary"><u>DEO Panel</u></h3>
            <h6 class=" text-center font-weight-bold text-primary ">KHULNA</h6>
<div class=" row col-12 mt-2">
    <div class="col-11 font-weight-bold ">
        KHULNA District
    </div>

    <div class="col-1">
        <input type="button" class="btn-danger" value="LogOut">
    </div>
</div>
            <div class="row col-12 mt-1">
                <div class="row col-5">
                    <div class="col-4">
                        <div class="row">EIIN:</div>
                        <div class="row mt-2">Institute Type:</div>
                        <div class="row mt-2">Thana:</div>
                        </div>
                    <div class="col-6">
                        <div><input type="number" class="w-50"></div>
                        <div class="mt-2"><select>
                                <option value="9">ENGLISH MEDIUM SCHOOL</option>
                                <option value="8">PUBLIC UNIVERSITY</option>
                                <option value="7">PROFESSIONAL</option>
                                <option value="6">TEACHERS TRAINING</option>
                                <option value="5">TECHNICAL INSTITUTION</option>
                                <option value="4">SCHOOL &amp; COLLEGE</option>
                                <option value="3">COLLEGE</option>
                                <option value="2">MADRASHA</option>
                                <option value="12">PRIVATE UNIVERSITY</option>
                                <option value="11">QUAMI MADRASAH</option>
                                <option value="10">INDEPENDENT EBTEDAYEE</option>
                                <option value="1">SCHOOL</option>
                            </select></div>
                        <div class="mt-2"><select>
                                <option value="9">select</option>
                                <option value="9">Khan Jahan Ali</option>
                            </select></div>
                        <div class="mt-2"><input type="button" class="btn-outline-" value="Search"></div>
                    </div>
                </div>
                <div class="col-6">

                        <table class="table table-bordered table-striped text-center">
                            <tbody>
                            <tr>
                                <td>Total Institute</td>
                                <td colspan="3">512</td>
                            </tr>
                            <tr>
                                <td>Submitted</td>
                                <td>400</td>
                                <td>Not Submitted</td>
                                <td>112</td>
                            </tr>
                            <tr>
                                <td>Varified By Ap</td>
                                <td>300</td>
                                <td>Varified by USEO</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Not Varified</td>
                                <td colspan="3">100</td>
                            </tr>
                            </tbody>
                        </table>

                </div>
            </div>

            <div class="mt-2">
                <table id="deoTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr class="custom-table-header">
                        <th>ক্রম</th>
                        <th>প্রতিষ্ঠানের নাম</th>
                        <th>মোবাইল নম্বর</th>
                        <th>জরিপের তথ্য</th>
                        <th>বর্তমান অবস্থা</th>
                        <th>ভেরিফিকেশন</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="w-auto">১</td>
                        <td>ISLAMIC UNIVERSITY OF TECHNOLOGY,GAZIPUR</td>
                        <td>01788888888</td>
                        <td><input type="button" value="View" class="w-50 btn-info"></td>
                        <td>Varified By AP</td>
                        <td><button type="button" class="btn btn-danger p-1">Unvarify</button></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ক্রম</th>
                        <th>প্রতিষ্ঠানের নাম</th>
                        <th>মোবাইল নম্বর</th>
                        <th>জরিপের তথ্য</th>
                        <th>বর্তমান অবস্থা</th>
                        <th>ভেরিফিকেশন</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div v-show="dataLoadingError">
            {{--
                        <span class="d-flex justify-content-center btn-warning">Error in Fetching Data, Please contact System Administrator!</span>
            --}}
        </div>
        @include('components/teacherStaffInfoModal')
    </div>
    {{-- <script src="{{ asset('js/teacherStaffInfo.js') }}" type="module" defer></script>--}}
@endsection
