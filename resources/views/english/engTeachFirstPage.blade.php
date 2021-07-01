@extends('components.ngTemplate')
@section('content')
    <style>
        .w-50 {
            width: 40px !important;
        }
    </style>
    <div class="container-fluid" data-ng-app="engTeachFirstPage" ng-controller="myCtrl">
        <h3 style="text-align:center">সেকশন ২: শিক্ষার্থী, শিক্ষক ও কর্মচারী সম্পর্কিত তথ্য</h3>
        <div class="contentBox ">
            <div class="input-group contentHeader">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-number">২.৭</span>
                </div>
                <div class="form-control bg-number-label">শিক্ষক ও কর্মচারীর সংখ্যা:
                </div>
            </div>
            <div class="contentBoxBody">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td rowspan="2">পদবী</td>
                        <td colspan="2"> কর্মরত</td>
                        <td colspan="2"> বিদেশি শিক্ষক</td>
                    </tr>
                    <tr>
                        <td>মোট</td>
                        <td>মহিলা</td>
                        <td>মোট</td>
                        <td>মহিলা</td>
                    </tr>
                    <tbody>
                    <tr ng-repeat="item in data.teachStafSum">
                        <td ng-bind="desigName(item.designation_id)"></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.female_teachers_in_service"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.foreign_total"/></td>
                        <td><input type="number" number-converter class="w-50" ng-model="item.foreign_female"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center"><button ng-click="submitData()" type="button" class="btn btn-success">Submit</button></div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/engTeachFirstPage.js') }}"></script>
@stop