var app = angular.module('collegeFirstPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {
        $scope.data = null;
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeFirstPage/'+inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
            $scope.stuentsSummery = $scope.data.studentSummery;
            $scope.findIndex = function(groupId, classId){
                var idx = null;
                for(var i =0;i<$scope.stuentsSummery.length;i++){
                    if($scope.stuentsSummery[i].class_id == classId && $scope.stuentsSummery[i].group_id == groupId){
                        idx = i;
                        break;
                    }
                }
                return idx;
            };
            $scope.console = function(){
                console.log($scope.stuentsSummery);
            }
            /*Occupation name finding*/
            $scope.occupationName = function (id) {
                var occupationsList = $scope.data.occupationsList;
                var occupationName = null;
                occupationsList.forEach(function (currentValue, index, arr) {
                    if(currentValue.occupation_id == id){
                        return occupationName = currentValue.details_bn;
                    }
                });
                return occupationName;
            }
            /*Occupation name finding*/

            /*FInding class name*/
            $scope.findClassName = function (id) {
                var classList = $scope.data.classes;
                var clsName = null;
                classList.forEach(function (currentValue, index) {
                        if(currentValue.class_id == id){
                            return clsName = currentValue.class_name_bangla;
                        }
                });
                return clsName;
                console.log(clsName)
            }
            /*FInding class name*/

            /*upajatiName name finding*/
            $scope.findUpajaitName = function (id) {
                var upajatiList = $scope.data.upajatiList;
                var upajatiName = null;
                upajatiList.forEach(function (currentValue, index, arr) {
                    if(currentValue.upajati_id == id){
                        return upajatiName = currentValue.name_bn;
                    }
                });
                return upajatiName;
            }
            /*upajatiName name finding*/

            /*FInding hscVocName*/
            $scope.hscVocName = function (id) {
                var vocClassList = $scope.data.vocClasses;
                var vocClsName = null;
                vocClassList.forEach(function (currentValue, index) {
                    if(currentValue.class_id == id){
                        return vocClsName = currentValue.class_name_bangla;
                    }
                });
                return vocClsName;
                console.log(vocClsName)
            }
            /*FInding hscVocName*/

            /*FInding hscBmName*/
            $scope.hscBmName = function (id) {
                var bmClassList = $scope.data.bmClasses;
                var bmClsName = null;
                bmClassList.forEach(function (currentValue, index) {
                    if(currentValue.class_id == id){
                        return bmClsName = currentValue.class_name_bangla;
                    }
                });
                return bmClsName;
                console.log(bmClsName)
            }
            /*FInding hscBmName*/

            /*FInding dipFName*/
            $scope.dipFName = function (id) {
                var dipFClassList = $scope.data.diplomaFisheriesClasses;
                var dipFClsName = null;
                dipFClassList.forEach(function (currentValue, index) {
                    if(currentValue.class_id == id){
                        return dipFClsName = currentValue.class_name_bangla;
                    }
                });
                return dipFClsName;
                console.log(dipFClsName)
            }
            /*FInding dipFName*/


            /*FInding dipAgName*/
            $scope.dipAgName = function (id) {
                var dipAgClassList = $scope.data.diplomaAgriClasses;
                var dipAgClsName = null;
                dipAgClassList.forEach(function (currentValue, index) {
                    if(currentValue.class_id == id){
                        return dipAgClsName = currentValue.class_name_bangla;
                    }
                });
                return dipAgClsName;
                console.log(dipAgClsName)
            }
            /*FInding dipAgName*/

            /*FInding catStdName*/
            $scope.catStdName = function (id) {
                var catStdList = $scope.data.categoryWiseList;
                var catStdNm = null;
                catStdList.forEach(function (currentValue, index) {
                    if(currentValue.category_id == id){
                        return catStdNm = currentValue.details_bn;
                    }
                });
                return catStdNm;
                console.log(catStdNm)
            }
            /*FInding catStdName*/

            /*FInding catDisStdName*/
            $scope.catDisStdName = function (id) {
                var catDisStdList = $scope.data.disableCategory;
                var catDisStdNm = null;
                catDisStdList.forEach(function (currentValue, index) {
                    if(currentValue.disable_type == id){
                        return catDisStdNm = currentValue.disability_bn;
                    }
                });
                return catDisStdNm;
                console.log(catDisStdNm)
            }
            /*FInding catDisStdName*/

        }, function (error) {
                console.log(error);
        });

        /*Saving Data*/
        $scope.save= function () {
                console.log($scope.data.studentSummaryTotal);
                console.log($scope.data.stuentsSummery);
                console.log($scope.data.studentSummaryRepeater);
                console.log($scope.data.studentSummaryDropout);
                console.log($scope.data.hscVocStudent);
                console.log($scope.data.hscBmStudent);
                console.log($scope.data.hscDiplomaFisheries);
                console.log($scope.data.hscDiplomaAgriculture);
                console.log($scope.data.categoryWiseStudent);
                console.log($scope.data.instituteSpecialStudents);
                console.log($scope.data.categoryWiseDisableStudent);
                console.log($scope.data.categoryWiseUpajati);
                console.log($scope.data.ageWiseStudent);
                console.log($scope.data.guardianOccupation);
        }
    });
})(app);