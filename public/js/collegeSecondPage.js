var app = angular.module('collegeSecondPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {

        /*Initial Variables*/
        $scope.data = null;

        /*===========================Helper Functions==============================*/

        /*FInding dipFName*/
        $scope.dipFName = function (id) {
            var dipFClassList = $scope.data.diplomaFisheriesClasses;
            var dipFClsName = null;
            dipFClassList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return dipFClsName = currentValue.class_name_bangla;
                }
            });
            return dipFClsName;
        }

        /*FInding dipAgName*/
        $scope.dipAgName = function (id) {
            var dipAgClassList = $scope.data.diplomaAgriClasses;
            var dipAgClsName = null;
            //console.log(dipAgClassList);
            dipAgClassList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return dipAgClsName = currentValue.class_name_bangla;
                }
            });
            return dipAgClsName;
        }

        /*FInding catStdName*/
        $scope.catStdName = function (id) {
            var catStdList = $scope.data.categoryWiseList;
            var catStdNm = null;
            catStdList.forEach(function (currentValue, index) {
                if (currentValue.category_id == id) {
                    return catStdNm = currentValue.details_bn;
                }
            });
            return catStdNm;
        }

        /*FInding catDisStdName*/
        $scope.catDisStdName = function (id) {
            var catDisStdList = $scope.data.disableCategory;
            var catDisStdNm = null;
            catDisStdList.forEach(function (currentValue, index) {
                if (currentValue.disable_type == id) {
                    return catDisStdNm = currentValue.disability_bn;
                }
            });
            return catDisStdNm;
        };

        /*upajatiName name finding*/
        $scope.findUpajaitName = function (id) {
            var upajatiList = $scope.data.upajatiList;
            var upajatiName = null;
            upajatiList.forEach(function (currentValue, index, arr) {
                if (currentValue.upajati_id == id) {
                    return upajatiName = currentValue.name_bn;
                }
            });
            return upajatiName;
        }

        /*===========================Helper Functions Ends==============================*/

        /*==========================Data Fetching=======================================*/
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeSecondPage/' + inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
        }, function (error) {
            console.log(error);
        });
        /*==========================Data Fetching Ends=======================================*/

        /*==========================Data Saving=======================================*/
        $scope.save = function () {
            console.log($scope.data.hscDiplomaFisheries);
            console.log($scope.data.hscDiplomaAgriculture);
            console.log($scope.data.categoryWiseStudent);
            console.log($scope.data.instituteSpecialStudents);
            console.log($scope.data.categoryWiseDisableStudent);
            console.log($scope.data.categoryWiseUpajati);
        }
        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.hscDiplomaFisheries = $scope.data.hscDiplomaFisheries;
            dataToSend.hscDiplomaAgriculture = $scope.data.hscDiplomaAgriculture;
            dataToSend.categoryWiseStudent = $scope.data.categoryWiseStudent;
            dataToSend.instituteSpecialStudents = $scope.data.instituteSpecialStudents;
            dataToSend.categoryWiseDisableStudent = $scope.data.categoryWiseDisableStudent;
            dataToSend.categoryWiseUpajati = $scope.data.categoryWiseUpajati;
            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/collegeSecondPage/submitData/',
                data: dataToSend,
                dataType: 'json'
            }).then(
                function (response) {
                    console.log(response);
                    alert("Second page data has been saved succesfull");
                },
                function (response) {
                    console.log(response);
                    alert("Try again");
                }
            );
        }

        /*==========================Data Saving Ends=======================================*/
    });
})(app);
app.directive('numberConverter', function () {
    return {
        priority: 1,
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, element, attr, ngModel) {
            function toModel(value) {
                return "" + value; // convert to string
            }

            function toView(value) {
                return parseInt(value); // convert to number
            }

            ngModel.$formatters.push(toView);
            ngModel.$parsers.push(toModel);
        }
    };
});