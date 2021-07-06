@extends('components.adminTemplate')
@section('content')
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded p-2 table-responsive mt-4">
            <a href="/logout" class="float-right logOutButton btn" style="">Logout</a>
            <h3 class="m-1 text-center font-weight-bold text-secondary"><u>USEO Panel</u></h3>
            <h6 class=" text-center font-weight-bold text-primary ">{{$thanaDtl->thana->thana_name}}
                , {{$thanaDtl->district->district_name}}</h6>
            <div class="row col-12 mt-1">
                <div class="row col-6">
                    <div class="col-4">
                        <div class="row">Institute Type:</div>
                        <div class="row mt-2">Submission:</div>
                        <div class="row mt-2">Verification:</div>
                    </div>
                    <div class="col-6">
                        <div class=""><select id="filterByInstType">
                                <option value>ALL</option>
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
                        <tr>
                            <td>Submitted</td>
                            <td>{{$countData->submitted}}</td>
                            <td>Not Submitted</td>
                            <td>{{$countData->total - $countData->submitted}}</td>
                        </tr>
                        <tr>
                            <td>Verified</td>
                            <td>{{$countData->verified_useo}}</td>
                            <td>Not Verified</td>
                            <td>{{$countData->total - $countData->verified_useo}}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="mt-2" style="background:#ddebf1;padding: 10px;">

                <table class="table-striped w-100 table-bordered bg-white" id="USEOTable">
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($institutes as $key=>$institute)
                        <tr>
                            <td class="w-auto">{{$key+1}}</td>
                            <td>{{$institute->eiin}}</td>
                            <td>{{$institute->institute_name_new}}</td>
                            <td>{{$institute->mobphone}}</td>
                            <td><input type="button" value="View" class="w-100"></td>
                            <td>
                                @if($institute->submitted ==1)
                                    <span style="color:green">Submitted</span>
                                @else
                                    <span style="color:red">Not Submitted</span>
                                @endif
                            </td>
                            <td>
                                @if($institute->verified_useo =='yes')
                                    <span style="color:green">Verified</span>
                                @else
                                    <span style="color:red">Not Verified</span>
                                @endif
                            </td>
                            <td>{{$institute->institute_type_id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
