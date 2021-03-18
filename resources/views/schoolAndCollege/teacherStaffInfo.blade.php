@extends('schoolAndCollege/template')
@section('content')
    @include('../components/banner')
    @include('schoolAndCollege.navBar')
    <hr>
    <div class="container">
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
            <tr>
                <td>১</td>
                <td><input type="text"/></td>
                <td><select>
                        <option></option>
                    </select>
                </td>
                <td><select>
                        <option></option>
                    </select>
                </td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td class="form-inline">
                    <div class="btn-group" role="group" style="font-size: 11px;">
                        <button type="button" class="btn btn-success p-1 m-0" data-toggle="modal" data-target="#exampleModalLong">View</button>
                        <button type="button" class="btn btn-danger p-1 m-0" onclick="confirm('Are You Sure to Delete?');">Delete</button>
                    </div>
                </td>

            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>ক্রমিক</th>
                <th>নাম</th>
                <th>পদবি</th>
                <th>বিষয়</th>
                <th>জন্ম তারিখ</th>
                <th>NID নম্বর</th>
                <th>মোবাইল</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>

    </div>
    @include('components/footer')
    @include('components/teacherStaffInfoModal')
@endsection
