var app = angular.module('tecStdFirstPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {

        /*Initial Variables*/
        $scope.data = null;

        /*===========================Helper Functions==============================*/
        // Console global

        /*FInding sscVocName*/
        $scope.sscVocName = function (id) {
            var svocClassList = $scope.data.sscVocClasses;
            var svocClsName = null;
            svocClassList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return svocClsName = currentValue.class_name_bangla;
                }
            });
            return svocClsName;
        }

        /*FInding hscVocName*/
        $scope.hscVocName = function (id) {
            var vocClassList = $scope.data.hscVocClasses;
            var vocClsName = null;
            vocClassList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return vocClsName = currentValue.class_name_bangla;
                }
            });
            return vocClsName;
        }

        /*FInding hscBmName*/
        $scope.hscBmName = function (id) {
            var bmClassList = $scope.data.bmClasses;
            var bmClsName = null;
            bmClassList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return bmClsName = currentValue.class_name_bangla;
                }
            });
            return bmClsName;
        }

        /*FInding oneYr Certificate Name*/
        $scope.oneYrName = function (id) {
            var oneYrClassList = $scope.data.oneYrClasses;
            var oneYrClsName = null;
            oneYrClassList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return oneYrClsName = currentValue.class_name_bangla;
                }
            });
            return oneYrClsName;
        }
        /*Finding one yr adv certificate name oneYrAdvClasses*/

        $scope.oneYrAdvName = function (id) {
            var oneYrAdvClassList = $scope.data.oneYrAdvClasses;
            var oneYrAdvClassName = null;
            oneYrAdvClassList.forEach(function (currentValue, index) {
                    if (currentValue.class_id == id) {
                        return oneYrAdvClassName = currentValue.class_name_bangla;
                    }
                }
            );
            return oneYrAdvClassName;
        }
        /*===========================Helper Functions Ends==============================*/

        /*==========================Data Fetching=======================================*/
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/tecStdFirstPage/' + inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
        }, function (error) {
            console.log(error);
        });
        /*==========================Data Fetching Ends=======================================*/

        /*==========================Data Saving=======================================*/

        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.studentSummaryTotal = $scope.data.studentSummaryTotal;
            dataToSend.sscVocStudent = $scope.data.sscVocStudent;
            dataToSend.hscVocStudent = $scope.data.hscVocStudent;
            dataToSend.hscBmStudent = $scope.data.hscBmStudent;
            dataToSend.one_yr_certificate = $scope.data.one_yr_certificate;
            dataToSend.one_yr_adv_certificate = $scope.data.one_yr_adv_certificate;
            dataToSend.studentSummaryRepeater = $scope.data.studentSummaryRepeater;
            dataToSend.studentSummaryDropout = $scope.data.studentSummaryDropout;
            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/tecStdFirstPage/submitData/',
                data: dataToSend,
                dataType: 'json'
            }).then(
                function (response) {
                    console.log(response);
                    alert("First page data has been saved succesfull");
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