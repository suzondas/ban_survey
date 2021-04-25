@extends('components.template')
@section('content')
    <div class="container" id="teacherStaffInfo">
        <div v-if="!dataLoaded">
            <div class="d-flex justify-content-center">
                <h3 class="p-2">Loading...</h3>
                <div class="spinner-border" role="status">
                </div>
            </div>
        </div>

        <div v-if="dataLoaded" class="shadow p-3 mb-5 bg-white rounded p-2">
            <h3 style="text-align:center">শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
            <table id="example" class="table table-bordered" style="width:100%">
                <thead>
                <tr class="custom-table-header">
                    <th>ক্রমিক</th>
                    <th>নাম</th>
                    <th>পদবি</th>
                    <th>বিষয়</th>
                    <th>জন্ম তারিখ</th>
                    <th>NID নম্বর</th>
                    <th>মোবাইল</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(item, index) in data.teacherStaffInfoGeneral">
                    <td>@{{ index+1 }}</td>
                    <td><input  style="width:130px;" type="text" v-model="item.teach_name"/></td>
                    <td><select v-model="item.desig_id" style="width:130px;">
                            <option value="null">Select</option>
                            <option v-for="designation in data.designation" v-bind:value="designation.designation_id">@{{ designation.designation_name }}</option>
                        </select>
                    </td>
                    <td><select v-model="item.subject_id" style="width:130px;">
                            <option value="000">Select</option>
                            <option v-for="subject in data.subjects" v-bind:value="subject.subject_id">@{{ subject.subject_name }}</option>
                        </select>
                    </td>
                    <td><datepicker v-model="item.dob"></datepicker>
                    </td>
                    <td><input type="text" v-model="item.nid" style="width:100px;"/></td>
                    <td><input type="text" v-model="item.mobile_number" style="width:100px;"/></td>
                    <td class="form-inline">
                        <div class="btn-group" role="group" style="font-size: 11px;">
                            <button type="button" class="btn btn-success p-1 m-0" data-toggle="modal"
                                    data-target="#exampleModalLong">Details
                            </button>
                            <button type="button" class="btn btn-danger p-1 m-0" @click="removeTeacher(item.teach_name, item.id,index)">Delete
                            </button>
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
            <button class="btn btn-info" @click="addTeacher" style="border:1px solid black !important;">+ Add Teacher</button>
            <button class="btn btn-success" @click="saveAll">Save All</button>
        </div>

        <div v-show="dataLoadingError">
            <span class="d-flex justify-content-center btn-warning">Error in Fetching Data, Please contact System Administrator!</span>
        </div>
    </div>
    @include('components/teacherStaffInfoModal')
    <script src="{{ asset('js/teacherStaffInfo.js') }}" type="module" defer></script>
@endsection
