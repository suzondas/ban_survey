@extends('components.adminTemplate')
@section('content')
    <div class="container">
        <div class="shadow mb-5 bg-white rounded p-2 table-responsive mt-2">
            <a href="/logout" class="float-right logOutButton btn" style="">Logout</a>
            <h5 class="m-1 text-center font-weight-bold">District Education Officer (DEO) Panel
            </h5>
            <h6 class=" text-center font-weight-bold text-primary ">{{$districtDtl->district->district_name}}</h6>
            <hr>
            <div class="row col-12 mt-1">
                <div class="row col-6">
                    <div class="col-4">
                        <div class="row">Upazila:</div>
                        <div class="row">Institute Type:</div>
                        <div class="row mt-2">Submission:</div>
                        <div class="row mt-2">Verification:</div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <select id="filterByUpazila">
                                <option value>All</option>
                                @foreach($districtDtl->thanas as $thana)
                                    <option value="{{$thana->thana_id}}">{{$thana->thana_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=""><select class="mt-2" id="filterByInstType">
                                <option value>All</option>
                                <option value="1">SCHOOL</option>
                                <option value="2">MADRASHA</option>
                                <option value="3">COLLEGE</option>
                                <option value="4">SCHOOL &amp; COLLEGE</option>
                                <option value="5">TECHNICAL INSTITUTION</option>
                                <option value="6">TEACHERS TRAINING</option>
                                <option value="7">PROFESSIONAL</option>
                                <option value="8">PUBLIC UNIVERSITY</option>
                                <option value="9">ENGLISH MEDIUM SCHOOL</option>
                                <option value="10">INDEPENDENT EBTEDAYEE</option>
                                <option value="11">QUAMI MADRASAH</option>
                                <option value="12">PRIVATE UNIVERSITY</option>
                            </select></div>
                        <div class=""><select class="mt-2" id="filterBySubmission">
                                <option value>All</option>
                                <option value="Submitted">Submitted</option>
                                <option value="Not Submitted">Not Submitted</option>
                            </select></div>
                        <div class=""><select class="mt-2" id="filterByVerification">
                                <option value>All</option>
                                <option value="Verified">Verified</option>
                                <option value="Not Verified">Not Verified</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <table class="w-100 table-bordered table-striped text-center">
                        <tbody>
                        <tr class="custom-table-header">

                            <td>Total Institutes</td>
                            <td colspan="3">{{$countData->total}}</td>
                        </tr>
                        <tr class="">
                            <td>Total Upazila</td>
                            <td colspan="3">{{sizeof($districtDtl->thanas)}}</td>
                        </tr>
                        <tr>
                            <td>Submitted</td>
                            <td>{{$countData->submitted}}</td>
                            <td>Not Submitted</td>
                            <td>{{$countData->total - $countData->submitted}}</td>
                        </tr>
                        <tr>
                            <td>Verified by USEO</td>
                            <td>{{$countData->verified_useo}}</td>
                            <td>Not Verified by USEO</td>
                            <td>{{$countData->total - $countData->verified_useo}}</td>
                        </tr>
                        <tr>
                            <td>Verified by DEO</td>
                            <td>{{$countData->verified_deo}}</td>
                            <td>Not Verified by DEO</td>
                            <td>{{$countData->total - $countData->verified_deo}}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="mt-2" style="background:#ddebf1;padding: 10px;">

                <table class="table-striped w-100 table-bordered bg-white" id="adminTable">
                    <thead>
                    <tr class="custom-table-header">
                        <th>SL</th>
                        <th>EIIN</th>
                        <th>Inst. Name</th>
                        <th>Mobile No.</th>
                        <th>View Details</th>
                        <th>Submission</th>
                        <th>Verification</th>
                        <th>Inst. Type</th>
                        <th>Thana</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($institutes as $key=>$institute)
                        <tr>
                            <td class="w-auto">{{$key+1}}</td>
                            <td>{{$institute->eiin}}</td>
                            <td>{{$institute->institute_name_new}}</td>
                            <td>{{$institute->mobphone}}</td>
                            <td><a href="AdminViewInst?instTypeId={{$institute->institute_type_id}}&instId={{$institute->institute_id}}" target="_blank"><input type="button" value="View" class="w-100"></a> </td>
                            <td>
                                @if($institute->submitted ==1)
                                    <span style="color:green">Submitted</span>
                                @else
                                    <span style="color:red">Not Submitted</span>
                                @endif
                            </td>
                            <td>
                                @if($institute->verified_deo =='yes')
                                    <span style="color:green">Verified</span>
                                @else
                                    <span style="color:red">Not Verified</span>
                                @endif
                            </td>
                            <td>{{$institute->institute_type_id}}</td>
                            <td>{{$institute->thana_id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
