var app = angular.module('madStdFourthPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {

        /*Initial Variables*/
        $scope.data = null;

        /*===========================Helper Functions==============================*/
        // Console global
        $scope.console = function () {
            console.log($scope.data.occupationsList);
        };

        /*Occupation name finding*/
        $scope.occupationName = function (id) {
            var occupationsList = $scope.data.occupationsList;
            var occupationName = null;
            occupationsList.forEach(function (currentValue, index, arr) {
                if (currentValue.occupation_id == id) {
                    return occupationName = currentValue.details_bn;
                }
            });
            return occupationName;
        };

        /*FInding ebt age class name*/
        $scope.findEbtClassName = function (id) {
            var classList = $scope.data.ebtClasses;
            var clsName = null;
            classList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return clsName = currentValue.class_name_bangla;
                }
            });
            return clsName;
        };

        /*FInding school age class name*/
        $scope.findClassName = function (id) {
            var classList = $scope.data.schClasses;
            var clsName = null;
            classList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return clsName = currentValue.class_name_bangla;
                }
            });
            return clsName;
        };

        /*FInding college age class name*/
        $scope.findColClassName = function (id) {
            var classList = $scope.data.colClasses;
            var clsName = null;
            classList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return clsName = currentValue.class_name_bangla;
                }
            });
            return clsName;
        };

        /*===========================Helper Functions Ends==============================*/

        /*==========================Data Fetching=======================================*/
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/madStdFourthPage/' + inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
        }, function (error) {
            console.log(error);
        });
        /*==========================Data Fetching Ends=======================================*/

        /*==========================Data Saving=======================================*/
        $scope.save = function () {
            console.log($scope.data.guardianOccupation);
            console.log($scope.data.ageWiseEbtStudentData);
            console.log($scope.data.ageWiseSecStudentData);
            console.log($scope.data.ageWiseStudent);
        }

        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.guardianOccupation = $scope.data.guardianOccupation;
            dataToSend.ageWiseEbtStudentData = $scope.data.ageWiseEbtStudentData;
            dataToSend.ageWiseSecStudentData = $scope.data.ageWiseSecStudentData;
            dataToSend.ageWiseStudent = $scope.data.ageWiseStudent;
            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/madStdFourthPage/submitData/',
                data: dataToSend,
                dataType: 'json'
            }).then(
                function (response) {
                    console.log(response);
                    alert("Fourth page data has been saved succesfull");
                },
                function (response) {
                    console.log(response);
                    alert("Try again");
                }
            );
        }
        /*==========================Data Saving END=======================================*/
    });
})(app);
app.directive('numberConverter', function() {
    return {
        priority: 1,
        restrict: 'A',
        require: 'ngModel',
        link: function(scope, element, attr, ngModel) {
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